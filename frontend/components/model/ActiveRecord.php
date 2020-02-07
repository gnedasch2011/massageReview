<?php
/**
 * Created by PhpStorm.
 * User: 2000
 * Date: 07.02.2020
 * Time: 8:31
 */

namespace app\components\model;

class ActiveRecord extends \yii\db\ActiveRecord
{
    public function populateAllRelations($model)
    {
        foreach ($model->relations() as $relation => $props) {

            if ($props['skip'] === true) {
                continue;
            }

            $model->populateRelation($relation, ($props['multi'] ? [new $props['class']] : new $props['class']));

        }

        return $model;
    }



}