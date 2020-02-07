<?php

namespace app\modules\item\models;

use Yii;

/**
 * This is the model class for table "pros".
 *
 * @property int $id
 * @property int|null $items_id
 * @property string|null $name
 */
class Pros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['items_id'], 'integer'],
            [['name'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'items_id' => 'Items ID',
            'name' => 'Особенности',
        ];
    }
}
