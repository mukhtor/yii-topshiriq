<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $model*/
?>

    <div class="col-sm-3">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img style="border-radius: 30px" src="/uploads/<?=$model->thumb_img?>" alt="">
                    <p><?=$model->name?></p>
                    <h2><?=$model->money?></h2>
                    <a href="/site/view_product?id=<?=$model->id?>" class="btn btn-primary add-to-cart" style="color: #fefefe"><i class="fa fa-shopping-cart"></i>Batafsil</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2><?=$model->money?></h2>
                        <p><?=$model->name?></p>
                        <a href="/site/view_product?id=<?=$model->id?>" class="btn btn-warning add-to-cart"><i class="fa fa-shopping-cart"></i>Batafsil</a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href=""><i class="fa fa-plus-square"></i>Sotib olish</a></li>
                    <li><a href=""><i class="fa fa-plus-square"></i>Eslab qolish</a></li>
                </ul>
            </div>
        </div>
    </div>
