
<div class="contact-w3ls" id="contact">
    <div class="footer-w3lagile-inner">
        <h2>Đăng Ký Ngay Để Nhận <span>Những Bộ Phim Mới Nhất</span></h2>
        <p class="para">Cảm Ơn Các Bạn Đã Xem Phim Tại HayQua .</p>
        <div class="footer-contact">
            <form action="" method="get">
                <input type="email" name="Email" placeholder="Vui Lòng Nhập Email...." required=" ">
                <input type="submit" value="Đăng Ký">
            </form>
        </div>
        <div class="footer-grids w3-agileits">
            <div class="col-md-2 footer-grid">
                <h4>Quốc Gia</h4>
                <ul>
                    @foreach($danhsachquocgia  as $key=> $ds)

                    <li><a href="{{url('')}}/phim/quocgia/{{$ds->id}}" title="Release 2016">{{$ds->tenquocgia}}</a></li>
                        @endforeach

                </ul>
            </div>
            <div class="col-md-2 footer-grid">
                <h4>Thể Loại</h4>
                <ul>

                    @foreach($danhsachtheloai  as $key=> $ds)
                        @if($key >=24 )
                            <li><a href="{{url('')}}/phim/theloai/{{$ds->id}}">{{$ds->tenloai}}</a></li>
                        @endif
                    @endforeach


                </ul>
            </div>


            <div class="col-md-2 footer-grid">
                <h4>Thể Loại</h4>
                <ul class="w3-tag2">

                    @foreach($danhsachtheloai  as $key=> $ds)
                        @if($key >=0 && $key <=24)
                            <li><a href="{{url('')}}/phim/theloai/{{$ds->id}}">{{$ds->tenloai}}</a></li>
                        @endif
                    @endforeach

                </ul>


            </div>
            <div class="col-md-2 footer-grid">
                <h4>Phim Hot</h4>
                @foreach($danhsach4phim as $a)
                <div class="footer-grid1">
                    <div class="footer-grid1-left">
                        <a href="{{url('')}}/phim/{{$a->id}}"><img src="{{url('')}}/{{$a->hinhanh}}" alt=" " class="img-responsive"></a>
                    </div>
                    <div class="footer-grid1-right">
                        <a href="{{url('')}}/phim/{{$a->id}}">{{$a->tenphim}}</a>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                    @endforeach



            </div>
            <div class="col-md-2 footer-grid">
                <h4 class="b-log"><a href=""><span>X</span>em <span>P</span>him <span>H</span>ay</a></h4>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FXem-PhimHay-109544073787693%2F&tabs=timeline&width=400&height=1000&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="1000" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
            <ul class="bottom-links-agile">
                <li><a href="icons.html" title="Font Icons">Liên Hệ Chúng Tôi</a></li>
                <li><a href="short-codes.html" title="Short Codes">Email: phimonlinehay@gmail.com</a></li>
                <li><a href="contact.html" title="contact">Hoặc Số Điện Thoại : 0856034590</a></li>

            </ul>
        </div>
        <h3 class="text-center follow">Liên Hệ <span>Us</span></h3>
        <ul class="social-icons1 agileinfo">
            <li><a href="https://www.facebook.com/Xem-PhimHay-109544073787693/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

    </div>

</div>
