<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Bases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-base-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category Base', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'parent_id',
            'name',
            'nameSingular',
            'typePrefix',
            //'urlOld',
            //'imagesDir',
            //'descShort:ntext',
            //'descTop:ntext',
            //'descBottom:ntext',
            //'brandId',
            //'filter',
            //'filterScatter',
            //'isCatalogDropDown',
            //'isExtraBrand',
            //'isShowDescShort',
            //'sort',
            //'group',
            //'addProducts',
            //'largeProductsList',
            //'smallProductsList',
            //'googleProductCategory',
            //'googleProductType',
            //'yandexUtmCampaign',
            //'yandexSalesNotes',
            //'position',
            //'top_name',
            //'new_site_desc_bottom:ntext',
            //'new_site_desc_top:ntext',
            //'images_for_preview:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
