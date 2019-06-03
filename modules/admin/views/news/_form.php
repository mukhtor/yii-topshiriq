<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\NewsModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-model-form">

    <?php $form = ActiveForm::begin(
            [
                    'options'=>[
                            'enctype'=>'multipart/form-data'
                    ]
            ]
    ); ?>

    <?= $form->field($model_upload, 'imageFile')->input('file') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php

    echo $form->field($model, 'article')->widget(\vova07\imperavi\Widget::className(),[
            'settings' => [
                'lang' => 'ru',
                'minHeight' => 200,
                'imageUpload' => Url::to(['/news/image-upload']),
                'plugins' => [
                    'imagemanager',
                ],
            ],
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
