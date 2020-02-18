<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 18.02.2020
 * Time: 11:36
 */

namespace frontend\modules\item\behaviors;

use app\modules\item\models\Pros;
use yii\base\Behavior;
use yii\db\ActiveRecord;

class ProsBehavior extends Behavior
{
    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'beforeSaveOwner',
        ];
    }

    public function beforeSaveOwner()
    {
        if ($this->owner->pros) {
            foreach ($this->owner->pros as $pros) {
                $newPros = new Pros();
                $newPros->items_id = $this->owner->id;
                $newPros->save();
            }
        }
    }

}