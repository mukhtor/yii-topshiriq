<?php
use yii\helpers\Html;
?>
<br>
<div class="container">
    <div class="row">
        <div style="background-color: silver;text-align: center" class="col-sm-7">
            <div class="blog-post-area">
                <div class="single-blog-post">
                    <div class="post-meta">
                  <br>
                  <br>
                  <br>
                        <ul>
                            <li><i class="fa fa-user"></i><?= $model->FormatCreateDate?></li>
                            <li><i class="fa fa-calendar"></i> <?=$model->update_date?></li>
                        </ul>
                        <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </span>
                    </div>
                    <h2 style="color: #e17b11"><?= $model->name?></h2><br>
                    <img style="border-radius: 30px" src="/uploads/<?=$model->thumb_img?>"><br>
                    <br><p><?=$model->article?></p>
                    <p class="fa fa-eye"><?=$model->views_count?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>