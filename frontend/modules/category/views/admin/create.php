<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\category\models\CategoryBase */

$this->title = 'Create Category Base';
$this->params['breadcrumbs'][] = ['label' => 'Category Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-base-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
