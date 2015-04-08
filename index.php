<?php
/**
 * Created by IntelliJ IDEA.
 * User: Dion
 * Date: 18/01/2015
 * Time: 17:53
 */
session_start();
?>

<!DOCTYPE html>
<html ng-app="app">
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Elite Dental Jakarta</title>
    <meta name="description" content="Elite Dental Jakarta - Lakukan Appointment Online sekarang untuk mempermudah anda">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/doctors.css">
</head>
<body>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '988589414492010',
                xfbml      : true,
                version    : 'v2.2'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <section ng-include="'templates/headernav.php'"></section>

    <div class="row margin-off">
        <div class="ui-view-container">
            <div class="animated-view" ui-view>

            </div>
        </div>
    </div>


    <!-- <footer ng-include="'templates/footer.php'"></footer> -->



    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/angular-ui-router.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>

    <script src="js/main.js"></script>
    <script src="controller/cn_home.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.bottom-footer').hide();
        });

        $(window).scroll(function(event) {
            var offset_aboutus = $('#home-slider').offset().top;
            offset_aboutus = offset_aboutus - 10;
            var window_offset = $(window).scrollTop();
            if(window_offset >= offset_aboutus)
            {
                $('.menubar').addClass('hover-top');
            }
            else if(window_offset < offset_aboutus) {
                $('.menubar.hover-top').removeClass('hover-top');
            }

            var window_height = $(window).height();
            var contact_offset = $('#contact').offset().top;
            var contact_height = $('#contact').height();

            var contact_from_bottom = ( ( contact_offset + contact_height ) - window_height ) - 50;

            if(window_offset >= contact_from_bottom)
            {
                $('.bottom-footer').fadeIn(300);
            }
            else if(window_offset < contact_from_bottom) {
                $('.bottom-footer').fadeOut(300);
            }

            /*alert("deltaY : "+window_offset+"\nOffset Aboutus : "+offset_aboutus);*/
        });
    </script>
</body>
</html>
