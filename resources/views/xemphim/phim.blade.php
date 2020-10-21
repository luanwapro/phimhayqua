<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
    @foreach($phim as $keys=> $value)
        @if($keys ==0 )


    <title>{{$value->tenphim}}||Phim Hay Quá</title>
            @break
    @endif
@endforeach
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
    <link href="{{ asset('css/popuo-box.css" rel="stylesheet')}}" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="{{ asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zoomslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/modernizr-2.6.2.min.js')}}'"></script>
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
            <li><a href="">Phim</a><i>//</i></li>
            @foreach($phim as $keys=> $value)
                @if($keys ==0 )
            <li>{{$value->tenphim}}</li>
                @endif
                @endforeach
        </ul>
    </div>
</div>
<!-- //breadcrumb -->
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <div class="inner-agile-w3l-part-head">
            <h3 class="w3l-inner-h-title">Phim Hay Quá</h3>
            <p class="w3ls_head_para">Chúc Các Bạn Xem Phim Vui Vẻ</p>
        </div>
        @forelse($phim as $keys=> $value)
         @if($keys ==0 )
        <div class="latest-news-agile-info">
            <div class="col-md-8 latest-news-agile-left-content">
                <div class="single video_agile_player"   >
                    {{--<div itemscope itemtype="https://schema.org/VideoObject"><meta itemprop="uploadDate" content="Mon Sep 30 2019 23:04:25 GMT+0700 (Giờ Đông Dương)"/><meta itemprop="name" content="[ Lyrics] Là Bạn Không Thể Yêu- Lou Hoàng - Video Lyrics"/><meta itemprop="duration" content="P0D" /><meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/2l8AiTaZ-1920.jpg"/><meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/2l8AiTaZ-DF8KodvK.mp4"/><div style="position:relative; overflow:hidden; padding-bottom:56.25%"> <iframe src="https://cdn.jwplayer.com/players/2l8AiTaZ-48TMaBap.html" width="100%" height="100%" frameborder="0" scrolling="auto" style="position:absolute;" allowfullscreen></iframe> </div></div>--}}


<div id="phim" class="video">


                    @if($link == 1)
                   <div class="video-grid-single-page-agileits video " >
                        <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
                        <div class="fb-video img-responsive"
                             @foreach($phim as $tapphim)
                             @if($tapphim->tapphim == 1)
                             data-href="https://www.facebook.com/watch/?v={{$tapphim->linkphim}}"
                             @endif
                             @endforeach
                             data-width="auto"
                             data-show-captions="false">
                        </div>

                    </div>

                    @else
                   {!!$value->linkphim!!}
                    @endif
</div>

                    <div class="col-lg-6" style="background-color: white;width: 100%;height: auto;margin-bottom: 20px" >
                        <div class="icon-box col-md-3 col-sm-4 col-xs-6 switch " style="border: black 1px solid"><a class="agile-icon switch" onclick="tatden()" href="#moon-o"><i class="fa fa-moon-o" name="a"></i> Tắt Đèn</a></div>
                        <div class="icon-box col-md-3 col-sm-4 col-xs-6"  style="border: black 1px solid"><a class="agile-icon" href="#"><i class="fa fa-caret-square-o-right"></i>Tự Chuyển Tập</a></div>
                        <div class="icon-box col-md-3 col-sm-4 col-xs-6"  style="border: black 1px solid"><a class="agile-icon" href="#"><i class="fa  fa-user"></i>Đánh Giá {{$countdanhgia}}</a></div>
                        <div class="icon-box col-md-3 col-sm-4 col-xs-6"  style="border: black 1px solid"><a class="agile-icon" href="#"><i class="fa fa-eye"></i>Lượt Xem {{$value->luotxem}}</a></div>

                    </div>



                    {{--<iframe width="560" height="315" src="//ok.ru/videoembed/1242329385536" frameborder="0" allow="autoplay" allowfullscreen></iframe>--}}
                    {{--<div itemscope itemtype="https://schema.org/VideoObject"><meta itemprop="uploadDate" content="Mon Sep 30 2019 23:04:25 GMT+0700 (Giờ Đông Dương)"/><meta itemprop="name" content="[ Lyrics] Là Bạn Không Thể Yêu- Lou Hoàng - Video Lyrics"/><meta itemprop="duration" content="P0D" /><meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/2l8AiTaZ-1920.jpg"/><meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/2l8AiTaZ-DF8KodvK.mp4"/><script src="https://cdn.jwplayer.com/players/2l8AiTaZ-48TMaBap.js"></script></div>--}}

                    @foreach($groupserver as $key=> $tapphim)
                        @foreach($allserver as  $tenserver)

                        @if($tapphim->id_server == $tenserver->id )

                        <h3 style="margin-top: 20px;margin-left: 0%;color: red">Tên Server:{{$tenserver->tenserver}}</h3>
                                Tập:
                        @endif
                        @endforeach
                        @foreach($phim as $tapphimn)
                            @if($tapphimn->id_server == $tapphim->id_server )

                            @if(($tapphimn->tapphim ==1  && $key==0)|| ($tapphimn->tapphim =="All" && $key==0) )

                            <ul class="pagination pagination-sm" >
                                    <li class="active" style="margin-left: 3px"><a  id="{{$tapphimn->id}}" onclick="chuyentap(tapphim={{$tapphimn->id}},server={{$tapphim->id_server }})" style="background-color: red;cursor: pointer">{{$tapphimn->tapphim}}</a></li>
                            </ul>
                               @else
                                        <ul class="pagination pagination-sm" >
                                            <li class="active" style="margin-left: 3px"><a id="{{$tapphimn->id}}" onclick="chuyentap(tapphim={{$tapphimn->id}},server={{$tapphim->id_server }})" style="cursor: pointer">{{$tapphimn->tapphim}}</a></li>
                                        </ul>
                                    @endif
                            @endif

                        @endforeach
                    @endforeach
                    <h2 style="color: #0a7362">Nội Dung Phim</h2>
                    <div style="border: black 2px double;margin-top: 5px"></div>
                    <p></p>
                    <h2>{{$value->tenphim}}</h2>
                    <p></p>
                    <div class="agile-post">
                        by <a href="#" title="w3ls" rel="author">Phimhay</a>Ngày Sản Xuất {{$value->ngaythem}} <a href="#">Bình luận Ngay</a>
                    </div>

                    <p>{!!$value->binhluan!!}</p>
                </div>

                <div class="single-agile-shar-buttons">
                    <h5 >Chia Sẻ Ngay :</h5>
                    <ul>
                        <li>
                            <div class="fb-like" data-href="https://www.facebook.com/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                        </li>
                        <li>
                            <div class="fb-share-button" data-href="https://www.facebook.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                        </li>
                        <li class="news-twitter">
                            <a href="https://twitter.com/" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        <li>
                            <a href="https://twitter.com/intent/tweet?screen_name=" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </li>
                        <li>
                            <!-- Place this tag where you want the +1 button to render. -->
                            <div class="g-plusone" data-size="medium"></div>

                            <!-- Place this tag after the last +1 button tag. -->
                            <script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </li>
                    </ul>
                </div>
                <div class="admin-text" style="background-color: #0e90d2">
                    <h5>Đánh Giá Phim</h5>
                    <div class="admin-text-left">
                        <a href="#"><img src="{{asset('images/admin.jpg')}}" alt=""></a>
                    </div>
                    <div class="admin-text-right">

                        <div class="container">
                            <div class="feedback">
                                <div class="rating">
                                    <input type="radio" name="rating" value="1" onclick="danhgia(idphim={{$value->id_phim}},giatri=5)" id="rating-5">
                                    <label for="rating-5"></label>
                                    <input type="radio" name="rating" value="2" onclick="danhgia(idphim={{$value->id_phim}},giatri=4)"  id="rating-4">
                                    <label for="rating-4"></label>
                                    <input type="radio" name="rating" value="3" onclick="danhgia(idphim={{$value->id_phim}},giatri=3)"  id="rating-3">
                                    <label for="rating-3"></label>
                                    <input type="radio" name="rating" value="4" onclick="danhgia(idphim={{$value->id_phim}},giatri=2)"  id="rating-2">
                                    <label for="rating-2"></label>
                                    <input type="radio" name="rating" value="5" onclick="danhgia(idphim={{$value->id_phim}},giatri=1)"  id="rating-1">
                                    <label for="rating-1"></label>
                                    <div class="emoji-wrapper">
                                        <div class="emoji">
                                            <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                                                <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                                                <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                                                <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                                                <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                                                <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                                            </svg>
                                            <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                                                <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                                                <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                                                <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                                                <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                                                <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                                                <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                                                <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                                                <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                                            </svg>
                                            <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                                                <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                                                <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                                                <g fill="#fff">
                                                    <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                                                    <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                                                </g>
                                                <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                                                <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                                            </svg>
                                            <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                <g fill="#fff">
                                                    <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                                                    <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                                                </g>
                                                <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                <g fill="#fff">
                                                    <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                                                    <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                                                </g>
                                                <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                                                <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                                            </svg>
                                            <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                                                <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                                                <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                                                <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                                                <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                                                <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                                                <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                                                <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                                            </svg>
                                            <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <g fill="#ffd93b">
                                                    <circle cx="256" cy="256" r="256"/>
                                                    <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                                                </g>
                                                <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                                                <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                                                <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                                                <g fill="#38c0dc">
                                                    <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                                                </g>
                                                <g fill="#d23f77">
                                                    <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                                                </g>
                                                <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                                                <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                                                <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span>Cảm Ơn Các Bạn Đã Xem Phim Tại Website:<a href="#"> PhimQuaHay </a></span>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="response">

                    <!-- agile-comments -->
                    <div class="agile-news-comments">
                        <div class="agile-news-comments-info">
                            <h4>Bình Luận</h4>
                            <div class="fb-comments" data-href="{{$value->link_cmt}}" data-width="100%" data-numposts="5"></div>
                        </div>
                    </div>
                    <!-- //agile-comments -->

                </div>

            </div>
            <div class="col-md-4 latest-news-agile-right-content">
                <h4 class="side-t-w3l-agile">Tìm  <span>Phim</span></h4>
                <div class="side-bar-form">
                    <form action="{{url('search')}}" method="get">
                        <input type="search" name="Q" placeholder="Tìm Kiếm..Tên Phim, Diễn Viên.." required="required">
                        <input type="submit" value=" ">
                    </form>
                </div>
                <h4 class="side-t-w3l-agile">Phim Lẻ <span>Mới Nhất</span></h3>
                    <ul class="side-bar-agile">
                     @foreach($danhsachphimle as $a)
<li>
    <div class="w3l-recent-grid">
        <div class="wom">
            <a href="{{url('')}}/phim/<?php echo vn_to_str ($a->tenphim)?>-{{$a->id_phim}}/"><img src="{{url('')}}/{{$a->hinhanh}}" alt=" " class="img-responsive"></a>
        </div>
        <div class="wom-right">
            <h5> <a href="{{url('')}}/phim/<?php echo vn_to_str ($a->tenphim)?>-{{$a->id_phim}}/">{{$a->tenphim}}</a></h5>
            <div class="content">
                {{$a->binhluan}}
            </div>
            <ul class="w3l-sider-list">
                <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$a->ngaythem}}</li>
                <li><i class="fa fa-eye" aria-hidden="true"></i> {{$a->luotxem}}</li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</li>
                         @endforeach
                    </ul>
                    <h4 class="side-t-w3l-agile">Xem <span>Trailer</span></h4>
                    @foreach($phim as $keys =>$value)
                        @if($keys==0)
                    <div class="video_agile_player sidebar-player">
                        <div class="video-grid-single-page-agileits">
                            <div data-video="{{$value->trailer}}" id="video1"> <img src="../../{{$value->hinhanh}}" alt="" class="img-responsive"> <div id="play"></div></div>
                        </div>


                        <div class="player-text side-bar-info">
                            <p class="fexi_header">{{$value->tenphim}} </p>
                            <p class="fexi_header_para"><span class="conjuring_w3">Nội Dung<label>:</label></span> Giới Thiệu Trailer Chính Thức {{$value->tenphim}}

                                Với Sự Tham Gia
                                @foreach($danhsachchitietdienvien as $dienvien)
                                    @if($dienvien->id_phim ==$value->id_phim)
                                        {{$dienvien->dienvien1->ten}}
                                    @endif
                                @endforeach
                                ...</p>
                            <p class="fexi_header_para"><span>Ngày Sản Xuất<label>:</label></span>{{$value->ngaythem}} </p>
                            <p class="fexi_header_para">
                                <span>Thể Loại<label>:</label> </span>
                                @foreach($danhsachchitietloaiphim as $ds)
                                    @if($value->id_phim == $ds->id_phim)
                                        <a href="{{url('')}}/theloai/{{$ds->id}}">{{$ds->theloai->tenloai}}</a> |
                                    @endif
                                @endforeach
                            </p>
                            <p class="fexi_header_para fexi_header_para1"><span>Đánh Giá<label>:</label></span>
                                @if($value->danhgia == 1)
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>

                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                @elseif($value->danhgia == 2)
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>

                                @elseif($value->danhgia == 3)
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>

                                @elseif($value->danhgia == 4)
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>

                                @elseif($value->danhgia == 5)
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                @endif
                            </p>
                        </div>

                    </div>
                        @endif
                    @endforeach
                    <div class="clearfix"> </div>
                    <div class="agile-info-recent">
                        <h4 class="side-t-w3l-agile">Top<span>Phim</span></h3>
                            <div class="w3ls-recent-grids">
                                @foreach($danhsachtopphim as $danhsachtopphim)
                                <div class="w3l-recent-grid">
                                    <div class="wom">
                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($danhsachtopphim->tenphim)?>-{{$danhsachtopphim->id}}/"><img src="{{url('')}}/{{$danhsachtopphim->hinhanh}}" alt=" " class="img-responsive"></a>
                                    </div>
                                    <div class="wom-right">
                                        <h5> {{$danhsachtopphim->id_phim}}<a href="{{url('')}}/phim/<?php echo vn_to_str ($danhsachtopphim->tenphim)?>-{{$danhsachtopphim->id}}/">{{$danhsachtopphim->tenphim}}</a></h5>
                                        <p>{{$danhsachtopphim->noidung}}</p>
                                        <ul class="w3l-sider-list">
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{$danhsachtopphim->ngaythem}}</li>
                                            <li><i class="fa fa-eye" aria-hidden="true"></i> {{$danhsachtopphim->luotxem}}</li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                    @endforeach

                            </div>
                    </div>

            </div>
            <div class="clearfix"></div>
        </div>
             @break
            @endif

        @empty
            <h1 style="margin-left: 35%">Hiện Vẫn Chưa Có Thông Tin Về Phim</h1>
         @endforelse
    </div>
</div>
<style>
    .content{
        text-overflow: ellipsis;
        overflow: hidden;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
    }


    .container {

        display: flex;
        flex-wrap: wrap;
        height: auto;
        width: auto;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
    }

    .rating {
        display: flex;
        width: 100%;
        justify-content: center;
        overflow: hidden;
        flex-direction: row-reverse;
        height: 150px;
        position: relative;
    }

    .rating-0 {
        filter: grayscale(100%);
    }

    .rating > input {
        display: none;
    }

    .rating > label {
        cursor: pointer;
        width: 40px;
        height: 40px;
        margin-top: auto;
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 76%;
        transition: .3s;
    }

    .rating > input:checked ~ label,
    .rating > input:checked ~ label ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }


    .rating > input:not(:checked) ~ label:hover,
    .rating > input:not(:checked) ~ label:hover ~ label {
        background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
    }

    .emoji-wrapper {
        width: 100%;
        text-align: center;
        height: 100px;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
    }

    .emoji-wrapper:before,
    .emoji-wrapper:after{
        content: "";
        height: 15px;
        width: 100%;
        position: absolute;
        left: 0;
        z-index: 1;
    }

    .emoji-wrapper:before {
        top: 0;
        background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
    }

    .emoji-wrapper:after{
        bottom: 0;
        background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
    }

    .emoji {
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: .3s;
    }

    .emoji > svg {
        margin: 15px 0;
        width: 70px;
        height: 70px;
        flex-shrink: 0;
    }

    #rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
    #rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
    #rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
    #rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
    #rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

    .feedback {

        background-color: #fff;
        width: 100%;
        padding: 30px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        box-shadow: 0 4px 30px rgba(0,0,0,.05);
    }


</style>
<!--//content-inner-section-->


<!--/footer-bottom-->

@extends('layout.layoutfoodter')

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- Dropdown-Menu-JavaScript -->
<script>
    function danhgia() {


        $.get("{{url('')}}/danhgiaphim",{'idphim':idphim,'danhgia':giatri},function (data) {

        });
    }
</script>
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
<script src="{{asset('js/main.js')}}"></script>

<script src="{{asset('js/simplePlayer.js')}}"></script>
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
<script src="{{asset('js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
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
<script src="{{asset('js/easy-responsive-tabs.js')}}"></script>
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
<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('js/owl.carousel.js')}}"></script>
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
</script>

<!--/script-->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>

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
    $('#small-dialog1').css('display','none');
    $('#small-dialog2').css('display','none');
</script>
<!--end-smooth-scrolling-->
<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/jquery.allofthelights.js')}}"></script>
<script src="{{asset('js/jquery.allofthelights-min.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".video").allofthelights();
    });
window.onload =function(){

    $('iframe').attr('id', 'newID');
    };
    setTimeout(tinh,5000);
function tinh() {
    $(document).ready(function () {

        // var iframe = $('f292850c3b338fc');
        // var bien=iframe.contentWindow.document.getElementsByTagName("H1")[0];\


        bien=  $('#newID').contents().find("html").html();

        setTimeout(tinh,5000);
    });
}
var nhaplan=0;
var chieucao=0;

function chuyentap() {

    @foreach($groupserver as $tapphim)
    @foreach($allserver as $tenserver)

            @endforeach
            @foreach($phim as $tapphimn)
            @if($tapphimn->id_server == $tapphim->id_server )

        idtemp ="{{$tapphimn->id}}";
    $('#'+idtemp).css('backgroundColor','#337ab7');
    @endif

    @endforeach
    @endforeach

    $('#'+tapphim).css('backgroundColor','red');
  if(nhaplan==0){
    var img = document.getElementById('phim'); 
     chieucao =img.clientHeight+6;
  
  }

    $('#phim').html('');
   
    var a = "<iframe onload='resizeIframe(this)' src='../../xemphim?tapphim="+tapphim+"'"+"scrolling='no' class='embed-responsive-item' style=' width: 100%'  height='"  +chieucao+"px' frameborder=\"0\" class='video-grid-single-page-agileits video'></iframe>";
    $('#phim').html(a);
nhaplan=1;

}
</script>
<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

</body>
</html>

