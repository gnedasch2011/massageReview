<?php

namespace app\modules\item\controllers;

use app\components\model\AdminModel;
use app\modules\image\models\ImageLoader;
use app\modules\item\models\Cons;
use app\modules\item\models\Pros;
use app\modules\item\models\Specifications;
use app\modules\site\components\SiteController;
use common\helpers\CommonHelpers;
use yii\base\Model;
use yii\web\Controller;
use Yii;
use yii\web\UploadedFile;

/**
 * Default controller for the `item` module
 */
class AdminController extends \app\modules\site\components\AdminController
{


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = new \app\modules\item\models\Items();

        //загружаем все отношения в модель
        $model->populateAllRelations($model);

        $model->pros = AdminModel::createMultiModels($model->pros, Yii::$app->request->post());
        $model->cons = AdminModel::createMultiModels($model->cons, Yii::$app->request->post());


        $model->load(Yii::$app->request->post());

        $ImageLoader = new ImageLoader();

        $model->imageFiles = UploadedFile::getInstances($ImageLoader, 'imageFiles');

        $model->save();

        return $this->render('index', [
            'model' => $model,
            'ImageLoader' => $ImageLoader,
        ]);

    }
}
