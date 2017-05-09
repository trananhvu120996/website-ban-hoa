
@extends("template.template")
@section("content")

<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!-- BSTORE-BREADCRUMB START -->
<div class="bstore-breadcrumb">
<a href=".">Trang chủ</a>
<span><i class="fa fa-caret-right"></i></span>
<span>Tin tức</span>
</div>
<!-- BSTORE-BREADCRUMB END -->
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<div class="product-left-sidebar">
<!-- LEFT-SIDEBAR START -->



<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<!-- SIDEBAR-LEFT-ADD START -->	
</div>
<!-- SIDEBAR-LEFT-ADD END -->
<!-- LEFT SIDEBAR-BEST-SELLER START -->
<div class="single-left-sidebar sidebar-best-seller">
<div class="left-title-area">
<h2 class="left-title">Sản phẩm mới</h2>
</div>
<div class="row">
<!-- SIDEBAR-BEST-SELLER-CAROUSEL START -->			
<div class="sidebar-best-seller-carousel">
<!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
<div class="item">

@foreach($sp_moi as $sp)
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

<!-- LEFT-SIDEBAR END -->
</div>


<div class="product-left-sidebar">
<h2 class="left-title">Tags </h2>
<div class="category-tag">
@foreach($ds_loai as $ds)
<a href="#">{{ $ds->TenLoai }}</a>
@endforeach
</div>
</div>					
</div>




<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="right-all-product">

<div class="product-category-title">
	<!-- PRODUCT-CATEGORY-TITLE START -->
	<h1>
		<span class="cat-name">Tin tức</span>
	</h1>
	<!-- PRODUCT-CATEGORY-TITLE END -->
</div>
<div class="product-shooting-area">
	
</div>
</div>
<!-- ALL GATEGORY-PRODUCT START -->
<div class="all-gategory-product">
<div class="row">
	<ul class="gategory-product">


		@foreach($tin_tuc as $tin)
		<!-- SINGLE ITEM START -->
		<li class="cat-product-list">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="single-product-item">
					<div class="product-image">
						<a href="single-news-{{ $tin->MaTT }}.html"><img src="{{url('/')}}/tintuc/{{ $tin->Hinh }}" alt="product-image" style="max-height : 190px;" /></a>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class="list-view-content">
					<div class="single-product-item">
						<div class="product-info">
							<div class="customar-comments-box">
								<a href="single-news-{{ $tin->MaTT }}.html">{{ $tin->TenTT }} </a>
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
							<div class="product-datails">
								<p>{{ $tin->TenTT }} </p>
							</div>
						
						</div>
						<div class="overlay-content-list">
							<ul>
								<li><a href="single-news-{{ $tin->MaTT }}.html" title="Xem chi tiết" class="add-cart-text">Xem chi tiết</a></li>							
							</ul>
						</div>												
					</div>														
				</div>
			</div>
		</li>
		<!-- SINGLE ITEM END -->
		@endforeach



	</ul>
</div>
</div>
<!-- ALL GATEGORY-PRODUCT END -->
<!-- PRODUCT-SHOOTING-RESULT START -->

<!-- PRODUCT-SHOOTING-RESULT END -->
</div>

</div>
</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->

@stop