<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Tìm Kiếm || Phim Hay Quá</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href="{{ asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="{{ asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zoomslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>
<body>
<!--/main-header-->
<!--/banner-section-->
@include('layout.layoutheader')
<!--/banner-section-->
<!--//main-header-->
<!--/banner-bottom-->

<!--//banner-bottom-->
<!-- Modal1 -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Login</h4>
                <div class="login-form">
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <div class="tp">
                            <input type="submit" value="LOGIN NOW">
                        </div>
                        <div class="forgot-grid">
                            <div class="log-check">
                                <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                            </div>
                            <div class="forgot">
                                <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- Modal1 -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4>Register</h4>
                <div class="login-form">
                    <form action="#" method="post">
                        <input type="text" name="name" placeholder="Name" required="">
                        <input type="email" name="email" placeholder="E-mail" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <input type="password" name="conform password" placeholder="Confirm Password" required="">
                        <div class="signin-rit">
														<span class="agree-checkbox">
														<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="#" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="#" target="_blank">Privacy Policy</a></label>
													</span>
                        </div>
                        <div class="tp">
                            <input type="submit" value="REGISTER NOW">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Modal1 -->
<!-- breadcrumb -->
<div class="w3_breadcrumb">
    <div class="breadcrumb-inner">
        <ul>
            <li><a href="{{url('')}}">Trang Chủ</a><i>//</i></li>
            <li>Tìm Kiếm</li>
        </ul>
    </div>
</div>
<!-- //breadcrumb -->

<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">

        <!--/tv-movies-->
        <h3 class="agile_w3_title hor-t">Kết Quả Tìm Kiếm<span style="background-color: white;color: red"> Có {{$count}} Phim Có Liên Quan</span> </h3>
        <div class="wthree_agile-requested-movies tv-movies">
            @foreach($danhsachphim as $value)
                <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                    <a href="{{url('phim')}}/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id_phim}}/" class="hvr-sweep-to-bottom"><img src="../../../../{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id_phim}}/">{{$value->tenphim}}</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>{{$value->ngaythem}}</p>
                            <div class="block-stars">
                                <ul class="w3l-ratings">
                                    @if($value->danhgia == 1)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>

                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                    @elseif($value->danhgia == 2)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>

                                    @elseif($value->danhgia == 3)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>

                                    @elseif($value->danhgia == 4)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>

                                    @elseif($value->danhgia == 5)
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="ribben one">
                        <p>NEW</p>
                    </div>
                </div>
            @endforeach

            <div class="clearfix"></div>
        </div>
        <!--//tv-movies-->

        <div class="blog-pagenat-wthree">
            <ul>
                {{$danhsachphim->links()}}
            </ul>

            <!--//requested-movies-->

            <!--//movies-->
        </div>
    </div>
</div>
<!--//content-inner-section-->

<!--/footer-bottom-->
@include('layout.layoutfoodter')

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{ asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Dropdown-Menu-JavaScript -->
<!-- search-jQuery -->
<script src="{{ asset('js/main.js')}}"></script>
<!-- //search-jQuery -->
<script src="{{ asset('js/simplePlayer.js')}}"></script>
<script>
    $("document").ready(function() {
        $("#video").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video1").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video2").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video3").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video4").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video5").simplePlayer();
    });
</script>
<script>
    $("document").ready(function() {
        $("#video6").simplePlayer();
    });
</script>

<!-- pop-up-box -->
<script src="{{ asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
<!--//pop-up-box -->

<div id="small-dialog1" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<div id="small-dialog2" class="mfp-hide">
    <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
</div>
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script src="{{ asset('js/easy-responsive-tabs.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<link href="{{ asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{ asset('js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds
            autoPlay : true,
            navigation :true,

            items : 5,
            itemsDesktop : [640,4],
            itemsDesktopSmall : [414,3]

        });

    });

    $('#small-dialog1').css('display','none');
    $('#small-dialog2').css('display','none');
</script>

<!--/script-->
<script type="text/javascript" src="{{ asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
        });
    });
</script>
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
<!--end-smooth-scrolling-->
<script src="{{ asset('js/bootstrap.js')}}"></script>



</body>
</html>