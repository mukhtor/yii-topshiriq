<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
/** @var $models array **/
/** @var $product array **/

$this->title = 'My Yii Application';
?>
    <div class="content">
        <div class="container">
            <h3 class="title wow zoomIn animated" data-wow-duration="2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: zoomIn;">ENG SO'NGI<span> YANGILIKLAR</span></h3>
            <p class="con-para wow zoomIn animated" data-wow-duration="2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: zoomIn;">
                Saytimizga joylanayotgan eng songi yangiliklar bilan tanishib boring. Zamon bilan hamnafas bo'ling muhim habarlar qiziqarli malumotlar faqat bizda...
            </p>
            <div class="content-grids">
  <?php foreach ($models as $model):?>

                    <div class="col-md-3 wel-grid text-center wow flipInY animated" data-wow-duration="1.5s" data-wow-delay="0.1s" style=";padding: 50px;visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: flipInY;">
                        <a href="/site/view?id=<?=$model->id?>" class="btm-clr4">
                            <span></span>
                            <h3 style="color: #8a6d3b"><?=$model->name?></h3>
                            <figure class="icon">
                                <img style="width: 100px; height: 100px; border-radius: 200px" src="/uploads/<?=$model->thumb_img?>">
                            </figure>
                            <h5  style="color: #8a6d3b"><?=$model->description?></h5>
                        </a>
                    </div>

                <?php endforeach;?>

            </div>
            <div class="clearfix"></div>
            <br>
            <br>
            <br>
            <div class="clearfix"></div>
            <hr style="border: groove 5px black">
            <hr>
            <h3 class="title wow zoomIn animated" data-wow-duration="2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: zoomIn;">MAHSULOTLAR BILAN<span> TANISHING</span></h3>
            <p class="con-para wow zoomIn animated" data-wow-duration="2s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: zoomIn;">
                Saytimizda reklama qilinayotgan mahsulotlar bilan tanishing koring baho bering harid qiling eng arzon va sifatli mahsulotlar faqat bizda...
            </p>
            <hr>
            <?php foreach ($product as $pro):?>
                <div class="col-md-4 flex-slider wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                    <a href="/site/view_product?id=<?=$pro->id?>">
                    <div class="nbs-flexisel-container">
                        <div class="nbs-flexisel-inner">
                            <ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -380px; display: block;">
                                <li class="nbs-flexisel-item" style="width: 380px;">
                                    <div class="laptop">
                                        <div class="pets-effect ver_line zoom">
                                            <img src="/uploads/<?=$pro->thumb_img?>">
                                            <div class="pets-info">
                                                <div class="pets-info-slid">
                                                    <h4>Pets Love</h4>
                                                    <span class="strip_line"></span>
                                                    <p>Sit accusamus, vel blanditiis iure minima ipsa molestias minus laborum velit, nulla nisi hic quasi enim.</p>
                                                    <span class="strip_line"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nbs-flexisel-item" style="width: 380px;">
                                    <div class="laptop">
                                        <div class="pets-effect ver_line zoom">
                                            <img src="/uploads/<?=$pro->thumb_img?>">
                                            <div class="pets-info">
                                                <div class="pets-info-slid">
                                                    <h4><?=$pro->name?></h4>
                                                    <span class="strip_line"></span>
                                                    <p><?=$pro->description?></p>
                                                    <span class="strip_line"></span>
                                                    <h3 style="color: #8a6d3b"><?=$pro->money?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </a>
                </div>
            <?php endforeach;?>

        </div>
    </div>
<br>
<br>
<br>


<?php
$js = <<<HTML
//You can also use "$(window).load(function() {"
    $(function () {
     // Slideshow 4
    $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
    $('.events').append("<li>before event fired.</li>");
    },
    after: function () {
        $('.events').append("<li>after event fired.</li>");
        }
        });
    });

HTML;

$this->registerJs($js);

?>

