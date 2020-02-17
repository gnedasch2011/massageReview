<div class="createInputWrap">

    <?php

    use yii\helpers\Html;

    echo Html::input('text', $nameAttr, '', [
        'class' => 'form-control newField beginTemp',
        'placeholder' => $placeholder
    ]);

    ?>
    <div>
        <a class="addButton" href="#">Добавить поле</a><br>
        <a class="removeButton" href="#">Удалить поле</a>
    </div>
</div>
<?php
$script = <<< JS
  $(document).on('click','.addButton',function (e) {
         e.preventDefault();
         let cloneItem = $(this).parents('.createInputWrap').find('.beginTemp:eq(0)').clone();
         $(cloneItem).appendTo('.createInputWrap')          
  })
  
    $(document).on('click','.removeButton',function (e) {
           e.preventDefault();
           $('.createInputWrap').find('.beginTemp:last').remove()
    })
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>
