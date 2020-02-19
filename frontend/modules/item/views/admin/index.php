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

                    <?= \common\widgets\admin\AddInputWidget::widget([
                        'model' => new \app\modules\item\models\Pros(),
                        'attr' => "name",
                        'placeholder' => "Преимущество",
                    ]) ?>

                  <?= \common\widgets\admin\AddInputWidget::widget([
                        'model' => new \app\modules\item\models\Cons(),
                        'attr' => "name",
                        'placeholder' => "Минусы",
                    ]) ?>

                    <h2>Загрузка фото</h2>
                    <?= $form->field($ImageLoader, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
<!--                    --><?//= $form->field($ImageLoader, '[0]photoArr')->fileInput() ;?>
                    <? //= $form->field($model->cons, '[0]name') ?>


                    <div class="form-group">
                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div><!-- index -->

            </div>
        </div>
    </div>


<?php
$script = <<< JS
$('#w0 input').val('test')
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>