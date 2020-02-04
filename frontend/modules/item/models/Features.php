<?php

namespace app\modules\item\models;

use Yii;

/**
 * This is the model class for table "features".
 *
 * @property int $id
 * @property string|null $items_id
 * @property string|null $name
 */
class Features extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'features';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['items_id', 'name'], 'string', 'max' => 45],
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
            'items_id' => 'Items ID',
            'name' => 'Name',
        ];
    }
}
