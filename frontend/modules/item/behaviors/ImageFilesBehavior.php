<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 19.02.2020
 * Time: 10:24
 */

namespace frontend\modules\item\behaviors;

use app\components\model\ActiveRecord;
use app\modules\image\models\NewImage;
use yii\base\Behavior;
use yii\helpers\FileHelper;

class ImageFilesBehavior extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'beforeSaveOwner',
        ];
    }

    public function beforeSaveOwner()
    {
        if ($this->owner->imageFiles) {
            $this->upload();
        }
    }

    public function upload()
    {
        if ($this->owner->validate()) {

            $position = 0;

            foreach ($this->owner->imageFiles as $file) {
                $newImage = new NewImage();
                $newImage->items_id = $this->owner->id;
                $newImage->nodeType = $this->owner->nodeType;
                $newImage->fileName = $this->saveFile($file);
                $newImage->position = $position;
                $position++;


                $newImage->save();
                if(!$newImage->save()){
                    echo "<pre>"; print_r($newImage->errors);die();
                }
            }
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $file
     * @return string
     * @throws \yii\base\Exception
     */
    public function saveFile($file)
    {
        $path = 'images/items/' . $this->owner->id . '/';

        if (!is_dir($path)) {
            FileHelper::createDirectory('images/items/' . $this->owner->id . '/');
        }


        $fileName = $file->baseName . '.' . $file->extension;

        $saveOk = $file->saveAs($path . '/' . $fileName, true);
        if ($saveOk) {
            return $fileName;
        }

        return '';
    }
}