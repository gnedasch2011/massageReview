<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 27.01.2020
 * Time: 9:11
 */

namespace app\modules\url\components;

use app\modules\url\models\Url;
use yii\helpers\Json;

class UrlRule extends \yii\web\UrlRule
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        if ($this->name === null) {
            $this->name = __CLASS__;
        }
    }

    /**
     * @param \yii\web\UrlManager $manager
     * @param string $route
     * @param array $params
     * @return bool|string
     */
    public function createUrl($manager, $route, $params)
    {
 
        /* @var $url \app\modules\url\models\Url */
        $param = isset($params['id']) ? $params['id'] : 0;

        $url = Url::getByRoute($route, $param);
        if (!$url) {
            return false;
        }
//        echo "<pre>"; print_r($url->getAttribute('alias'));die();
        return $url->getAttribute('alias');
    }


    /**
     * @param \yii\web\UrlManager $manager
     * @param \yii\web\Request $request
     * @return array|bool
     * @throws \yii\base\InvalidConfigException
     */
    public function parseRequest($manager, $request)
    {

        /* @var $route \app\modules\url\models\Url */

        $alias = $request->getPathInfo();

        //отправка utm в корзину
            
        if (strpos($request->getUrl(), '?')) {
            $session = \Yii::$app->session;

            if(!$session->has('utm_bar')){
                $session->set('utm_bar', $request->getUrl());
            }
        }


        $route = Url::getByAlias($alias);
    
        if (!$route) {
            return false;
        }

        return [
            $route->getAttribute('route'),
            [
                'id' => $route->getAttribute('param'),
                'params_for_filter' => $route->getAttribute('params_for_filter'),
            ],
        ];
    }
}