<?php
namespace app\modules\site\components;

use app\common\helpers\YamaguchiHelper;
use Yii;
use app\modules\category\models\Category;
use app\modules\cart\components\Cart;

use app\modules\product\models\Product;
use app\modules\url\models\Url;


class SiteController extends \frontend\controllers\SiteController
{
    public $layout = '//site/main';

    public function init()
    {
        parent::init();

        $this->unsetBundles();

        if(!Yii::$app->request->isAjax) {
            $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=1230'], 'viewport');

            // Состояние корзины

            // Устанавливает признак администратора
            $user = Yii::$app->getUser();
            if($user->identity && $user->identity->role == 'admin') {
                $this->view->isAdmin = true;
            }
        }
    }

    /**
     * Отключает набор бандлов yii<br>
     * Используется в методах возвращающих формы по ajax запросам для модальных окон<br>
     * Нужно для предотвращения повторной загрузки js файлов (jquery.js, yii.js, yii.ACtiveForm, etc)
     */
    public function unsetBundles()
    {
        $manager = Yii::$app->assetManager;

        $manager->bundles['yii\web\JqueryAsset'] = false;
        $manager->bundles['yii\web\YiiAsset'] = false;
        $manager->bundles['yii\widgets\ActiveFormAsset'] = false;
        $manager->bundles['yii\validators\ValidationAsset'] = false;
    }

    public function getAlias()
    {
        return substr(Yii::$app->request->url, 1);
    }

    /**
     * Устанавливает параметры страница
     * мета теги и переменную isLanding
     * @param $model - объект класса Url или модель содержищая связь Url (страница, товар или катеория)
     */
    public function setPageParams($model)
    {
        $url = null;
        if($model instanceof Url) {
            $url = $model;
        } elseif(isset($model->url) && $model->url instanceof Url) {
            $url = $model->url;
        }

        if($url) {
            $this->view->title = $url->title;
            $this->view->registerMetaTag(['name' => 'keywords', 'content' => $url->keywords]);
            $this->view->registerMetaTag(['name' => 'description', 'content' => $url->description]);

            if($url->isAdaptive) {
                $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1'], 'viewport');
            } else {
                $this->view->registerMetaTag(['name' => 'viewport', 'content' => 'width=1230'], 'viewport');
            }
        }

        if(isset($model->isLanding) && $model->isLanding) {
            $this->layout = '//site/main_landing';
            $this->view->isLanding = $model->isLanding;
        }

        return;
    }

    /**
     * Возвращает имя шаблона, если файл существует или дефолтный view<br>
     * @param object $model
     * @return string
     */
    public function setTemplate($model = null)
    {
        $view = $this->getView();
        $folder = $view->theme->basePath.'/modules/'.$this->module->id.'/views/'.$this->id.'/pages/';

        if($model instanceof Product) {
            $model->uri = YamaguchiHelper::intersharmSearch($model->uri);

            $file = $folder.$model->uri.'.php';

            if($model->isLanding && file_exists($file)) {
                return 'pages/'.$model->uri;
            }
        }

        if(isset($model->template)) {
            $file = $folder.$model->template.'.php';

            if(file_exists($file)) {
                return 'pages/'.$model->template;
            }
        }

        return 'view';
    }

    /**
     * Возвращает страница по текущему адресу<br>
     * Если старница не найдена - возвращает 404 ошибку<br>
     * Так же устанавливает параметры страницы setPageParams
     * @return \app\modules\url\models\obj
     */
    public function getPage()
    {
        $page = Url::getByAlias(Yii::$app->request->pathInfo);
        if(!$page) {
            throw new NotFoundHttpException;
        }

        $this->setPageParams($page);
        return $page;
    }
}