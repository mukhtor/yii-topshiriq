<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $dataProvider*/
$this->title = 'Product';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our_pets">
    <div class="container">
        <h3 class="title wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">MAHSULOTLAR <span> BO'LIMI</span></h3>

        <?php
        echo ListView::widget([
            'dataProvider'=>$dataProvider,
            'itemView' => '_product'
        ]);
        ?>




        <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:991,
                                visibleItems: 2
                            }
                        }
                    });

                });
            </script>
    </div>
</div>
