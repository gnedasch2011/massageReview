<?php

namespace app\modules\item\models;

use Yii;

/**
 * This is the model class for table "product_attribute".
 *
 * @property int $id
 * @property int $product_id
 * @property int $attribute_id
 * @property string|null $value
 * @property int $position
 * @property int $visible
 */
class ProductAttribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_attribute';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'attribute_id'], 'required'],
            [['product_id', 'attribute_id', 'position', 'visible'], 'integer'],
            [['value'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'attribute_id' => 'Attribute ID',
            'value' => 'Value',
            'position' => 'Position',
            'visible' => 'Visible',
        ];
    }
}
