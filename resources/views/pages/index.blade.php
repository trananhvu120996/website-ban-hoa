
@extends("template.template")
@section("content")



<!-- HEADER-BOTTOM-AREA START -->
<section class="header-bottom-area">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<!-- LEFT-CATEGORY-MENU START -->
<div class="left-category-menu">
<div class="left-product-cat">
<div class="category-heading">
<h2>Danh mục </h2>
</div>
<!-- CATEGORY-MENU-LIST START -->
<div class="category-menu-list">
<ul>
@foreach($ds_loai as $ds)
<li><a href="search-product-{{ $ds->MaLoai }}.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="{{url('/')}}/img/layout2/5.png" alt="" />
</span>{{ $ds->TenLoai }}<i class="fa fa-angle-right"></i></a>
@endforeach
</li>

</ul>
</div>
<!-- CATEGORY-MENU-LIST END -->
</div>
</div>	
<!-- LEFT-CATEGORY-MENU END -->			
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<!-- MAIN-SLIDER-AREA START -->
<div class="main-slider-area">
<div class="slider-area">
<div id="wrapper">
<div class="slider-wrapper">
<div id="mainSlider" class="nivoSlider">
<img src="{{url('/')}}/img/images/banner02.jpg" alt="main slider" title="#htmlcaption" style="height:297px;"/>
<img src="{{url('/')}}/img/images/banner01.png" alt="main slider" title="#htmlcaption2" />
</div>
<div id="htmlcaption" class="nivo-html-caption slider-caption">
<div class="slider-progress"></div>
	
</div>
<div id="htmlcaption2" class="nivo-html-caption">
<div class="slider-progress"></div>

</div>
</div>
</div>								
</div>											
</div>	
<!-- MAIN-SLIDER-AREA END -->
</div>						
</div>
</div>
</section>
<!-- HEADER-BOTTOM-AREA END -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
<div class="container">
<div class="row">
<!-- LEFT-SIDEBAR START -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<!-- SIDEBAR-LEFT-ADD START -->
<div class="single-left-sidebar sidebar-left-add">
<div class="sidebar-left zoom-img">
<a href="#"><img src="{{url('/')}}/img/images/hoa/hoa_cuoi_1.jpg" alt="sidebar left" /></a>
</div>	
</div>
<!-- SIDEBAR-LEFT-ADD END -->
<!-- LEFT SIDEBAR-BEST-SELLER START -->
<div class="single-left-sidebar sidebar-best-seller">
<div class="left-title-area">
<h2 class="left-title">Sản phẩm bán chạy</h2>
</div>
<div class="row">
<!-- SIDEBAR-BEST-SELLER-CAROUSEL START -->			
<div class="sidebar-best-seller-carousel">
<!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
<div class="item">

@foreach($sp_ban_chay_1 as $sp)
<!-- SINGLE-PRODUCT-ITEM START -->
<div class="single-product-item">
<div class="sidebar-product-image">
    <a href="single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt="product-image" style="max-width : 80px; max-height : 80px" /></a>
</div>
<div class="product-info sede-pro-info">
    <a href="single-product-{{ $sp->MaHoa }}.html">{{ $sp->TenHoa }}</a>
    <div class="customar-comments-box">
        <div class="rating-box">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
    </div>
    <div class="price-box">
        <span class="price">{{ $sp->Gia }}<sup>đ</sup></span>
    </div>
</div>
</div>
<!-- SINGLE-PRODUCT-ITEM END -->
@endforeach

<!-- qua trang -->						
</div>
<!-- SIDEBAR-BEST-SELLER SINGLE ITEM END -->
<!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
<div class="item">
@foreach($sp_ban_chay_2 as $sp)
<!-- SINGLE-PRODUCT-ITEM START -->
<div class="single-product-item">
<div class="sidebar-product-image">
    <a href="single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt="product-image" style="max-width : 80px; max-height : 80px" /></a>
</div>
<div class="product-info sede-pro-info">
    <a href="single-product-{{ $sp->MaHoa }}.html">{{ $sp->TenHoa }}</a>
    <div class="customar-comments-box">
        <div class="rating-box">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
    </div>
    <div class="price-box">
        <span class="price">{{ $sp->Gia }}<sup>đ</sup></span>
    </div>
</div>
</div>
<!-- SINGLE-PRODUCT-ITEM END -->
@endforeach							
</div>
<!-- SIDEBAR-BEST-SELLER SINGLE ITEM END -->
</div>	
<!-- SIDEBAR-BEST-SELLER-CAROUSEL END -->	
</div>
</div>
<!-- LEFT SIDEBAR-BEST-SELLER END -->
</div>	
<!-- LEFT-SIDEBAR END -->
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="new-product-area">
<div class="left-title-area">
<h2 class="left-title">Sản phẩm mới</h2>
</div>						
<div class="row">
<div class="col-xs-12">
<div class="row">
<!-- HOME2-NEW-PRO-CAROUSEL START -->
<div class="home2-new-pro-carousel">

<!-- NEW-PRODUCT SINGLE ITEM START -->
 @foreach($sp_ban_chay_3 as $sp)
        <div class="item">
        <div class="new-product">
        <div class="single-product-item">
        <div class="product-image">
            <a href="single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt="product-image" style="max-width :458px; max-height :190px" /></a>
            <a href="#" class="new-mark-box">new</a>
            <div class="overlay-content">
                <ul>
                    <li><a href="#" title="" ><i class="fa fa-search"></i></a></li>
                    <li><a href="{{url('/')}}/mua-hang-other-{{ $sp->MaHoa }}" title=""><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="single-product-{{ $sp->MaHoa }}.html" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product-info">
            <div class="customar-comments-box">
                <div class="rating-box">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-empty"></i>
                </div>
                <div class="review-box">
                    <span>3 Review(s)</span>
                </div>
            </div>
            <a href="single-product-{{ $sp->MaHoa }}.html">{{ $sp->TenHoa }}</a>
            <div class="price-box" >
                <span class="price">{{ number_format($sp->Gia,0,",",".") }}<sup>đ</sup></span>
            </div>
           
            
        </div>
        </div>
        </div>
        </div>
        @endforeach
<!-- NEW-PRODUCT SINGLE ITEM END -->


</div>
<!-- HOME2-NEW-PRO-CAROUSEL END -->
</div>
</div>
</div>
</div>										
</div>
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
<!-- TOW-COLUMN-ADD START -->
<div class="tow-column-add zoom-img">
<a href="#"><img src="{{url('/')}}/img/images/slide.jpg" alt="shope-add" style="max-width :495px; max-height :217px" /></a>
</div>
<!-- TOW-COLUMN-ADD END -->
</div>
<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
<!-- TOW-COLUMN-ADD START -->
<div class="tow-column-add zoom-img">
<a href="#"><img src="{{url('/')}}/img/images/banner02.jpg" alt="shope-add" style="max-width :495px; max-height :217px" /></a>
</div>
<!-- TOW-COLUMN-ADD END -->
</div>	
<div class="col-xs-12">
<!-- SALE-PODUCT-AREA START -->
<div class="sale-poduct-area new-product-area">
<div class="left-title-area">
<h2 class="left-title">Sản phẩm khuyến mãi</h2>
</div>
<div class="row">
<!-- HOME2-SALE-CAROUSEL START -->
<div class="home2-sale-carousel">


<!-- NEW-PRODUCT SINGLE ITEM START -->
 @foreach($sp_ban_chay_4 as $sp)
        <div class="item">
        <div class="new-product">
        <div class="single-product-item">
        <div class="product-image">
            <a href="single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt="product-image" style="max-width :458px; max-height :190px" /></a>
            <a href="#" class="new-mark-box">Sale</a>
            <div class="overlay-content">
                <ul>
                    <li><a href="#" title=""><i class="fa fa-search"></i></a></li>
                    <li><a href="{{url('/')}}/mua-hang-other-{{ $sp->MaHoa }}" title=""><i class="fa fa-shopping-cart"></i></a></li>
                    <li><a href="single-product-{{ $sp->MaHoa }}.html" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product-info">
            <div class="customar-comments-box">
                <div class="rating-box">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-empty"></i>
                </div>
                <div class="review-box">
                    <span>3 Review(s)</span>
                </div>
            </div>
            <a href="single-product-{{ $sp->MaHoa }}.html">{{ $sp->TenHoa }}</a>
            <div class="price-box">
                <span class="price">{{ number_format($sp->Gia,0,",",".") }}<sup>đ</sup></span>
            </div>
        </div>
        </div>
        </div>
        </div>
        @endforeach
<!-- NEW-PRODUCT SINGLE ITEM END -->


</div>
<!-- HOME2-SALE-CAROUSEL END -->
</div>
</div>
<!-- SALE-PODUCT-AREA end -->
</div>
</div>	
</div>	
</div>
</div>
</section>	
<!-- MAIN-CONTENT-SECTION END -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section-full-column">
<div class="container">
<div class="row">
<!-- IMAGE-ADD-AREA START -->
<div class="image-add-area">
<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">

</div>						
</div>
<!-- IMAGE-ADD-AREA END -->
</div>
<div class="row">
<div class="col-xs-12">
<!-- FEATURED-PRODUCTS-AREA START -->
<div class="featured-products-area">
<div class="left-title-area">
<h2 class="left-title">Hoa tươi trong ngày</h2>
</div>	
<div class="row">
<!-- FEARTURED-CAROUSEL START -->	
<div class="feartured-carousel">
<!-- SINGLE ITEM START -->
@foreach($sp_loai_1 as $sp)
<div class="item">
<!-- SINGLE-PRODUCT-ITEM START -->
<div class="single-product-item">
<div class="product-image">
<a href="single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt="product-image" style="max-width :470px; max-height :190px"  /></a>
<a href="#" class="new-mark-box">new</a>
<div class="overlay-content">
<ul>
<li><a href="#" title=""><i class="fa fa-search"></i></a></li>
<li><a href="{{url('/')}}/mua-hang-other-{{ $sp->MaHoa }}" title=""><i class="fa fa-shopping-cart"></i></a></li>
<li><a href="single-product-{{ $sp->MaHoa }}.html" title="Quick view"><i class="fa fa-retweet"></i></a></li>
</ul>
</div>
</div>
<div class="product-info">
<div class="customar-comments-box">
<div class="rating-box">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-half-empty"></i>
</div>
<div class="review-box">
<span>1 Review(s)</span>
</div>
</div>
<a href="single-product-{{ $sp->MaHoa }}.html">{{ $sp->TenHoa }}</a>
<div class="price-box">
<span class="price">{{ number_format($sp->Gia,0,",",".") }}<sup>đ</sup></span>
</div>
</div>
</div>
<!-- SINGLE-PRODUCT-ITEM END -->
</div>
@endforeach

<!-- SINGLE ITEM END -->								
</div>
<!-- FEARTURED-CAROUSEL END -->
</div>
</div>
<!-- FEATURED-PRODUCTS-AREA END -->
</div>						
</div>
</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->



<!-- LATEST-NEWS-AREA START -->
<section class="latest-news-area">
<div class="container">
<div class="row">
<div class="latest-news-row">
<div class="center-title-area">
<h2 class="left-title"><a href="{{url('/')}}/tintuc.html">Tin tức mới</a></h2>
</div>	
<div class="col-xs-12">
<div class="row">
<!-- LATEST-NEWS-CAROUSEL START -->
<div class="latest-news-carousel">

<!-- LATEST-NEWS-SINGLE-POST START -->
@foreach($tin_noi_bat as $tin)
<div class="item">
<div class="latest-news-post">
<div class="single-latest-post">
<a href="{{url('/')}}/tintuc/single-{{ $tin->idTin }}"><img src="{{url('/')}}/tintuc/{{ $tin->Hinh }}" alt="latest-post" style="max-width :270px; max-height :169px" /></a>
<h2><a href="{{url('/')}}/tintuc/single-{{ $tin->idTin }}">{{ $tin->TieuDe }}</a></h2>
<p>{{ $tin->TomTat }}</p>
<div class="read-more">
<a href="{{url('/')}}/tintuc/single-{{ $tin->idTin }}">Đọc tiếp <i class="fa fa-long-arrow-right"></i></a>
</div>
</div>
</div>
</div>
@endforeach
<!-- LATEST-NEWS-SINGLE-POST END -->
			
</div>	
<!-- LATEST-NEWS-CAROUSEL START -->
</div>
</div>
</div>
</div>
</div>
</section>
<!-- LATEST-NEWS-AREA END -->

@stop 