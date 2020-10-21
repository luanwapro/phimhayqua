<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<script>
        @if(!Auth::check()) {
        window.location="{{url('')}}/quanly/dangnhap";
    }
    @endif
</script>
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <link rel="apple-touch-icon" href="admin_file/apple-icon.png">
    <link rel="shortcut icon" href="admin_file/favicon.ico">


    <link rel="stylesheet" href="admin_file/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin_file/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin_file/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="admin_file/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_file/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="admin_file/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="admin_file/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="admin_file/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- Left Panel -->



<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="admin_file/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="admin_file/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Quản Lý</h3><!-- /.menu-title -->

                <li class="menu-item-has-children active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Quản Lý </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyloaiphim">Quản Lý Loại Phim</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyhinhanh">Quản Lý Hình Ảnh</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlybinhluan">Quản Lý Bình Luân</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlydaodien">Quản Lý Đạo Diễn</a></li>

                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlydienvien">Quản Lý Diễn Viên</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyquocgia">Quản Lý  Quốc Gia</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyngonngu">Quản Lý  Ngôn Ngữ</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyserver">Quản Lý  Server</a></li>


                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlysilde">Quản Lý  Silde</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyphim">Quản Lý  Phim</a></li>
                        <li><i class="fa fa-table"></i><a href="{{url('')}}/quanly/quanlyphim">Quản Lý  Tập Phim</a></li>

                    </ul>
                </li>





                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">

                    </ul>
                </li>
                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Quản Lý Tài Khoản</a>
                    <ul class="sub-menu children dropdown-menu">
                    @if(Auth::check()) 
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="#">Xin Chào {{Auth::user()->name}} </a></li>
                    @endif
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{url('')}}/quanly/dangxuat">Đăng Xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language">
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-fr"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Quản Lý</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">

@yield('noidung')

            </div><!-- /#right-panel -->
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->






                <script src="admin_file/vendors/jquery/dist/jquery.min.js"></script>
                <script src="admin_file/vendors/popper.js/dist/umd/popper.min.js"></script>
                <script src="admin_file/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="admin_file/assets/js/main.js"></script>


                <script src="admin_file/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
                <script src="admin_file/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                <script src="admin_file/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                <script src="admin_file/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                <script src="admin_file/vendors/jszip/dist/jszip.min.js"></script>
                <script src="admin_file/vendors/pdfmake/build/pdfmake.min.js"></script>
                <script src="admin_file/vendors/pdfmake/build/vfs_fonts.js"></script>
                <script src="admin_file/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
                <script src="admin_file/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
                <script src="admin_file/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
                <script src="admin_file/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
<script type="text/javascript">


    function scrolltop()
    {
        var id_button = '#scrolltop';

        // Kéo xuống khoảng cách 220px thì xuất hiện button
        var offset = 220;

        // THời gian di trượt là 0.5 giây
        var duration = 500;

        // Thêm vào sự kiện scroll của window, nghĩa là lúc trượt sẽ
        // kiểm tra sự ẩn hiện của button
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery(id_button).fadeIn(duration);
            } else {
                jQuery(id_button).fadeOut(duration);
            }
        });

        // Thêm sự kiện click vào button để khi click là trượt lên top

        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;

    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>