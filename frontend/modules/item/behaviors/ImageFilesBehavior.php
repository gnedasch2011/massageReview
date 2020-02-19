<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 19.02.2020
 * Time: 10:24
 */

namespace frontend\modules\item\behaviors;

use app\components\model\ActiveRecord;
use yii\base\Behavior;

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
            foreach ($this->owner->imageFiles as $file) {
                $file->saveAs('images/items/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}