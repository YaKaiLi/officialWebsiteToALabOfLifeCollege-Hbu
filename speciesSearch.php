<!DOCTYPE HTML>
<html>
<head>
    <title>河北大学</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <!----//webfonts---->
    <!-- Prettify -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo , #owl-demo1").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#owl-demo3").owlCarousel({
                items : 4,
                lazyLoad : true,
                autoPlay : true,
                navigation: false,
                pagination: false,
            });
        });
    </script>
    <!----- //End-Share-instantly-slider---->

    <!----start-top-nav-script---->
    <script>
        $(function() {
            var pull 		= $('#pull');
            menu 		= $('nav ul');
            menuHeight	= menu.height();
            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <!----//End-top-nav-script---->
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" class="img-responsive" alt=""/></a>
        </div>
        <nav class="top-nav">
            <ul class="top-nav">
                <li class="page-scroll"><a href="index.php">首页 <span> </span></a></li>
                <li class="active"><a href="speciesSearch.php">物种检索<span> </span></a></li>
                <li class="page-scroll"><a href="classificationIdentify.php">分类鉴定<span> </span></a></li>
                <li class="page-scroll"><a href="fileDownload.php">文件下载 <span> </span></a></li>
                <li class="page-scroll"><a href="message.php">留言板<span> </span></a></li>
                <li class="page-scroll"><a href="about.php">关于我们<span> </span></a></li>
            </ul>
            <a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
        </nav>
        <div class="clearfix"></div>
    </div>
</div>
<div class="slider" id="home">
    <div class="slider_container">
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <h1>轮播图1</h1>
                            <p class="top">轮播图1简介</p>
                        </div>
                        <div class="slider-right">
                            <img src="images/one.jpg" alt=""/>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>
                <article style="position: relative; width: 100%; opacity: 1;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <h1>轮播图2</h1>
                            <p class="top">轮播图2简介</p>
                        </div>
                        <div class="slider-right">
                            <img src="images/one.jpg" alt=""/>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <h1>轮播图3</h1>
                            <p class="top">轮播图3简介</p>
                        </div>
                        <div class="slider-right">
                            <img src="images/one.jpg" alt=""/>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">
                        <div class="slider-left">
                            <h1>轮播图4</h1>
                            <p class="top">轮播图4简介</p>
                        </div>
                        <div class="slider-right">
                            <img src="images/one.jpg" alt=""/>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </article>
            </div>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="">2</a></li>
                <li><a href="#">3</a></li>
            </ul>
        </div>
        <script src="js/jquery.wmuSlider.js"></script>
        <script>
            $('.example1').wmuSlider();
        </script>
    </div>
</div>
<div class="main">
    <div class="content-top" id="fea">
        <div class="container">
            <div class="row feature">
                <div class="col-md-8 feature_top">
                    <h3>正在搭建中</h3>
                    <p>敬请期待。。。</p>
                </div>
                <div class="col-md-4 feature_img">
                    <img src="images/world.png" class="img-responsive" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer" id="contact">
    <div class="container">
        <div class="footer_bottom">
            <div class="copy">
                <p>Copyright &copy; 2018. All rights reserved. 由河北大学网络空间安全与计算机学院慧河工作室提供技术支持</p>
            </div>
            <div class="clearfix"> </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                 };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">top </span></a>
    </div>
</div>

</body>
</html>