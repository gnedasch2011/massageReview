<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\item\models\Items */
/* @var $form ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="index">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name') ?>
                <?= $form->field($model, 'description') ?>
                <?= $form->field($model, 'anchor') ?>
                <?= $form->field($model, 'img') ?>
                <?= $form->field($model, 'link_amazon') ?>
                <?= $form->field($model, 'imgPreview') ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>

            </div><!-- index -->

        </div>
    </div>
</div>
