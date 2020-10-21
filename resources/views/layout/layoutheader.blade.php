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
<div id="demo-1" class="banner-inner">
    <div class="banner-inner-dott">
        <!--/header-w3l-->
        <div class="header-w3-agileits" id="home">
            <div class="inner-header-agile part2">
                <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a  href="{{url('')}}"><span>P</span>him <span>H</span>ay<span>Q</span>uá</a></h1>
                    </div>
                    <!-- navbar-header -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('')}}/phim">Trang Chủ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thể Loại <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key <=8)
                                                        <li><a href="{{url('')}}/phim/theloai/<? echo vn_to_str ({{$ds->tenloai}})?>-{{$ds->id}}">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >8 && $key <=16)
                                                        <li><a href="{{url('')}}/phim/theloai/<? echo vn_to_str ({{$ds->tenloai}})?>-{{$ds->id}}">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >16 && $key <=24)
                                                        <li><a href="{{url('')}}/phim/theloai/<? echo vn_to_str ({{$ds->tenloai}})?>-{{$ds->id}}">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >24 && $key <=32)
                                                        <li><a href="{{url('')}}/phim/theloai/<? echo vn_to_str ({{$ds->tenloai}})?>-{{$ds->id}}">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($danhsachtheloai  as $key=> $ds)
                                                    @if($key >32 && $key <=40)
                                                        <li><a href="{{url('')}}/phim/theloai/<? echo vn_to_str ({{$ds->tenloai}})?>-{{$ds->id}}">{{$ds->tenloai}}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </li>
                           
                            <li><a href="{{url('')}}/search?Q=Phim Lẻ">Phim Lẻ</a></li>

                            <li><a href="{{url('')}}/search?Q=Phim Bộ">Phim Bộ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quốc Gia <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                    @foreach($danhsachquocgia  as $key=> $ds)

                                        <li><a href="{{url('')}}/phim/quocgia/<? echo vn_to_str ({{$ds->tenquocgia}})?>-{{$ds->id}}">{{$ds->tenquocgia}}</a></li>

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
    </div>
</div>

<div class="w3_agilits_banner_bootm">
    <div class="w3_agilits_inner_bottom">
        <div class="col-md-6 wthree_agile_login">
            <ul>
                <li><i class="fa fa-phone" aria-hidden="true"></i> (+084)856034590 </li>

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
