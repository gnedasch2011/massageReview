<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2><?= $placeholder ;?></h2>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="createInputWrap">

            <?php

            use yii\helpers\Html;

            echo Html::input('text', $nameAttr, '', [
                'class' => 'form-control newField beginTemp',
                'data-index' => 0,
                'placeholder' => $placeholder
            ]);

            ?>
            <div>
                <a class="addButton" href="#">Добавить поле</a><br>
                <a class="removeButton" href="#">Удалить поле</a>
            </div>
        </div>
    </div>
</div>

<?php
$script = <<< JS
  $(document).on('click','.addButton',function (e) {
         let cloneItem = $(this).parents('.createInputWrap').find('.beginTemp:eq(0)').clone();
         let nameAttr = cloneItem.attr('name');
         let lastIndexPosition  = $(this).parents('.createInputWrap').find('.beginTemp:last').attr('data-index');
        
         let newPos =(Number(lastIndexPosition)+1);
  
          nameAttrNew = nameAttr.replace("0", newPos);
         
          $(cloneItem).attr('name', nameAttrNew);
          $(cloneItem).attr('data-index', newPos);
         
         $(cloneItem).appendTo($(this).parents('.createInputWrap'));          
  })
  
    $(document).on('click','.removeButton',function (e) {
           e.preventDefault();
           $('.createInputWrap').find('.beginTemp:last').remove()
    })
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_READY);
?>
