<?php
use yii\helpers\Html;
?>
<div class="col-md-12">
                    <div class="post-meta col-md-10">
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
                    <div class="col-md-7">
                        <img style="border-radius: 30px" src="/uploads/<?=$model->thumb_img?>"><br>
                    </div>

                <div class="col-md-5">
                    <h3 style="color: #8a6d3b;text-align: left"><?= $model->name?></h3>
                    <p><?=$model->description?></p><br>
                </div>
                <br>

    <div class="col-md-10">
        <br>
        <br>
    </div>
                <div class="col-md-10">
                    <a class="btn btn-warning" href="/site/view?id=<?=$model->id?>">Read More</a>
                </div>

                <div class="col-md-2">
                    <p class="fa fa-eye"><?=$model->views_count?></p>
                </div>

    <div class="col-md-12">
        <hr>
        <br>
    </div>
</div>