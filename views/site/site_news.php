<?php

use yii\widgets\LinkPager;
use yii\grid\GridView;
use yii\widgets\ListView;

/**
 * @var $dataProvider object
 */
    $this->title = "Yangiliklar";
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="container">
    <div class="row">
        <div style="background-color: #e3e3e3;border-radius: 15px" class="col-sm-9">
            <div class="blog-post-area">
                <div class="single-blog-post">


<?php
echo ListView::widget([
   'dataProvider'=>$dataProvider,
    'itemView' => '_news'
]);
?>

                </div>
            </div>
        </div>
    </div>
</div>
<br>
<hr>
