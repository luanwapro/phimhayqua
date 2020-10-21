
@extends('layout.layoutadmin')
@section('noidung')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if($error == "0")
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="thongbaotc" >
            <span class="badge badge-pill badge-success" >Thành Công</span>
            Thêm dữ liệu thành công
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @elseif($error == "1")
        <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show" id="thongbaotb">
            <span class="badge badge-pill badge-danger">Thất Bại</span>
            Vui Lòng Điền Đầy Đủ Thông Tin.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show" id="thongbaoxoa" style="display:none" >
        <span class="badge badge-pill badge-success" >Thành Công</span>
        Xóa dữ liệu thành công
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>

    @foreach($danhsachphim as $value)
        <div id="{{$value->id}}" style="position: initial;width: 100%;z-index: 999;display: none">


            <div class="col-lg-6" style="width: 100%;margin-left: 25%">
                <div class="card">
                    <div class="card-header">
                        <strong>Cập Nhật phim</strong>
                    </div>
                    <div class="card-body card-block">
                        <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">

                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Loại</label></div>
                                <div class="col-12 col-md-9">

                                </div>
                            </div>

                            <div><input name="chinhsua" value="{{$value->id}}" style="display: none"></div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Tên Phim</label></div>
                                <div class="col-12 col-md-9"><input name="tenphimupdate" class="form-control" value="{{$value->tenphim}}"  type="text"   placeholder="Vd : Phim Phạm Minh Luân"><small class="help-block form-text"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="select">Nhà Sản Xuất</label></div>
                                <div class="col-12 col-md-9">
                            <select name="quocgiaupdate" class="form-control" >
                            @foreach($danhsachquocgia as $quocgia)



                                            @if($value->quocgia == $quocgia->id)
                                                <option value="{{$quocgia->id}}" aria-checked="true">{{$quocgia->tenquocgia}}</option>
                                            @else

                                                <option value="{{$quocgia->id}}" aria-checked="false">{{$quocgia->tenquocgia}}</option>
                                            @endif


                            @endforeach

                            </select>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Ngày Sản Xuất</label></div>
                                <div class="col-12 col-md-9"><input name="ngaythemupdate" class="form-control"  type="date" value="{{$value->ngaythem}}"  placeholder="Vd : Phim Phạm Minh Luân"><small class="help-block form-text"></small></div>
                            </div>

                                                   <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Trailer</label></div>
                                <div class="col-12 col-md-9"><input name="trailerupdate" class="form-control" value="{{$value->trailer}}" type="text"   placeholder="Vd : http:\\"><small class="help-block form-text"></small></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Đánh Giá</label></div>
                                <div class="col-12 col-md-9"><input name="danhgiaupdate" class="form-control" min="1" max="5" value="{{$value->danhgia}}"  type="number"   placeholder="Vd : http:\\"><small class="help-block form-text"></small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Link Cmt</label></div>
                                <div class="col-12 col-md-9"><textarea name="linkcmtfacebook">{{$value->link_cmt}}</textarea> <small class="help-block form-text"></small></div>
                            </div>
    
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Nội Dung</label></div>
                                <div class="col-12 col-md-9"><textarea name="binhluanupdate" class="form-control"  type="text"  rows="6" placeholder="Vd : http:\\">{{$value->binhluan}}</textarea><small class="help-block form-text"></small></div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Hình Ảnh</label></div>
                                <div class="col-12 col-md-9"><input name="hinhanhupdate" class="form-control"  type="file"   placeholder="Vd : Phim Hành Động"><small class="help-block form-text"></small></div>
                            </div>




                            <button class="btn btn-primary btn-sm" type="submit" style="margin-left: 60%">
                                <i class="fa fa-dot-circle-o"></i> Cập Nhật Phim
                            </button>
                            <button class="btn btn-danger btn-sm" type="reset">
                                <i class="fa fa-ban"></i> Xóa Tất Cả
                            </button>

                        </form>
                    </div>

                </div>

            </div>
        </div>

    @endforeach



    <div id="themsanpham" style="position: initial;width: 100%;z-index: 999;display: none;">


        <div class="col-lg-6" style="width: 100%;margin-left: 25%">
            <div class="card">
                <div class="card-header">
                    <strong>Thêm Phim</strong>
                </div>
                <div class="card-body card-block">
                    <form class="form-horizontal" action=""  enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"></label></div>
                            <div class="col-12 col-md-9">
                                <p class="form-control-static"> </p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Tên Phim</label></div>
                            <div class="col-12 col-md-9"><input name="tenphim" class="form-control" value=""  type="text"   placeholder="Vd : Phim Phạm Minh Luân"><small class="help-block form-text"></small></div>
                        </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="select">Nhà Sản Xuất</label></div>
                                <div class="col-12 col-md-9">

                                    <select name="quocgia" class="form-control" >
                                        @foreach($danhsachquocgia as $quocgia)
                                            <option value="{{$quocgia->id}}" >{{$quocgia->tenquocgia}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Ngày Sản Xuất</label></div>
                            <div class="col-12 col-md-9"><input name="ngaythem" class="form-control"  type="date"  placeholder="Vd : Phim Phạm Minh Luân"><small class="help-block form-text"></small></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Trailer</label></div>
                            <div class="col-12 col-md-9"><input name="trailer" class="form-control"  type="text"   placeholder="Vd : http:\\"><small class="help-block form-text"></small></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Đánh Giá</label></div>
                            <div class="col-12 col-md-9"><input name="danhgia" class="form-control" min="1" max="5" value="5" type="number"   placeholder="Vd : http:\\"><small class="help-block form-text"></small></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Nội Dung</label></div>
                            <div class="col-12 col-md-9"><textarea name="binhluan" class="form-control"  type="text"  rows="8" placeholder="Vd : http:\\"></textarea><small class="help-block form-text"></small></div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Hình Ảnh</label></div>
                            <div class="col-12 col-md-9"><input name="hinhanh" class="form-control"  type="file"   placeholder="Vd : http:\\"><small class="help-block form-text"></small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Link Cmt</label></div>
                            <div class="col-12 col-md-9"><textarea name="linkcmtfacebook"></textarea> <small class="help-block form-text"></small></div>
                        </div>



                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Chọn Thể Loại</label></div>
                            <div class="col-12 col-md-9">
                            <div class="multiselect ">
                                <div class="selectBox " onclick="showCheckboxes()">
                                    <select>
                                        <option>Vui Lòng Chọn Thể Loại</option>
                                    </select>
                                    <small class="help-block form-text"></small>
                                    <div class="overSelect "></div>
                                </div>
                                <div id="checkboxes" >
                                    @foreach($danhsachtheloai as $theloai)
                                    <label for="one">
                                        <input type="checkbox" name="theloai[]" value="{{$theloai->id}}" /> {{$theloai->tenloai}}
                                    </label>
@endforeach
                                </div>
                            </div>
                        </div>
                        </div>




                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Chọn Diễn Viên</label></div>
                            <div class="col-12 col-md-9">
                                <div class="multiselect ">
                                    <div class="selectBox " onclick="showCheckboxesdv()">
                                        <select>
                                            <option>Vui Lòng Chọn Diễn Viên</option>
                                        </select>
                                        <small class="help-block form-text"></small>
                                        <div class="overSelect "></div>
                                    </div>
                                    <div id="checkboxesdv" >
                                        @foreach($danhsachdienvien as $theloai)
                                            <label for="one">
                                                <input type="checkbox" name="dienvien[]" value="{{$theloai->id}}" /> {{$theloai->ten}}<img src="{{$theloai->hinhanh}}" width="100px" height="100px">
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Chọn Đạo Diễn </label></div>
                            <div class="col-12 col-md-9">
                                <div class="multiselect ">
                                    <div class="selectBox " onclick="showCheckboxesdaodien()">
                                        <select>
                                            <option>Vui Lòng Chọn Đạo Viên</option>
                                        </select>
                                        <small class="help-block form-text"></small>
                                        <div class="overSelect "></div>
                                    </div>
                                    <div id="checkboxesdaodien" >
                                        @foreach($danhsachdaodien as $theloai)
                                            <label for="one">
                                                <input type="checkbox" name="daodien[]" value="{{$theloai->id}}" /> {{$theloai->ten}}<img src="{{$theloai->hinhanh}}" width="100px" height="100px">
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>

                            .multiselect {
                                width: 500px;
                                
                            }

                            .selectBox {
                                position: relative;
                            }

                            .selectBox select {
                                width: 100%;
                                font-weight: bold;
                            }

                            .overSelect {
                                position: absolute;
                                left: 0;
                                right: 0;
                                top: 0;
                                bottom: 0;
                            }

                            #checkboxes {
                                display: none;
                                border: 1px #dadada solid;
                            }
                            #checkboxesdv {
                                display: none;
                                border: 1px #dadada solid;
                            }

                            #checkboxesdaodien {
                                display: none;
                                border: 1px #dadada solid;
                            }



                            #checkboxes label {
                                display: block;
                            }

                            #checkboxes label:hover {
                                background-color: #1e90ff;
                            }
                        </style>
                        <script>

                            var expanded = false;

                            function showCheckboxes() {
                                var checkboxes = document.getElementById("checkboxes");
                                if (!expanded) {
                                    checkboxes.style.display = "block";
                                    expanded = true;
                                } else {
                                    checkboxes.style.display = "none";
                                    expanded = false;
                                }
                            }

                            function showCheckboxesdv() {
                                var checkboxes = document.getElementById("checkboxesdv");
                                if (!expanded) {
                                    checkboxes.style.display = "block";
                                    expanded = true;
                                } else {
                                    checkboxes.style.display = "none";
                                    expanded = false;
                                }
                            }
                            function showCheckboxesdaodien() {
                                var checkboxes = document.getElementById("checkboxesdaodien");
                                if (!expanded) {
                                    checkboxes.style.display = "block";
                                    expanded = true;
                                } else {
                                    checkboxes.style.display = "none";
                                    expanded = false;
                                }
                            }

                        </script>





                        <button class="btn btn-primary btn-sm" type="submit" style="margin-left: 60%">
                            <i class="fa fa-plus"></i> Thêm Phim
                        </button>
                        <button class="btn btn-danger btn-sm" type="reset">
                            <i class="fa fa-ban"></i> Xóa Tất Cả
                        </button>

                    </form>
                </div>

            </div>

        </div>
    </div>




    <button class="btn btn-success btn-sm" type="button"  onclick="ExportToExcel()" style="margin-left: 85%"><i class="fa fa-magic"></i>&nbsp; Xuất File Excel</button>
    </br>
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Danh Sách Phim</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Tên Phim</th>
                    <th>Quốc Gia</th>
                    <th>Ngày Thêm</th>
                    <th>Trailer</th>
                    <th>Đánh Giá</th>
                    <th>Bình Luận</th>

                    <th>Hình Ảnh</th>
                    <th>Thể Loại</th>
                    <th>Danh Sách diễn viên tham gia</th>
                    <th>Đạo Diễn</th>

                    <th>Lượt Xem</th>

                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @forelse($danhsachphim as $value)

                    <tr>

                        <td>
                            {{$value->tenphim}}

                        </td>
                        <td>
                            {{$value->qg->tenquocgia}}

                        </td>
                        <td>
                            {{$value->ngaythem}}

                        </td>
                        <td>
                            {{$value->trailer}}

                        </td>
                        <td>
                            {{$value->danhgia}}

                        </td>
                        <td>
                            {{$value->binhluan}}

                        </td>
                        <td>
                            <img src="{{$value->hinhanh}}" width="100px" height="100px">
                        </td>
                        <td>
                        @foreach($danhsachchitiet as $chitiet)

@if($chitiet->id_phim == $value->id)
{{$chitiet->theloai->tenloai}} ,
    @endif

                            @endforeach
                            </td>


                        <td>
                            @foreach($danhsachchitietdienvien as $chitiet)

                                @if($chitiet->id_phim == $value->id)
                                    {{$chitiet->dienvien1->ten}} ,
                                @endif

                            @endforeach
                        </td>
                        <td>
                            @foreach($danhsachchitietdaodien as $chitiet)

                                @if($chitiet->id_phim == $value->id)
                                    {{$chitiet->daodien1->ten}} ,
                                @endif

                            @endforeach
                        </td>
                        <td>
                            {{$value->luotxem}}

                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm" type="submit" onclick="chinhsua(idloaiphim='{{$value->id}}')">
                                <i class=" fa fa-edit"></i> Chỉnh Sửa
                            </button>
                            <button  style="margin-top: 5px" class="btn btn-primary btn-sm" type="submit" onclick="hien()">
                                <i class=" fa fa-plus"></i> Thêm Phim
                            </button>
                            <div style="margin-top: 5px">
                                <button class="btn btn-primary btn-sm" type="submit" onclick="">
                                    <i class=" fa fa-plus"></i><a href="{{url('')}}/quanly/quanlytapphim?idphim={{$value->id}}">Thêm Tập Phim</a>
                                </button>
                                <button style="margin-top: 5px" class="btn btn-danger btn-sm" type="reset" onclick="xoa(idloaiphim='{{$value->id}}')">
                                    <i class="fa fa-ban"></i> Xóa
                                </button>
                            </div>

                        </td>
                    </tr>

                @empty
                    <td role="3">Chưa có Danh Sách Phim<td>
                    <td>   <button class="btn btn-primary btn-sm" type="submit" onclick="hien()">
                            <i class=" fa fa-plus"></i> Thêm Phim
                        </button></td>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </div>



    <script>
        function ExportToExcel()
        {
            var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
            var textRange; var j=0;
            tab = document.getElementById('bootstrap-data-table-export'); // id of table

            for(j = 0 ; j < tab.rows.length ; j++)
            {
                tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
                //tab_text=tab_text+"</tr>";
            }

            tab_text=tab_text+"</table>";
            tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
            tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
            tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

            var ua = window.navigator.userAgent;
            var msie = ua.indexOf("MSIE ");

            if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
            {
                txtArea1.document.open("txt/html","replace");
                txtArea1.document.write(tab_text);
                txtArea1.document.close();
                txtArea1.focus();
                sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
            }
            else                 //other browser not tested on IE 11
                sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));

            return (sa);
        }


        function xoa() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post('',{'idloaiphimcanxoa':idloaiphim},function (data) {
                $('#thongbaoxoa').css('display','block');
                window.location="quanly/quanlyphim";
            });
        }
        function chinhsua() {
                    @forEach( $danhsachphim as $value)

            var id= '{{$value->id}}';
            $('#'+id).css('display','none');
            @endforeach
            $('#themsanpham').css('display','none');
            $('#'+idloaiphim).css('display','block');
        }
        function hien(){
                    @forEach($danhsachphim as $value)

            var id= '{{$value->id}}';
            $('#'+id).css('display','none');
            @endforeach
            $('#themsanpham').css('display','block');
            scrolltop();
        }

    </script>

@endsection

<!-- Right Panel -->
