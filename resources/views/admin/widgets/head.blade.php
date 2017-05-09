<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
<meta name="author" content="GeeksLabs">
<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
<link rel="shortcut icon" href="img/favicon.png">

<title>Hoa tươi 24h</title>

<!-- Bootstrap CSS -->    
<link href="{{url("/")}}/admin/css/bootstrap.min.css" rel="stylesheet" />
<link href="{{url("/")}}/admin/css/datepicker.css" rel="stylesheet" />
<link href="{{url("/")}}/admin/css/bootstrap.min.css" rel="stylesheet">
<!-- bootstrap theme -->
<link href="{{url("/")}}/admin/css/bootstrap-theme.css" rel="stylesheet">
<!--external css-->
<!-- font icon -->
<link href="{{url("/")}}/admin/css/elegant-icons-style.css" rel="stylesheet" />
<link href="{{url("/")}}/admin/css/font-awesome.min.css" rel="stylesheet" />    
<!-- full calendar css-->
<link href="{{url("/")}}/admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
<link href="{{url("/")}}/admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
<!-- easy pie chart-->
<link href="{{url("/")}}/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- owl carousel -->
<link rel="stylesheet" href="{{url("/")}}/admin/css/owl.carousel.css" type="text/css">
<link href="{{url("/")}}/admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<!-- Custom styles -->
<link rel="stylesheet" href="{{url("/")}}/admin/css/fullcalendar.css">
<link href="{{url("/")}}/admin/css/widgets.css" rel="stylesheet">
<link href="{{url("/")}}/admin/css/style.css" rel="stylesheet">
<link href="{{url("/")}}/admin/css/style-responsive.css" rel="stylesheet" />
<link href="{{url("/")}}/admin/css/xcharts.min.css" rel=" stylesheet">	
<link href="{{url("/")}}/admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{url("/")}}/admin/css/print.css"/ media="print">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
<!--[if lt IE 9]>
<script src="{{url("/")}}/admin/js/html5shiv.js"></script>
<script src="{{url("/")}}/admin/js/respond.min.js"></script>
<script src="{{url("/")}}/admin/js/lte-ie7.js"></script>
<![endif]-->
<link rel="stylesheet" href="{{url("/")}}/admin/css/jquery-ui.css">
</head>

<body>
<!-- container section start -->
<section id="container" class="">


<header class="header dark-bg print" >
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
    </div>

    <!--logo start-->
    <a href="{{url("/")}}/ad" class="logo">Shop hoa <span class="lite">24h</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">                    
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>                    
        </ul>
        <!--  search form end -->                
    </div>
    {!!Form::open(array('route'=>'post_admin'))!!}
    <div class="top-nav notification-row">                
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="profile-ava">
                        <img alt="" src="">
                    </span>
                    <span class="username" name="ten_dang_nhap">Chào: {!!$thong_tin_nguoi_dung->username!!}</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
               
                    <li>
                        <a href="{{url('/')}}/ad/ad_logout"><i class="icon_key_alt"></i> Đăng xuất</a>
                    </li>
                  
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
   {!!Form::close()!!}
    
</header>      
<!--header end-->
<!--sidebar start-->
<aside class="print">
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">                
            <li class="active">
                <a class="" href="{{url("/")}}/ad">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!--Sản phẩm -->
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Sản phẩm</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_sanpham">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_sanpham">Thêm mới</a></li>
                </ul>
            </li>       
            
            <!--Loại sản phẩm -->
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Loại sản phẩm</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_loaisanpham">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_loaisanpham">Thêm mới</a></li>
                </ul>
            </li>  

            <!--Tin tức -->
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Tin tức hoa</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_tintuc">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_tintuc">Thêm mới</a></li>                          
                </ul>
            </li>

             <!--Tin tức -->
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Tin tức</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_tin">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_tin">Thêm mới</a></li>                          
                </ul>
            </li>

            <!--Hóa đơn -->
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Hóa đơn</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_hoadon">Danh sách</a></li> 
                           
                </ul>
            </li>
                           
                <!--User -->        
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>User</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_user">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_user">Thêm mới</a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>Chủ đề</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_chude">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_chude">Thêm mới</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>Khách hàng</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{url("/")}}/ad/ds_khachhang">Danh sách</a></li>
                    <li><a class="" href="{{url("/")}}/ad/them_khachhang">Thêm mới</a></li>
                </ul>
            </li>

            
            
            
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->