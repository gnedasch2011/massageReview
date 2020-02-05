<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\category\models\CategoryBase */

$this->title = 'Update Category Base: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Category Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
