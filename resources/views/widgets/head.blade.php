<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<!-- Mirrored from hastech.company/html/bstore-preview/bstore/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Sep 2016 08:15:43 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Shop hoa online</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon
============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/img/favicon.png">

<!-- FONTS
============================================ -->	
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<!-- animate CSS
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/animate.css">			

<!-- FANCYBOX CSS
============================================ -->			
<link rel="stylesheet" href="{{url('/')}}/css/jquery.fancybox.css">	

<!-- BXSLIDER CSS
============================================ -->			
<link rel="stylesheet" href="{{url('/')}}/css/jquery.bxslider.css">			

<!-- MEANMENU CSS
============================================ -->			
<link rel="stylesheet" href="{{url('/')}}/css/meanmenu.min.css">	

<!-- JQUERY-UI-SLIDER CSS
============================================ -->			
<link rel="stylesheet" href="{{url('/')}}/css/jquery-ui-slider.css">		

<!-- NIVO SLIDER CSS
============================================ -->			
<link rel="stylesheet" href="{{url('/')}}/css/nivo-slider.css">

<!-- OWL CAROUSEL CSS 	
============================================ -->	
<link rel="stylesheet" href="{{url('/')}}/css/owl.carousel.css">

<!-- OWL CAROUSEL THEME CSS 	
============================================ -->	
<link rel="stylesheet" href="{{url('/')}}/css/owl.theme.css">

<!-- BOOTSTRAP CSS 
============================================ -->	
<link rel="stylesheet" href="{{url('/')}}/css/bootstrap.min.css">

<!-- FONT AWESOME CSS 
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/font-awesome.min.css">

<!-- NORMALIZE CSS 
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/normalize.css">

<!-- MAIN CSS 
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/main.css">

<!-- STYLE CSS 
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/style.css">

<!-- RESPONSIVE CSS 
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/responsive.css">

<!-- IE CSS 
============================================ -->
<link rel="stylesheet" href="{{url('/')}}/css/ie.css">		

<!-- MODERNIZR JS 
============================================ -->
<script src="{{url('/')}}/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="index-2">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: 'db7a72b1-6919-4b98-95b8-b6d4da0d4c2a', f: true }); done = true; } }; })();</script>




<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- HEADER-TOP START -->








<div class="header-top">
<div class="container">
<div class="row">
<!-- HEADER-LEFT-MENU START -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="header-left-menu">
        <div class="welcome-info">
            Xin chào <span>{!! $name !!}</span>
        </div>
        <div class="currenty-converter">
        @if(isset($name))
           			{!! Form::open(array("route"=>"post_logout","files"=>true)) !!}
                        <input class="" type="submit" value="Đăng xuất">
                    {!! Form::close() !!}
        @endif 	

        </div>
        
    </div>

    

</div>
<!-- HEADER-LEFT-MENU END -->
<!-- HEADER-RIGHT-MENU START -->
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="header-right-menu">
        <nav>
            <ul class="list-inline">
               <!-- <li><a href="checkout.html">Check Out</a></li> -->
                <li><a href="cart.html">Giỏ hàng</a></li>
                <li><a href="login.html">Đăng nhập</a></li>
            </ul>									
        </nav>
    </div>
</div>
<!-- HEADER-RIGHT-MENU END -->
</div>
</div>
</div>
<!-- HEADER-TOP END -->
<!-- HEADER-MIDDLE START -->
<section class="header-middle">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <!-- LOGO START -->
    <div class="logo">
        <a href="."><img src="{{url('/')}}/img/images/logoshop.png" alt="bstore logo" /></a>
    </div>
    <!-- LOGO END -->
    <!-- HEADER-RIGHT-CALLUS START -->
    <div class="header-right-callus">
        <h3>Hỗ trợ</h3>
        <span>0188-4777-670</span>
        
    </div>

    
    <!-- HEADER-RIGHT-CALLUS END -->
    <!-- CATEGORYS-PRODUCT-SEARCH START -->
    <div class="categorys-product-search">
         {!! Form::open(array("route"=>"post_search")) !!}
            <div class="search-product form-group">
                <select name="catsearch" class="cat-search">
                    <option value="1,2,3,4,5,6">Danh mục</option>
                    @foreach($ds_loai as $ds)
                    <option value="{{ $ds->MaLoai }}">--{{ $ds->TenLoai }}</option>
                    @endforeach				
                </select>
                
                <input list="browsers" name="browser" id="btnsearch"  placeholder="Nhập từ khóa..."/>
                <datalist id="browsers">
                    @foreach($auto_search as $auto)
                    <option value="{{$auto->ThanhPhan}}">
                   @endforeach
                </datalist>
                <button class="search-button" value="Search" name="s" type="submit">
                    <i class="fa fa-search"></i>
                </button>

                									 
            </div>
            
         {!! Form::close() !!}  
    </div>
    <!-- CATEGORYS-PRODUCT-SEARCH END -->
</div>
</div>
</div>
</section>
<!-- HEADER-MIDDLE END -->
<!-- MAIN-MENU-AREA START -->
<header class="main-menu-area">
<div class="container">
<div class="row">
<!-- SHOPPING-CART START -->
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
    <div class="shopping-cart-out pull-right" >
        <div class="shopping-cart" >
            <a class="shop-link" href="cart.html" title="View my shopping cart">
                <i class="fa fa-shopping-cart cart-icon"></i>
                <b>Giỏ hàng</b>
                <span class="ajax-cart-quantity">{!! $count !!}</span>
            </a>
            
            <div class="shipping-cart-overly">
                @foreach($content as $item)
                <input type="hidden" value="{{ $total=$total+ ($item->price*$item->qty) }}" />
                <input type="hidden" class="qty" min="1" name="qty"  value="{!! $item->qty !!}" style="width:80px;" />
                <div class="shipping-item">
                    
                    <div class="shipping-item-image">
                        <a href="#"><img src="{{url('/')}}/img/images/hoa/{!! $item->options->img !!}" alt="shopping image" style="max-width:120px; max-height: 80px;" /></a>
                    </div>
                    <div class="shipping-item-text">
                        <span><a href="#" class="pro-cat">{!! $item->name !!}</a></span>
                       
                        <p>{!! number_format($item->price*$item->qty,0,",",".") !!}<sup>Đ</sup></p>
                    </div>
                </div>
                @endforeach


                <div class="shipping-total-bill">
                    <div class="cart-prices">
                        <span class="shipping-cost">00<sup>Đ</sup></span>
                        <span>Vận chuyển</span>
                    </div>
                    <div class="total-shipping-prices">
                        <span class="shipping-total" style="color:red">{!! number_format($total,0,",",".") !!}<sup>Đ</sup></span>
                        <span style="color:red">Tổng tiền</span>
                    </div>										
                </div>
                <div class="shipping-checkout-btn">
                    <a href="cart.html">Thanh toán <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>


            
        </div>
    </div>
</div>	
<!-- SHOPPING-CART END -->
<!-- MAINMENU START -->
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
    <div class="mainmenu">
        <nav>
            <ul class="list-inline mega-menu">
                <li class="active"><a href=".">Trang chủ</a>
                </li>
                <li>
                    <a href="product.html">Shop hoa</a>
                    <!-- DRODOWN-MEGA-MENU START -->
                    <div class="drodown-mega-menu">
                        <div class="left-mega col-xs-6">
                            <div class="mega-menu-list">
                                <ul>
                                    @foreach($ds_loai as $ds)
                                    <li><a href="search-product-{{ $ds->MaLoai }}.html">{{ $ds->TenLoai }}</a></li>
                                   @endforeach
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <!-- DRODOWN-MEGA-MENU END -->
                </li>
                <li>
                    <a href="news.html">Tin tức</a>
                    <!-- DRODOWN-MEGA-MENU START -->
                    
                    <!-- DRODOWN-MEGA-MENU END -->
                </li>
                <li>
                    <a href="about.html">Giới thiệu</a>										
                </li>
                
                
            </ul>
        </nav>
    </div>
</div>
<!-- MAINMENU END -->
</div>
<div class="row">
<!-- MOBILE MENU START -->
<div class="col-sm-12 mobile-menu-area">
    <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
        <span class="mobile-menu-title">MENU</span>
        <nav>
            <ul>
                <li class="active"><a href=".">Trang chủ</a>
                </li>
                <li>
                    <a href="product.html">Shop hoa</a>
                    <!-- DRODOWN-MEGA-MENU START -->
                    <div class="drodown-mega-menu">
                        <div class="left-mega col-xs-6">
                            <div class="mega-menu-list">
                                <ul>
                                    <li><a href="#">Hoa Bó</a></li>
                                    <li><a href="#">Hoa Hộp</a></li>
                                    <li><a href="#">Hoa Cắm Giỏ</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <!-- DRODOWN-MEGA-MENU END -->
                </li>
                <li>
                    <a href="#">Tin tức</a>
                    <!-- DRODOWN-MEGA-MENU START -->
                    <div class="drodown-mega-menu">
                        <div class="left-mega col-xs-6">
                            <div class="mega-menu-list">
                                <ul>
                                    <li><a href="#">Tin tức mới</a></li>
                                    <li><a href="#">Tin công ty</a></li>
                                    <li><a href="#">Tin khuyến mãi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- DRODOWN-MEGA-MENU END -->
                </li>
                <li>
                    <a href="#">Giới thiệu</a>										
                </li>
                <li>
                    <a href="#">Liên hệ</a>
            </ul>
        </nav>
    </div>						
</div>
<!-- MOBILE MENU END -->
</div>				
</div>
</header>
<!-- MAIN-MENU-AREA END -->
