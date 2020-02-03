<?php

namespace app\modules\item\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $categoryId
 * @property string|null $anchor
 * @property string|null $img
 * @property string|null $link_amazon
 * @property string|null $imgPreview
 * @property string|null $description
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'categoryId'], 'integer'],
            [['description'], 'string'],
            [['name', 'anchor', 'img', 'link_amazon', 'imgPreview'], 'string', 'max' => 45],
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
            'name' => 'Name',
            'categoryId' => 'Category ID',
            'anchor' => 'Anchor',
            'img' => 'Img',
            'link_amazon' => 'Link Amazon',
            'imgPreview' => 'Img Preview',
            'description' => 'Description',
        ];
    }
}

