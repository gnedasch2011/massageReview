<?php

namespace app\modules\item\models;

use app\modules\image\models\NewImage;
use frontend\modules\item\behaviors\ProsBehavior;
use Yii;
use app\components\model\ActiveRecord;

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
class Items extends ActiveRecord
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
            [['id'], 'integer'],
            [['categoryId'], 'safe'],
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

    public static function getAllItems()
    {
        $query = self::find()
            ->joinWith([
                'cons',
                'pros',
                'images',
                'specificationsItems',
            ]);
        return $query->asArray()->all();
    }

    public function getCons()
    {
        return $this->hasMany(Cons::className(), ['items_id' => 'id']);
    }

    public function getPros()
    {
        return $this->hasMany(Pros::className(), ['items_id' => 'id']);
    }

    public function setPros($value)
    {
        $this->pros = $value;
        return $this;
    }

    public function getImages()
    {
        return $this->hasMany(NewImage::className(), ['items_id' => 'id']);
    }

    public function getSpecificationsItems()
    {
        return $this->hasMany(SpecificationsItems::className(), ['items_id' => 'id']);
    }


    public function relations()
    {
        return [
            'pros' => [
                'class' => 'app\modules\item\models\Pros',
                'multi' => true,
                'skip' => false,
            ],

            'specificationsItems' => [
                'class' => 'app\modules\item\models\Specifications',
                'multi' => true,
                'skip' => false,
            ],

            'cons' => [
                'class' => 'app\modules\item\models\Cons',
                'multi' => true,
                'skip' => false,
            ],
        ];

    }

    public function behaviors()
    {
        return [
            'prosBehavior' => [
                'class' => ProsBehavior::className(),
            ]
        ];

    }


}


