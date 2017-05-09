
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
@foreach($ten_loai as $ten)
<span>{{$ten->TenLoai}}</span>
@endforeach
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

@foreach($hoa_moi as $h)
<!-- SINGLE-PRODUCT-ITEM START -->
<div class="single-product-item">
<div class="sidebar-product-image">
<a href="single-product-{{ $h->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $h->Hinh }}" alt="product-image" style="max-width : 80px; max-height : 80px" /></a>
</div>
<div class="product-info sede-pro-info">
<a href="single-product-{{ $h->MaHoa }}.html">{{ $h->TenHoa }}</a>
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
<span class="price">{{ number_format($h->Gia,0,",",".") }}<sup>đ</sup></span>
</div>
</div>
</div>
<!-- SINGLE-PRODUCT-ITEM END -->
@endforeach

<!-- qua trang -->						
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
@foreach($ds_loai as $loai)
	<a href="search-product-{{ $loai->MaLoai }}.html">{{ $loai->TenLoai }}</a>
@endforeach
	
</div>
</div>					
</div>




<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="right-all-product">
<!-- PRODUCT-CATEGORY-HEADER START -->

<!-- PRODUCT-CATEGORY-HEADER END -->
<div class="product-category-title">
	<!-- PRODUCT-CATEGORY-TITLE START -->
	<h1>
		
	<!--	<span class="count-product">There are 13 products.</span>  số sp hiện có-->
	</h1>
	<!-- PRODUCT-CATEGORY-TITLE END -->
</div>

</div>
<!-- ALL GATEGORY-PRODUCT START -->
<div class="all-gategory-product">
<div class="row">
	<ul class="gategory-product">



		@foreach($ds_hoa as $hoa)
		<!-- SINGLE ITEM START -->
		<li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="single-product-item">
				<div class="product-image">
					<a href="single-product-{{ $hoa->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $hoa->Hinh }}" alt="product-image" style="max-width :458px; max-height :120px" /></a>
					<a href="single-product-{{ $hoa->MaHoa }}.html" class="new-mark-box">new</a>
					<div class="overlay-content">
						<ul>
							<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
							<li><a href="{{url('/')}}/mua-hang-product-{{ $hoa->MaHoa }}" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
							<li><a href="single-product-{{ $hoa->MaHoa }}.html" title="Quick view"><i class="fa fa-retweet"></i></a></li>

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
					<a href="single-product-{{ $hoa->MaHoa }}.html">{{ $hoa->TenHoa }}</a>
					<div class="price-box">
						<span class="price">{{ number_format($hoa->Gia,0,",",".") }}<sup>đ</sup></span>
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
{!! $ds_hoa->render() !!}
<!-- PRODUCT-SHOOTING-RESULT END -->
</div>
</div>
</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->

@stop