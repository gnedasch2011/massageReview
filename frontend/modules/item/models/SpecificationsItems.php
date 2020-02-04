<?php

namespace app\modules\item\models;

use Yii;

/**
 * This is the model class for table "specifications_items".
 *
 * @property int $id
 * @property string|null $specifications_id
 * @property string|null $items_id
 * @property string|null $value
 */
class SpecificationsItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'specifications_items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['specifications_id', 'items_id', 'value'], 'string', 'max' => 45],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'specifications_id' => 'Specifications ID',
            'items_id' => 'Items ID',
            'value' => 'Value',
        ];
    }
}
