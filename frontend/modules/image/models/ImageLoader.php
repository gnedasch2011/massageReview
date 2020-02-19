<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 19.02.2020
 * Time: 8:56
 */

namespace app\modules\image\models;


use yii\base\Model;

class ImageLoader extends Model
{

    public $imageFiles;

    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 14],
        ];
    }
}
