<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-model-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create News Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'image',
            'name',
            //'article:ntext',
            'views_count',
            'create_date',
            'update_date',
            //'thumb_img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
