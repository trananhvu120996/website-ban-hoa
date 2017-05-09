
@extends("template.template")
@section("content")

<!-- MAIN-CONTENT-SECTION START -->
@foreach($thong_tin_sp as $tt)
<section class="main-content-section">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!-- BSTORE-BREADCRUMB START -->
<div class="bstore-breadcrumb">
	<a href=".">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
	<span> {{ $tt->TenHoa }} </span>
</div>
<!-- BSTORE-BREADCRUMB END -->
</div>
</div>				
<div class="row">
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<!-- SINGLE-PRODUCT-DESCRIPTION START -->
<div class="row">
	<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
		<div class="single-product-view">
				<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="thumbnail_1">
					<div class="single-product-image">
						<img src="{{url('/')}}/img/images/hoa/{{ $tt->Hinh }}" alt="single-product-image" />
						<a class="new-mark-box" href="#">new</a>
						<a class="fancybox" href="{{url('/')}}/img/images/hoa/{{ $tt->Hinh }}" data-fancybox-group="gallery"><span class="btn large-btn">View larger <i class="fa fa-search-plus"></i></span></a>
					</div>	
				</div>			
			</div>										
		</div>
		
	</div>
	<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
		<div class="single-product-descirption">
			<h2>{{ $tt->TenHoa }}</h2>
			<div class="single-product-social-share">
				<ul>
					<li>
						<div class="fb-like" data-href="http://localhost:81/web_bh2/single-product-17.html" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" width:"200px;" data-share="true"></div>
					</li>
				</ul>
			</div>
			<div class="single-product-review-box">
				<div class="rating-box">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-half-empty"></i>
				</div>
				<div class="read-reviews">
					<a href="#">Read reviews (1)</a>
				</div>
				<div class="write-review">
					<a href="#">Write a review</a>
				</div>		
			</div>
			<div class="single-product-condition">
				<p>Tình trạng : <span>Sản phẩm mới</span></p>
			</div>
			<div class="single-product-price">
				<h2>{{ number_format($tt->Gia,0,",",".") }}<sup>đ</sup></h2>
			</div>
			<div class="single-product-desc">
				<p>{{ $tt->ThanhPhan }}</p>
			</div>

		<div class="single-product-add-cart">
				<a href="{{url('/')}}/mua-hang-single-{{$tt->MaHoa}}" class="btn btn-primary" title="Add to cart" >Mua ngay</a>
			</div>

		</div>
		
	</div>
</div>


<!-- SINGLE-PRODUCT-DESCRIPTION END -->
<!-- SINGLE-PRODUCT INFO TAB START -->
<div class="row">
	<div class="col-sm-12">
		<div class="product-more-info-tab">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs more-info-tab">
				<li class="active"><a href="#moreinfo" data-toggle="tab">Thông tin</a></li>
				<li><a href="#datasheet" data-toggle="tab">Bình luận</a></li>
			</ul>
				<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="moreinfo">
					<div class="tab-description">
						<p>{{ $tt->NoiDung }}</p>
					</div>
				</div>

				<div class="tab-pane" id="datasheet">
					<div class="agile-news-comments">
							<div class="agile-news-comments-info">
								<h4>Bình luận</h4>
								<div class="fb-comments" data-href="{{$get_url}}" data-width="100%" data-numposts="5"></div>
							</div>
						</div>
			</div>


			</div>									
		</div>
	</div>
</div>
<!-- SINGLE-PRODUCT INFO TAB END -->
<!-- RELATED-PRODUCTS-AREA START -->
<div class="row">
	<div class="col-sm-12">
		<div class="left-title-area">
			<h2 class="left-title">Sản phẩm cùng loại</h2>
		</div>	
	</div>
	<div class="related-product-area featured-products-area">
		<div class="col-sm-12">
			<div class=" row">
				<!-- RELATED-CAROUSEL START -->
				<div class="related-product">
					<!-- SINGLE-PRODUCT-ITEM START -->
					@foreach($sp_cung_loai as $s)
					<div class="item">
						<div class="single-product-item">
							<div class="product-image">
								<a href="single-product-{{ $s->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $s->Hinh }}" alt="product-image" style="max-height: 130px;" /></a>
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
								<a href="single-product-{{ $s->MaHoa }}.html">{{ $s->TenHoa }}</a>
								<div class="price-box">
									<span class="price">{{ $s->Gia }}<sup>Đ</sup></span>
								</div>
							</div>
						</div>							
					</div>
					@endforeach
					<!-- SINGLE-PRODUCT-ITEM END -->
					

												
				</div>
				<!-- RELATED-CAROUSEL END -->
			</div>	
		</div>
	</div>	
</div>
<!-- RELATED-PRODUCTS-AREA END -->
</div>
<!-- RIGHT SIDE BAR START -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<!-- SINGLE SIDE BAR START -->
<div class="single-product-right-sidebar">
	<h2 class="left-title">Sản phẩm mới</h2>
	<ul>
		@foreach($sp_moi as $sp)
		<li>
			<a href="single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt="" style="max-height: 80px; max-width:80px;" /></a>
			<div class="r-sidebar-pro-content">
				<h5><a href="single-product-{{ $sp->MaHoa }}.html">{{ $sp->TenHoa }}</a></h5>
				<p>{{ $sp->ThanhPhan }}</p>
			</div>
		</li>
		@endforeach
	</ul>
</div>	
<!-- SINGLE SIDE BAR END -->
<!-- SINGLE SIDE BAR START -->
<div class="single-product-right-sidebar clearfix">
	<h2 class="left-title">Tags </h2>
	<div class="category-tag">
@foreach($ds_loai as $loai)
	<a href="search-product-{{ $loai->MaLoai }}.html">{{ $loai->TenLoai }}</a>
@endforeach
	
</div>					
</div>	
<!-- SINGLE SIDE BAR END -->
<!-- SINGLE SIDE BAR START -->						

</div>
<!-- SINGLE SIDE BAR END -->				
</div>
</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->
@endforeach

@stop