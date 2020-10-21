
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

    @foreach($danhsachquocgia as $value)
        <div id="{{$value->id}}" style="position: initial;width: 100%;z-index: 999;display: none">


            <div class="col-lg-6" style="width: 100%;margin-left: 25%">
                <div class="card">
                    <div class="card-header">
                        <strong>Cập Nhật Quốc Gia</strong>
                    </div>
                    <div class="card-body card-block">
                        <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">

                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Loại</label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Link  </p>
                                </div>
                            </div>

                            <div><input name="chinhsua" value="{{$value->id}}" style="display: none"></div>



                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label" for="email-input">Tên Quốc Gia</label></div>
                                <div class="col-12 col-md-9"><input name="tenupdate" class="form-control"  type="text" value="{{$value->tenquocgia}}"  placeholder="Vd : Phim Hành Động"><small class="help-block form-text"></small></div>
                            </div>




                            <button class="btn btn-primary btn-sm" type="submit" style="margin-left: 60%">
                                <i class="fa fa-dot-circle-o"></i> Cập Nhật Tên Quốc Gia
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
                    <strong>Thêm Quốc Gia</strong>
                </div>
                <div class="card-body card-block">
                    <form class="form-horizontal" action="" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"></label></div>
                            <div class="col-12 col-md-9">
                                <p class="form-control-static"> </p>
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" for="email-input">Tên Quốc Gia</label></div>
                            <div class="col-12 col-md-9"><input name="ten" class="form-control"  type="text" placeholder="Việt Nam"><small class="help-block form-text"></small></div>
                        </div>

                        <button class="btn btn-primary btn-sm" type="submit" style="margin-left: 60%">
                            <i class="fa fa-plus"></i> Thêm Quốc Gia
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
            <strong class="card-title">Danh Quốc Gia</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Tên Quốc Gia</th>


                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @forelse($danhsachquocgia as $value)

                    <tr>

                        <td>
                            {{$value->tenquocgia}}
                        </td>

                        <td>
                            <button class="btn btn-primary btn-sm" type="submit" onclick="chinhsua(idloaiphim='{{$value->id}}')">
                                <i class=" fa fa-edit"></i> Chỉnh Sửa
                            </button>
                            <button class="btn btn-primary btn-sm" type="submit" onclick="hien()">
                                <i class=" fa fa-plus"></i> Thêm Loại Phim
                            </button>
                            <button class="btn btn-danger btn-sm" type="reset" onclick="xoa(idloaiphim='{{$value->id}}')">
                                <i class="fa fa-ban"></i> Xóa
                            </button>
                        </td>
                    </tr>

                @empty
                    <td role="3">Chưa có Danh Sách Bình Luân<td>
                    <td>   <button class="btn btn-primary btn-sm" type="submit" onclick="hien()">
                            <i class=" fa fa-plus"></i> Thêm Bình Luận
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
                window.location="quanly/quanlyquocgia";
            });
        }
        function chinhsua() {
                    @forEach( $danhsachquocgia as $value)

            var id= '{{$value->id}}';
            $('#'+id).css('display','none');
            @endforeach
            $('#themsanpham').css('display','none');
            $('#'+idloaiphim).css('display','block');
        }
        function hien(){
                    @forEach($danhsachquocgia as $value)

            var id= '{{$value->id}}';
            $('#'+id).css('display','none');
            @endforeach
            $('#themsanpham').css('display','block');
            scrolltop();
        }

    </script>

@endsection

<!-- Right Panel -->
