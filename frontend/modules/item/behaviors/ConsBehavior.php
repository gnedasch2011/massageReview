<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 18.02.2020
 * Time: 11:36
 */

namespace frontend\modules\item\behaviors;

use app\modules\item\models\Cons;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class ConsBehavior extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'beforeSaveOwner',
        ];
    }

    public function beforeSaveOwner()
    {
        if ($this->owner->cons) {
            foreach ($this->owner->cons as $cons) {
                $newPros = new Cons();
                $newPros->attributes = $cons->attributes;
                $newPros->items_id = $this->owner->id;
            
                $newPros->save();   
                echo "<pre>"; print_r($newPros);die();
            }
        }
    }

}