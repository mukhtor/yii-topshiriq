<?php

/* @var $this yii\web\View */
/** @var $models array **/

use yii\widgets\ListView;
use yii\helpers\Html;
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->

    <div class="col-md-4">
        <div class="news-left">
            <div class="container">
                <div class="col-md-5 col-news-right ">
                    <div class="col-news-top">
                        <div class="col-bottom">
                            <div style="width: 1000px; margin: 0 200px" class="date-in">
                                <img src="/uploads/<?=$models->thumb_img?>">
                                <div class="month-in">
                                    <img style="width: 100px" src="/design/images/icon2.png">
                                </div>
                            </div>
                            <br>
                            <div style="margin: 0 200px; width: 1000px; text-align: center">
                                <h4><?=$models->title?></h4>
                                <p><?=$models->content?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


    <div style="background-color: #1a1a1a" class="team-gds">
        <div class="container">
            <h3 class="title col-md-12">Sayt Adminlari</h3>
            <div class="team-bot">
                <div class="col-md-4 bottom-gds ">
                    <div class="bott-img">
                        <div class="icon-holder">
                            <img style="width: 250px;height: 255px" src="/design/images/joker.jpg">

                        </div>
                        <h4 class="mission">Joker</h4>
                        <div class="description">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bottom-gds ">
                    <div class="bott-img">
                        <div class="icon-holder">
                            <img style="width: 250px;height: 255px" src="/design/images/j2.jpg">

                        </div>
                        <h4 class="mission">Joker</h4>
                        <div class="description">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bottom-gds ">
                    <div class="bott-img">
                        <div class="icon-holder">
                            <img style="width: 250px;height: 255px" src="/design/images/joker1.jpg">
                        </div>
                        <h4 class="mission">Joker</h4>
                        <div class="description">
                            <ul>
                                <li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
                                <li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>