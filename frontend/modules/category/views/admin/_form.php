<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\category\models\CategoryBase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nameSingular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'typePrefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'urlOld')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imagesDir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descShort')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descTop')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'descBottom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'brandId')->textInput() ?>

    <?= $form->field($model, 'filter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'filterScatter')->textInput() ?>

    <?= $form->field($model, 'isCatalogDropDown')->textInput() ?>

    <?= $form->field($model, 'isExtraBrand')->textInput() ?>

    <?= $form->field($model, 'isShowDescShort')->textInput() ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'group')->textInput() ?>

    <?= $form->field($model, 'addProducts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'largeProductsList')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smallProductsList')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'googleProductCategory')->textInput() ?>

    <?= $form->field($model, 'googleProductType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yandexUtmCampaign')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yandexSalesNotes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'top_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'new_site_desc_bottom')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'new_site_desc_top')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'images_for_preview')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
