<?php
include("../lib/meekrodb.2.3.class.php");
$get_promo = DB::query("SELECT * FROM tb_promo");
?>

<section class="app-header">
    <div class="logo-top">
        <div class="menubar">
            <ul>
                <li class="li-logo-img"><img class="logo-img" src="images/home/logo.png"/></li>
                <a ui-sref="home" onclick="navigateSlide('home');"><li>Home</li></a>
                <a ui-sref="home" onclick="navigateSlide('aboutus');"><li>About Us</li></a>
                <a ui-sref="doctors"><li>The Doctors</li></a>
                <a ui-sref="home" onclick="navigateSlide('treatment');"><li>Treatment</li></a>
                <a ui-sref="home" onclick="navigateSlide('contact');"><li>Contact</li></a>
            </ul>
        </div>
    </div>
    <div class="slider-container">
        <div id="home-slider" class="carousel slide carousel-fade">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <?php
                $a=0;
                foreach($get_promo as $gp): ?>
                    <li data-target="#home-slider" data-slide-to="<?php echo $a; ?>" <?php if($a==0){ ?> class="active"><?php }?></li>
                <?php
                    $a++;
                endforeach; ?>
<!--                <li data-target="#home-slider" data-slide-to="3"></li>-->
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <?php
                $b=0;
                foreach($get_promo as $gp):
                    $link = $gp['promo_link'];
                    ?>
                    <div class="item<?php if($b==0){ echo " active"; } ?>">
                        <a href="<?php if($link==""){ echo "#"; } else { echo $link; } ?>">
                            <img style="width:100%;" src="<?php echo $gp['promo_image']; ?>"/>
                        </a>
                    </div>
                <?php
                    $b++;
                endforeach; ?>
                <!--<div class="item">
                    <div style="width: 100%; height:483px; text-align: center;">
                        <iframe style="display:inline-block;" width="600" height="378" scrolling="no" frameborder="0" src="http://damonbraces.com/promo/damon-clear/whos-wearing-damon-clear.php"></iframe>
                    </div>
                </div>-->
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#home-slider" data-slide="prev">
                <span class="filler-middle"></span>
                <span class="arrow-left"></span>
            </a>
            <a class="carousel-control right" href="#home-slider" data-slide="next">
                <span class="filler-middle"></span>
                <span class="arrow-right"></span>
            </a>
        </div>
    </div>
    <script type="text/javascript">
        function navigateSlide(index) {
            var offset = 0;
            if(index=="home")
            {
                offset = 0;
            }
            else {
                offset = $('#'+index).offset().top;
                offset = offset - 50;
            }

            $("html, body").animate({scrollTop:offset}, 500);
        }
    </script>
</section>