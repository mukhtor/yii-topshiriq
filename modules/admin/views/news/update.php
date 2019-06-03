<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NewsModel */

$this->title = 'Update News Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'News Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="news-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
