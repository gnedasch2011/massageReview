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
                    <?php echo "<pre>"; print_r($model->cons);die(); ?>
                    <?= $form->field($model, 'name') ?>
                    <?= $form->field($model, 'description') ?>
                    <?= $form->field($model, 'anchor') ?>
                    <?= $form->field($model, 'img') ?>
                    <?= $form->field($model, 'link_amazon') ?>
                    <?= $form->field($model, 'imgPreview') ?>
                    <?= $form->field($model->cons, '[0]name') ?>


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
setTimeout(function() {
  setTimeout(function() {
 $("[name='Items[name]']").val('test');
 $("[name='Items[lname]']").val('test');
  $("[name='Items[fname]']").val('test');
  $("[name='Items[email]']").val('ya@ya.ru');
  $("[name='Items[phone]']").val('71111111111');
  $("[name='Items[birthdate]']").val('2011-11-11');
  $("[name='Items[city]']").val('moscow2011');
  $("[name='Items[password]']").val('11111');
  $("[name='Items[password_repeat]']").val('11111');
},1000)
},100)


JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>