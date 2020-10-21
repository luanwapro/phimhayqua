<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Quốc Gia| Phim Hay Quá</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up -->
    <link href="{{asset('css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <link href="{{asset('css/easy-responsive-tabs.css')}}" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/zoomslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
    <link href="{{asset('css/font-awesome.css" rel="stylesheet')}}">
    <script type="text/javascript" src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
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
            <li>Quốc Gia //</li>
            @foreach($danhsachtenquocgia as $key1 => $so)
                @foreach($danhsachquocgia as $key => $value)

                    @if($so==$value->id)

                        @if($key1==0)
                        <li>{{$value->tenquocgia}}</li>
                        @break
                            @endif
                    @endif

                @endforeach

            @endforeach
        </ul>
    </div>
</div>
<!-- //breadcrumb -->

<!--/content-inner-section-->
<div class="w3_content_agilleinfo_inner">
    <div class="agile_featured_movies">
        <!--/agileinfo_tabs-->
        <div class="agileinfo_tabs">


            <!--/tab-section-->
            <div id="horizontalTab">
                <ul class="resp-tabs-list inner-second">
                    @foreach($danhsachtenquocgia as $key1 => $so)
                    @foreach($danhsachquocgia as $key => $value)

                            @if($so==$value->id)

                    <li>{{$value->tenquocgia}}</li>
                            @endif
                        @endforeach
                     @endforeach
                </ul>
                <div class="resp-tabs-container">
                    <div class="tab1">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">

                                <div class="col-md-7 wthree_agile-movies_list second-top">

                                    @foreach($danhsachphim as $key=> $value)
                                    @if($key <=7)
                                    <div class="w3l-movie-gride-agile">
                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}/{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
                                    @endif
                                    @endforeach
                                </div>

                                @foreach($danhsachphim as $key=> $value)
                                    @if($key==0)
                                <div class="col-md-5 video_agile_player second-top">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="{{$value->trailer}}" id="video4"> <img src="{{url('')}}/{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
                                    </div>



                                    <div class="player-text two">
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
                                                    <a href="{{url('')}}/phim/theloai/<?php echo vn_to_str ($ds->theloai->tenloai)?>-{{$ds->loaiphim}}/">{{$ds->theloai->tenloai}}</a> |
                                                @endif
                                            @endforeach
                                        </p>
                                        <p class="fexi_header_para fexi_header_para1"><span>Đánh Gía<label>:</label></span>
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
                                        @break
                                    @endif
                                @endforeach
                                <div class="clearfix"> </div>
                                <div class="wthree_agile-requested-movies">
                                    @foreach($danhsachphim as $key=> $value)
                                        @if($key>7)
                                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="../../{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
                                        <div class="ribben one">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                    @endif


                                    @endforeach
                                        <ul>
                                            {{$danhsachphim->links()}}
                                        </ul>





                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>
                    <div class="tab2">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                @foreach($danhsachtenquocgia as $key=> $ds)
                                @foreach($danhsachphimcolienquan as $value)


                                        @if($ds ==$value->quocgia && $key==1)
                                <div class="col-md-5 video_agile_player">
                                    <div class="video-grid-single-page-agileits">
                                        <div data-video="{{$value->trailer}}" id="video"> <img src="{{url('')}}/{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
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
                                                    <a href="{{url('')}}/phim/theloai/{{$ds->id}}">{{$ds->theloai->tenloai}}</a> |
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
                                            @break

                                        @endif

                                    @endforeach
                                @endforeach
                                <div class="col-md-7 wthree_agile-movies_list">
                                    @foreach($danhsachtenquocgia as $key=> $ds)
                                        @foreach($danhsachphimcolienquan as $keyphim=> $value)


                                            @if($ds ==$value->quocgia && $key==1)

                                    <div class="w3l-movie-gride-agile">
                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}/{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
                                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                        </a>
                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                            <div class="w3l-movie-text">
                                                <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/">{{$value->tenphim}}	</a></h6>
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


                                            @endif
                                        @endforeach
                                        @endforeach


                                </div>
                                <div class="clearfix"> </div>
                                <div class="wthree_agile-requested-movies">
                                    @foreach($danhsachtenquocgia as $key=> $ds)
                                        @foreach($danhsachphimcolienquan as $keyphim=> $value)


                                            @if($ds ==$value->quocgia && $key==1)
                                    @if($keyphim >7)
                                    <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}/{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
                                        <div class="ribben one">
                                            <p>NEW</p>
                                        </div>
                                    </div>
                                   @endif
                                            @endif
                                        @endforeach
                                    @endforeach
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>

                    <div class="tab3">
                        <div class="tab_movies_agileinfo">
                            <div class="w3_agile_featured_movies">
                                @foreach($danhsachtenquocgia as $key=> $ds)
                                    @foreach($danhsachphimcolienquan as $value)


                                        @if($ds ==$value->quocgia && $key==2)
                                            <div class="col-md-5 video_agile_player">
                                                <div class="video-grid-single-page-agileits">
                                                    <div data-video="{{$value->trailer}}" id="video"> <img src="{{url('')}}/{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
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
                                                                <a href="{{url('')}}/phim/theloai/{{$ds->id}}">{{$ds->theloai->tenloai}}</a> |
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
                                            @break

                                        @endif

                                    @endforeach
                                @endforeach
                                <div class="col-md-7 wthree_agile-movies_list">
                                    @foreach($danhsachtenquocgia as $key=> $ds)
                                        @foreach($danhsachphimcolienquan as $keyphim=> $value)


                                            @if($ds ==$value->quocgia && $key==2)
                                                @if($keyphim <=7)
                                                    <div class="w3l-movie-gride-agile">
                                                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}/{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
                                                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                                        </a>
                                                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                            <div class="w3l-movie-text">
                                                                <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/">{{$value->tenphim}}	</a></h6>
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

                                                @endif
                                            @endif
                                        @endforeach
                                    @endforeach

                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="cleafix"></div>
                            <div class="wthree_agile-requested-movies">
                                @foreach($danhsachtenquocgia as $keys=> $ds)
                                @foreach($danhsachphim as $key=> $value)
                                        @if($ds ==$value->quocgia && $key==2)
                                        <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                                            <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="../../{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
                                            <div class="ribben one">
                                                <p>NEW</p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                @endforeach


                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab4">
                        <div class="tab_movies_agileinfo">

                            <div class="w3_agile_featured_movies">

                                <div class="col-md-7 wthree_agile-movies_list second-top">
                                    @foreach($danhsachtenquocgia as $key=> $ds)
                                        @foreach($danhsachphimcolienquan as $keyphim=> $value)


                                            @if($ds ==$value->quocgia && $key==3)

                                                <div class="w3l-movie-gride-agile">
                                                    <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}/{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
                                                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/">{{$value->tenphim}}	</a></h6>
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


                                            @endif
                                        @endforeach
                                    @endforeach



                                </div>
                                @foreach($danhsachtenquocgia as $key=> $ds)
                                    @foreach($danhsachphimcolienquan as $value)


                                        @if($ds ==$value->quocgia && $key==3)
                                            <div class="col-md-5 video_agile_player">
                                                <div class="video-grid-single-page-agileits">
                                                    <div data-video="{{$value->trailer}}" id="video"> <img src="{{url('')}}/{{$value->hinhanh}}" alt="" class="img-responsive" /> </div>
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
                                                                <a href="genre.html">{{$ds->theloai->tenloai}}</a> |
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
                                            @break

                                        @endif

                                    @endforeach
                                @endforeach
                                <div class="clearfix"> </div>
                                <div class="wthree_agile-requested-movies">
                                    @foreach($danhsachtenquocgia as $keys=> $ds)
                                        @foreach($danhsachphim as $key=> $value)
                                            @if($ds ==$value->quocgia && $key==3)
                                                <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                                                    <a href="single.html" class="hvr-sweep-to-bottom"><img src="../../{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
                                                        <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                                                    </a>
                                                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                                                        <div class="w3l-movie-text">
                                                            <h6><a href="{{url('')}}/phim/{{$value->id}}">{{$value->tenphim}}</a></h6>
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
                                            @endif
                                        @endforeach
                                    @endforeach







                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="cleafix"></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!--//tab-section-->

        <h3 class="agile_w3_title">Top <span>Phim</span> </h3>
        <!--/requested-movies-->
        <div class="wthree_agile-requested-movies">
            @foreach($danhsachtopphim as $value)
            <div class="col-md-2 w3l-movie-gride-agile requested-movies">
                <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}\{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" ">
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
                <div class="ribben one">
                    <p>NEW</p>
                </div>
            </div>


            @endforeach

                    <ul>
                        {{$danhsachtopphim->links()}}
                    </ul>

            <div class="clearfix"></div>
        </div>
        <!--//requested-movies-->
        <h3 class="agile_w3_title"> Phim Xem <span>Nhiều Nhất</span></h3>
        <!--/movies-->
        <div class="w3_agile_latest_movies">

            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach($phimxemnhieunhat as $value)
                <div class="item">
                    <div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
                        <a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/" class="hvr-sweep-to-bottom"><img src="{{url('')}}/{{$value->hinhanh}}" title="Movies Pro" class="img-responsive" alt=" " />
                            <div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
                        </a>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                            <div class="w3l-movie-text">
                                <h6><a href="{{url('')}}/phim/<?php echo vn_to_str ($value->tenphim)?>-{{$value->id}}/">{{$value->tenphim}}	</a></h6>
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
                </div>
                @endforeach
            </div>
        </div>
        <!--//movies-->

    </div>
</div>
<!--//content-inner-section-->

<!--/footer-bottom-->
@extends('layout.layoutfoodter')

<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
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


</body>
</html>