<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Trang Chủ | Xem Phim Hay</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
    <!--/web-fonts-->
    <link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--//web-fonts-->
</head>
<body>
<?php
function vn_to_str ($str){
 
    $unicode = array(
     
    'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
     
    'd'=>'đ',
     
    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
     
    'i'=>'í|ì|ỉ|ĩ|ị',
     
    'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
     
    'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
     
    'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
     
    'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
     
    'D'=>'Đ',
     
    'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
     
    'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
     
    'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
     
    'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
     
    'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
     
    );
     
    foreach($unicode as $nonUnicode=>$uni){
     
    $str = preg_replace("/($uni)/i", $nonUnicode, $str);
     
    }
    $str = str_replace(' ','_',$str);
     
    return $str;
     
    }
?>
<!--/main-header-->
<!--/banner-section-->
<div id="demo-1" data-zs-src='["{{$anh1}}", "{{$anh2}}", "{{$anh3}}","{{$anh4}}"]' data-zs-overlay="dots">
    <div class="demo-inner-content">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="{{url('')}}"><span>P</span>him <span>H</span>ay<span>Q</span>uá</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('')}}">Trang Chủ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key <=8)
                                                <li><a href="phim/theloai/<?php echo vn_to_str ($ds->tenloai)?>-{{$ds->id}}/">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >8 && $key <=16)
                                                        <li><a href="phim/theloai/<?php echo vn_to_str ($ds->tenloai)?>-{{$ds->id}}/">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >16 && $key <=24)
                                                        <li><a href="phim/theloai/<?php echo vn_to_str ($ds->tenloai)?>-{{$ds->id}}}/">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>

                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >24 && $key <=32)
                                                        <li><a href="phim/theloai/<?php echo vn_to_str ($ds->tenloai)?>-{{$ds->id}}/">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >32 && $key <=40)
                                                        <li><a href="phim/theloai/<?php echo vn_to_str ($ds->tenloai)?>-{{$ds->id}}/">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                            
                            <li><a href="../search?Q=Phim Lẻ">Phim Lẻ</a></li>

                                    <li><a href="../search?Q=Phim Bộ">Phim Bộ</a></li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quốc Gia <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachquocgia  as $key=> $ds)

                                                        <li><a href="phim/quocgia/<?php echo vn_to_str ($ds->tenquocgia)?>-{{$ds->id}}/">{{$ds->tenquocgia}}</a></li>

                                                @endforeach

                                            </ul>
                                        </div>


                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{url('')}}/search?Q=Phim Chiếu Rạp">Phim Chiếu Rạp </a></li>
                            <li><a href="{{url('')}}/search?Q=Phim Thuyết Minh">Phim Thuyết Minh</a></li>
                        </ul>

                    </div>
                    <div class="clearfix"> </div>
                </nav>
                <div class="w3ls_search">
                    <div class="cd-main-header">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul> <!-- cd-header-buttons -->
                    </div>
                    <div id="cd-search" class="cd-search">
                        <form action="{{url('search')}}" method="get">
                            <input name="Q" type="search" placeholder="Tìm Kiếm..Tên Phim, Diễn Viên..">
                        </form>
                    </div>
                </div>

            </div>

        </div>
        <!--//header-w3l-->
        <!--/banner-info-->
        <div class="baner-info">
            <h3>Xem Những Bộ Phim Mới Nhất Tại <span>PHIMHAYQUA</span>

            </h3>
            <h4>  Chúc Các Bạn Xem Phim Vui Vẻ</h4>

        </div>
        <!--/banner-ingo-->
    </div>
</div>
<!--/banner-section-->
<!--//main-header-->
<!--/banner-bottom-->
<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="col-md-6 wthree_agile_login">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+0) 856034590</li>


            </ul>
        </div>
        <div class="col-md-6 wthree_share_agile">

            <div class="single-agile-shar-buttons">
                <ul>
                    <li>
                        <div class="fb-like" data-href="https://www.facebook.com/Xem-PhimHay-109544073787693/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        <script>(function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>
                    </li>
                    <li>
                        <div class="fb-share-button" data-href="https://www.facebook.com/Xem-PhimHay-109544073787693/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
                    </li>
                    {{--<li class="news-twitter">--}}
                        {{--<a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>--}}
                    {{--</li>--}}
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
        </div>
    </div>
</div>
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
<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <!--/agileinfo_tabs-->
        <div class="agileinfo_tabs">
            <!--/tab-section-->
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li>Phim Mới</li>
                    <li>Phim Đề Cử</li>
                    <li>Top Phim </li>

                </ul>

                <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">

                                @foreach($danhsachphimmoi as $key =>$value)
                                    @if($key==7)
                                <div class="col-md-5 video_agile_player">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="{{$value->trailer}}" id="video"> <img src="{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
                                    </div>



                                    <div class="player-text">
                                        <p class="fexi_header">{{$value->tenphim}}</p>
                                        <p class="fexi_header_para"><span class="conjuring_w3">Nội Dung<label>:</label></span> Giới Thiệu Trailer Chính Thức {{$value->tenphim}}

                                           Với Sự Tham Gia
                                            @foreach($danhsachchitietdienvien as $dienvien)
                                                @if($dienvien->id_phim ==$value->id)
                                                  {{$dienvien->dienvien1->ten}}
                                                @endif
                                            @endforeach
                                            ....</p>
                                        <p class="fexi_header_para"><span>Sản Xuất<label>:</label></span>{{$value->ngaythem}} </p>
                                        <p class="fexi_header_para">
                                            <span>Thể Loại<label>:</label> </span>
                                            @foreach($danhsachchitietloaiphim as $ds)
                                                @if($value->id == $ds->id_phim)
                                            <a href="phim/theloai/<?php echo vn_to_str ($ds->theloai->tenloai)?>-{{$ds->id}}/">{{$ds->theloai->tenloai}}</a> |
                                                @endif
                                            @endforeach
                                        </p>
                                        <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
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

                                <div class="col-md-7 wthree_agile-movies_list">
                                    @foreach($danhsachphimmoi as $value)
                                    <div class="w3l-movie-gride-agile">
                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img  src="{{$value->hinhanh}}" title="Movies Pro" width="250px" height="300px" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/">{{$value->tenphim}}</a></h6>
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
                                        <div class="ribben">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                    <div class="tab2">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                @foreach($danhsachphimdecu as $key =>$value)
                                    @if($key==0)
                                        <div class="col-md-5 video_agile_player">
                                            <div class="video-grid-single-page-agileits">
                                                <div data-video="{{$value->trailer}}" id="video1"> <img src="{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
                                            </div>



                                            <div class="player-text">
                                                <p class="fexi_header">{{$value->tenphim}}</p>
                                                <p class="fexi_header_para"><span class="conjuring_w3">Nội Dung<label>:</label></span> Giới Thiệu Trailer Chính Thức {{$value->tenphim}}

                                                    Với Sự Tham Gia
                                                    @foreach($danhsachchitietdienvien as $dienvien)
                                                        @if($dienvien->id_phim ==$value->id)
                                                            {{$dienvien->dienvien1->ten}}
                                                        @endif
                                                    @endforeach
                                                    ....</p>
                                                <p class="fexi_header_para"><span>Sản Xuất<label>:</label></span>{{$value->ngaythem}} </p>
                                                <p class="fexi_header_para">
                                                    <span>Thể Loại<label>:</label> </span>
                                                    @foreach($danhsachchitietloaiphim as $ds)
                                                        @if($value->id == $ds->id_phim)
                                                            <a href="{{url('')}}/theloai/<?php echo vn_to_str ($ds->theloai->tenloai)?>-{{$value->id}}/">{{$ds->theloai->tenloai}}</a> |
                                                        @endif
                                                    @endforeach
                                                </p>
                                                <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
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
                                <div class="col-md-7 wthree_agile-movies_list">
                                    @foreach($danhsachphimdecu as $value)
                                        <div class="w3l-movie-gride-agile">
                                            <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img  src="{{$value->hinhanh}}" title="Movies Pro" width="250px" height="300px" class="img-responsive" alt=" ">
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/">{{$value->tenphim}}</a></h6>
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                    <div class="tab3">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">

                                @foreach($danhsachtopphim as $key =>$value)
                                    @if($key==0)
                                        <div class="col-md-5 video_agile_player">
                                            <div class="video-grid-single-page-agileits">
                                                <div data-video="{{$value->trailer}}" id="video2"> <img src="{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
                                            </div>



                                            <div class="player-text">
                                                <p class="fexi_header">{{$value->tenphim}}</p>
                                                <p class="fexi_header_para"><span class="conjuring_w3">Nội Dung<label>:</label></span> Giới Thiệu Trailer Chính Thức {{$value->tenphim}}

                                                    Với Sự Tham Gia
                                                    @foreach($danhsachchitietdienvien as $dienvien)
                                                        @if($dienvien->id_phim ==$value->id)
                                                            {{$dienvien->dienvien1->ten}}
                                                        @endif
                                                    @endforeach
                                                    ....</p>
                                                <p class="fexi_header_para"><span>Sản Xuất<label>:</label></span>{{$value->ngaythem}} </p>
                                                <p class="fexi_header_para">
                                                    <span>Thể Loại<label>:</label> </span>
                                                    @foreach($danhsachchitietloaiphim as $ds)
                                                        @if($value->id == $ds->id_phim)
                                                            <a href="{{url('')}}/theloai/<?php echo vn_to_str ($ds->theloai->tenloai)?>-{{$value->id}}{{$ds->id}}/">{{$ds->theloai->tenloai}}</a> |
                                                        @endif
                                                    @endforeach
                                                </p>
                                                <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
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
                                <div class="col-md-7 wthree_agile-movies_list">
                                    @foreach($danhsachtopphim as $value)
                                        <div class="w3l-movie-gride-agile">
                                            <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id_phim}}/" class="hvr-sweep-to-bottom"><img  src="{{$value->hinhanh}}" title="Movies Pro" width="250px" height="300px" class="img-responsive" alt=" ">
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
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--//tab-section-->
        <h3 class="agile_w3_title"> Phim <span>Lẻ Mới</span></h3>
        <!--/movies-->
        <div class="w3_agile_latest_movies">

            <div id="owl-demo" class="owl-carousel owl-theme">

                @foreach($danhsachphimle as $value)
                <div class="item">
                    <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id_phim}}/" class="hvr-sweep-to-bottom"><img src="{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" " />
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

                                            <li>  <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li>   <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                        @elseif($value->danhgia == 2)
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>

                                        @elseif($value->danhgia == 3)
                                            <li> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>   <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>

                                        @elseif($value->danhgia == 4)
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>

                                        @elseif($value->danhgia == 5)
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li>  <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                            <li> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                </div>
                @endforeach
            </div>
        </div>
        <!--//movies-->
        <h3 class="agile_w3_title">Phim <span>Chiếu Rạp</span> </h3>
        <!--/requested-movies-->
        <div class="wthree_agile-requested-movies">
            @foreach($danhsachphimle as $value)
            <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id_phim}}/" class="hvr-sweep-to-bottom"><img src="{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
        <!--//requested-movies-->
        <!--/top-movies-->
        <h3 class="agile_w3_title">Phim<span>Hoạt Hình</span> </h3>
        <div class="top_movies">
            <div class="tab_movies_agileinfo">
                <div class="w3_agile_featured_movies two">

                    <div class="col-md-7 wthree_agile-movies_list second-top">
                        @foreach($danhsachphimhoathinh as $value)
                        <div class="w3l-movie-gride-agile">
                            <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id_phim}}/" class="hvr-sweep-to-bottom"><img src="{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
                            <div class="ribben">
                                <p>NEW</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-5 video_agile_player second-top">
                        @foreach($danhsachphimhoathinh as $key => $value )
                            @if($key == 0)
                        <div class="video-grid-single-page-agileits">
                            <div data-video="{{$value->trailer}}" id="video3"> <img src="{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
                        </div>

                        <div class="player-text two">
                            <p class="fexi_header">{{$value->tenphim}} </p>
                            <p class="fexi_header_para"><span class="conjuring_w3">Nội Dung<label>:</label></span>Bộ Phim {{$value->tenphim}} với sự tham gia của các diễn viên
                                @foreach($danhsachchitietdienvien as $dienvien)

                                    @if($dienvien->id_phim == $value->id_phim)
                                        {{$dienvien->dienvien1->ten}},
                                    @endif
                                @endforeach....... </p>
                            <p class="fexi_header_para"><span>Ngày Sản Xuất<label>:</label></span>{{$value->ngaythem}}</p>

                            <p class="fexi_header_para">
                                <span>Thể Loại<label>:</label> </span>
                                @foreach($danhsachchitietloaiphim as $ds)
                                    @if($value->id_phim == $ds->id_phim)
                                        <a href="{{url('')}}/theloai/{{$ds->id}}">{{$ds->theloai->tenloai}}</a> |
                                    @endif
                                @endforeach
                            </p>
                            <p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
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
                            @endif
                     @endforeach
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="cleafix"></div>
            </div>
        </div>

        <!--//top-movies-->
    </div>
</div>
<!--//content-inner-section-->

<!--/footer-bottom-->
@extends('layout.layoutfoodter')



<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{url('')}}/js/jquery-1.11.1.min.js"></script>
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


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
<!-- search-jQuery -->
<script src="js/main.js"></script>
<script src="js/simplePlayer.js"></script>
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

<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
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
<script src="js/easy-responsive-tabs.js"></script>
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
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="js/owl.carousel.js"></script>
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
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

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
<script src="js/bootstrap.js"></script>

<script>
   window.onload=function() {

           $('.owl-next').html('Tiếp Theo');
       $('.owl-prev').html('Quay Về');
   }

</script>

</body>
</html>
