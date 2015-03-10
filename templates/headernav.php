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
                <li data-target="#home-slider" data-slide-to="0" class="active"></li>
                <li data-target="#home-slider" data-slide-to="1"></li>
                <li data-target="#home-slider" data-slide-to="2"></li>
                <li data-target="#home-slider" data-slide-to="3"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="item active">
                    <img style="width:100%;" src="images/home/home-image.jpg"/>
                </div>
                <div class="item">
                    <img style="width:100%;" src="images/home/home-image-2.jpg"/>
                </div>
                <div class="item">
                    <img style="width:100%;" src="images/home/home-image-3.jpg"/>
                </div>
                <div class="item">
                    <img style="width:100%;" src="images/home/home-image-4.jpg"/>
                </div>
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