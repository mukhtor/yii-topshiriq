<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
$this->title = 'gallery';
$this->params['breadcrumbs'][] = $this->title;

/** @var $models array **/
?>

<div class="gallery">
    <div class="container">
        <h3 class="title">Foto<span> Lavhalar</span></h3>
        <section>
            <ul class="lb-album ">
            <?php
                foreach($models as $model):
            ?>
            <li class="grid">
                <a href="#image-<?=$model->id?>">
                    <figure class="effect-apollo">
                        <img src="/uploads/<?=$model->thumb_img?>">
                    </figure>
                </a>
                <div class="lb-overlay" id="image-<?=$model->id?>">
                    <h1 style="color: #0c5460; font-size: 50px;"><?=$model->name?></h1>
                    <img src="/uploads/<?=$model->thumb_img?>">
                    <div style="width: 1200px" class="gal-info">
                        <p><?=$model->information?></p>
                    </div>
                    <br>
                    <br>
                        <a href="<?php echo Url::to(['site/gallery']) ?>" class="lb-close">Close</a>
                </div>
            </li>
            <?php
                endforeach;
            ?>
            </ul>
        </section>

    </div>
</div>

