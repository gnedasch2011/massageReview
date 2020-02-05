<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\category\models\CategoryBase */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Category Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-base-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'parent_id',
            'name',
            'nameSingular',
            'typePrefix',
            'urlOld',
            'imagesDir',
            'descShort:ntext',
            'descTop:ntext',
            'descBottom:ntext',
            'brandId',
            'filter',
            'filterScatter',
            'isCatalogDropDown',
            'isExtraBrand',
            'isShowDescShort',
            'sort',
            'group',
            'addProducts',
            'largeProductsList',
            'smallProductsList',
            'googleProductCategory',
            'googleProductType',
            'yandexUtmCampaign',
            'yandexSalesNotes',
            'position',
            'top_name',
            'new_site_desc_bottom:ntext',
            'new_site_desc_top:ntext',
            'images_for_preview:ntext',
        ],
    ]) ?>

</div>
