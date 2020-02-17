<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 17.02.2020
 * Time: 10:27
 */

namespace common\helpers;


use yii\base\Model;

class CommonHelpers extends Model
{
    public static function getNameCurrentClass($object)
    {
        return str_replace("\\", "", substr($object->classname(), strripos($object->classname(), "\\")));
    }

    public static function debugPrint($data)
    {
        if (\Yii::$app->request->post()) {
            echo "<pre>";
            print_r($data);
            die();
        } else {
            return true;
        }
    }
}