<?php

namespace app\modules\category\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string|null $nameSingular
 * @property string|null $typePrefix
 * @property string $urlOld
 * @property string $imagesDir
 * @property string|null $descShort
 * @property string|null $descTop
 * @property string|null $descBottom
 * @property int $brandId
 * @property string|null $filter Временное поля для имени файла с фильтрами категории
 * @property int|null $filterScatter
 * @property int $isCatalogDropDown
 * @property int $isExtraBrand
 * @property int $isShowDescShort Показывать короткое описание товара
 * @property int $sort
 * @property int $group
 * @property string $addProducts
 * @property string $largeProductsList
 * @property string $smallProductsList
 * @property int|null $googleProductCategory
 * @property string|null $googleProductType
 * @property string|null $yandexUtmCampaign
 * @property string|null $yandexSalesNotes
 * @property int $position
 * @property string|null $top_name
 * @property string|null $new_site_desc_bottom
 * @property string|null $new_site_desc_top
 * @property string|null $images_for_preview
 */
class CategoryBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'brandId', 'filterScatter', 'isCatalogDropDown', 'isExtraBrand', 'isShowDescShort', 'sort', 'group', 'googleProductCategory', 'position'], 'safe'],
            [['name', 'urlOld', 'imagesDir', 'addProducts', 'largeProductsList', 'smallProductsList'], 'safe'],
            [['descShort', 'descTop', 'descBottom', 'new_site_desc_bottom', 'new_site_desc_top', 'images_for_preview'], 'string'],
            [['name', 'nameSingular', 'urlOld', 'imagesDir', 'yandexUtmCampaign', 'yandexSalesNotes'], 'string', 'max' => 100],
            [['typePrefix', 'addProducts', 'largeProductsList', 'smallProductsList', 'top_name'], 'string', 'max' => 255],
            [['filter'], 'string', 'max' => 50],
            [['googleProductType'], 'string', 'max' => 750],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'nameSingular' => 'Name Singular',
            'typePrefix' => 'Type Prefix',
            'urlOld' => 'Url Old',
            'imagesDir' => 'Images Dir',
            'descShort' => 'Desc Short',
            'descTop' => 'Desc Top',
            'descBottom' => 'Desc Bottom',
            'brandId' => 'Brand ID',
            'filter' => 'Filter',
            'filterScatter' => 'Filter Scatter',
            'isCatalogDropDown' => 'Is Catalog Drop Down',
            'isExtraBrand' => 'Is Extra Brand',
            'isShowDescShort' => 'Is Show Desc Short',
            'sort' => 'Sort',
            'group' => 'Group',
            'addProducts' => 'Add Products',
            'largeProductsList' => 'Large Products List',
            'smallProductsList' => 'Small Products List',
            'googleProductCategory' => 'Google Product Category',
            'googleProductType' => 'Google Product Type',
            'yandexUtmCampaign' => 'Yandex Utm Campaign',
            'yandexSalesNotes' => 'Yandex Sales Notes',
            'position' => 'Position',
            'top_name' => 'Top Name',
            'new_site_desc_bottom' => 'New Site Desc Bottom',
            'new_site_desc_top' => 'New Site Desc Top',
            'images_for_preview' => 'Images For Preview',
        ];
    }
}
