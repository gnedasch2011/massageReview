<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 07.02.2020
 * Time: 8:45
 */

namespace app\components\model;


use yii\base\Model;

class AdminModel extends Model
{
    public static function loadAll($model, $dataPost)
    {
        //если одна, то просто загрузка, если множественное, то создать и заполнить

//        echo "<pre>";
//        print_r($dataPost);
//        die();
        foreach ($dataPost as $modelName => $data) {
            if ($modelName == "Pros") {
                echo "<pre>";
                print_r($data);
                die();
            }
        }

//        echo "<pre>"; print_r($data);
//        echo "<pre>"; print_r($data);
//        echo "<pre>"; print_r($model);die();
    }

    public static function createMultiModels($multiModels, $post)
    {

        if ($multiModels) {
            $first = reset($multiModels);
            $shortName = $first->formName();
            $modelName = "\\" . $first->className();
        }

        $newModels  = [];

        if (isset($post[$shortName])) {
            $countModels = count($post[$shortName]);
            for ($i = 0; $i < $countModels; $i++) {
                $newModels[$i] = new $modelName();
            }
        }

        if($newModels){
            Model::loadMultiple($newModels, $post);
        }

        return $newModels;

    }
}

//[Items] => Array
//(
//    [name] => Ass
//    [description] => s
//[anchor] => ss
//[img] => ss
//[link_amazon] => s
//[imgPreview] => s
//        )
//
//    [Pros] => Array
//(
//    [0] => Array
//    (
//        [name] => 123
//    )
//
//    [1] => Array
//(
//    [name] => 123
//)
//[_csrf-frontend] =>
//[2] => Array
//(
//    [name] => 123
//)
//
//[3] => Array
//(