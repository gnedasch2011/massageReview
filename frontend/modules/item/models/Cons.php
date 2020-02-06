<?php

namespace app\modules\item\models;

use Yii;

/**
 * This is the model class for table "cons".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $items_id
 */
class Cons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'items_id'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Недостатки',
            'items_id' => 'Items ID',
        ];
    }
}
