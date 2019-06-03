<?php
use app\assets\SiteAsset;
use yii\helpers\Html;
use \yii\bootstrap\Nav;
use yii\widgets\ActiveForm;
use yii\widgets\ListView;

SiteAsset::register($this);

$isHome = (Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index');

?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pets Love Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <!-- //for-mobile-apps -->
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Acme' rel='stylesheet' type='text/css'><!-- //fonts -->



</head>
<body>
<?php $this->beginBody()?>
<div class="header wow fadeInDown animated" data-wow-delay=".5s">
    <div class="container">
        <div class="header-left grid">
            <div class="grid__item color-1 wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
                <h1><a href="index.html"><i></i><span class="link link--kukuri" data-letters="<?= Yii::t('app','Wild.uz')?>"><?= Yii::t('app','Wild.uz')?></span></a></h1>
            </div>
        </div>
        <div class="header-middle">
            <ul>
                <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+123 456 7890</li>
                <li><a href="mailto:info@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@example.com</a></li>
            </ul>
            <ul>
                <li><?= Html::a('UZ',['site/change-lang','lang_id'=>'uz'])?></li>
                <li><?= Html::a('RU',['site/change-lang','lang_id'=>'ru'])?></li>
                <li><?= Html::a('EN',['site/change-lang','lang_id'=>'en'])?></li>
            </ul>
        </div>

        <!--begin Search-->
        <div class="header-right">

                <div class="search">
                <div class="row">
                    <?php ActiveForm::begin(['method' => 'GET', 'action'=>'/site/search']); ?>
                    <div class="col-md-12">
                        <?php echo Html::input('text', 'key', '', [
                            'class' => 'form-control',
                            'placeholder' => 'Qidirish uchun kalit yozing...'
                        ]); ?>
                    </div>
                    <div class="col-md-2">
                        <?php echo Html::button('', [
                            'class' => 'glyphicon glyphicon-search btn btn-default',
                            'type' => 'submit'
                        ]) ?>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>

                </div>
        </div>
        <!--end Search-->

        <div class="clearfix"></div>
    </div>
</div>
<!--Begin Banner-->
<div class="banner <?php echo $isHome ? '' : 'page-head' ?>">
    <div class="ban-top ">
        <div class="container">
            <div class="">
                <div class="top_nav_left">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
<!--                                <ul class="nav navbar-nav menu__list">-->
<!--                                    <li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>-->
<!--                                    <li class=" menu__item"><a class="menu__link" href="about.html">About</a></li>-->
<!--                                    <li class=" menu__item"><a class="menu__link" href="gallery.html">Gallery</a></li>-->
<!--                                    <li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>-->
<!--                                    <li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>-->
<!--                                </ul>-->

                                <?php
                                echo Nav::widget([
                                    'options' => ['class' => 'nav navbar-nav menu__list'],
                                    'items' => [
                                        [
                                            'label' => Yii::t('app','Home'),
                                            'url' => ['/site/index'],
                                            'template' => '<a href="{url}" class="menu__link">{label}</a>',
                                            'options'=> ['class'=>'menu__item']
                                        ],
                                        ['label' => Yii::t('app','Gallery'), 'url' => ['/site/gallery']],
                                        ['label' => Yii::t('app','News'), 'url' => ['/site/news']],
                                        ['label' => Yii::t('app','Product'), 'url' => ['/site/product']],
                                        ['label' => Yii::t('app','About'), 'url' => ['/site/about']],
                                        ['label' => Yii::t('app','Contact'), 'url' => ['/site/contact']],
                                        Yii::$app->user->isGuest ? (
                                        ['label' => Yii::t('app','Login'), 'url' => ['/site/login']]
                                        ) : (
                                            '<li>'
                                            . Html::beginForm(['/site/logout'], 'post')
                                            . Html::submitButton(
                                                'Logout (' . Yii::$app->user->identity->username . ')',
                                                ['class' => 'btn btn-link logout']
                                            )
                                            . Html::endForm()
                                            . '</li>'
                                        ),
//                                        'itemOptions'=>['class' => 'menu__item']
                                    ],
                                ]);
                                ?>

                            </div>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <?php if ($isHome): ?>
    <div class="ban-bot text-center">
    <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
            <li>
                <div class="ban-info">
                    <h3>Saytimizga xush kelibsiz!!!</h3>
                    <p>Saytimizda eng songi yangiliklar reklamalar elonlar bilan tanishishingiz mumkin.
                    Eng arzon narxlardagi mahsulotlar sizga kerakli haridlar bizda bolishi mumkin.
                        Jonqi.uz hamisha siz bilan birga!!!
                    </p>
                    <a class="hvr-rectangle-out" href="/site/about">SAYT HAQIDA</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
    <?php endif; ?>
</div>
<!--End Banner-->


    <!-- Begin content-->
        <?php echo $content; ?>
    <!-- End content-->

<div class="contact-form ">
    <div class="container">


        <div class="col-md-6 contact-left wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
            <ul class="contact-list">
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Tatu urganch filiali kampyuter injinering fakulteti</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:mukhtorbabadjanov@gmail.com">mukhtorbabadjanov@gmail.com</a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+998943107230</li>
            </ul>
            <ul class="icons-list footer-bottom">
                <li><a href="#" class="use1"><span>Facebook</span></a></li>
                <li><a href="#" class="use2"><span>Twitter</span></a></li>
                <li><a href="#" class="use3"><span>Dribbble</span></a></li>
                <li><a href="#" class="use4"><span>Pinterest</span></a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<?php $this->endBody(); ?>

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
<?php $this->endPage(); ?>



