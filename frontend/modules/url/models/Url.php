<?php

namespace app\modules\url\models;

use yii\helpers\Json;
use app\modules\url\models\UrlBase;

class Url extends UrlBase
{
    /**
     * Возвращает адрес страницы по псевдониму
     * @param str $alias - адрес страницы
     * @param type $status - статус
     * @return obj
     */
    public static function getByAlias($alias, $status = self::STATUS_ENABLE)
    {
//		return self::getDb()->cache(function($db) use ($alias, $status) {
        return self::find()->where(
            'alias = :alias AND status = :status',
            [
                ':alias' => $alias,
                ':status' => $status,
            ]
        )->one();
//		});

    }

    /**
     * Возвращает адрес по системнопу пути
     * @param str $route - системный путь
     * @param array $param - массив с get параметрами
     * @param int $status - статус
     * @return obj
     */
    public static function getByRoute($route, $param, $status = self::STATUS_ENABLE)
    {
//		return self::getDb()->cache(function($db) use ($route, $params, $status) {
        return self::find()->where(
            'route = :route AND param = :param AND status = :status',
            [
                ':route' => $route,
                ':param' => $param,
                ':status' => $status
            ]
        )->one();
//		});
    }

    /**
     * @param $alias - адрес страницы
     * @param $route - системный адрес
     * @param array $params - get параметры
     * @param array $metaParams
     * @param int $status - статус
     * @return bool
     */
    public static function createUrl($alias, $route, $params = [], $metaParams = [], $status = self::STATUS_ENABLE)
    {
        $url = new Url;
        $url->alias = $alias;
        $url->route = $route;
        $url->params = Json::encode($params);
        $url->status = $status;
        $url->title = isset($metaParams['title']) ? $metaParams['title'] : '';
        $url->keywords = isset($metaParams['keywords']) ? $metaParams['keywords'] : '';
        $url->description = isset($metaParams['description']) ? $metaParams['description'] : '';

        return $url->save();
    }

    /**
     * @param $alias
     * @param $route
     * @param array $params
     * @param array $metaParams
     * @param int $status
     * @return mixed
     */
    public static function updateUrl($alias, $route, $params = [], $metaParams = [], $status = self::STATUS_ENABLE)
    {
        $url = self::getByRoute($route, $params);

        $url->alias = $alias;
        $url->status = $status;
        $url->title = isset($metaParams['title']) ? $metaParams['title'] : '';
        $url->keywords = isset($metaParams['keywords']) ? $metaParams['keywords'] : '';
        $url->description = isset($metaParams['description']) ? $metaParams['description'] : '';

        return $url->save();
    }



}