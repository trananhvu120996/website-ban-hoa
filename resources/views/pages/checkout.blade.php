
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
<span><i class="fa fa-caret-right	"></i></span>
<span>Giỏ hàng của bạn</span>
</div>
<!-- BSTORE-BREADCRUMB END -->
</div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!-- SHOPPING-CART SUMMARY START -->
<h2 class="page-title">Giỏ hàng của bạn <span class="shop-pro-item">Giỏ hàng của bạn hiện có: {!! $count !!} sản phẩm</span></h2>
<!-- SHOPPING-CART SUMMARY END -->
</div>	

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!-- SHOPING-CART-MENU START -->
<div class="shoping-cart-menu">
<ul class="step">
<li class="step-todo first step-done">
	<span>01. Giỏ hàng</span>
</li>
<li class="step-todo second step-done">
	<span>02. Đăng nhập</span>
</li>
<li class="step-todo third step-done ">
	<span>03. Địa chỉ</span>
</li>
<li class="step-current last" id="step_end">
	<span>04. Thanh toán</span>
</li>
</ul>									
</div>
<!-- SHOPING-CART-MENU END -->
<!-- CART TABLE_BLOCK START -->
<div class="table-responsive">
<!-- TABLE START -->
<table class="table table-bordered" id="cart-summary">
<!-- TABLE HEADER START -->
<thead>
	<tr>
		<th class="cart-product">Hình ảnh</th>
		<th class="cart-description">Tên sản phẩm</th>
		<th class="cart_quantity text-center">Giá</th>
		<th class="cart-delete">Số lượng</th>
		<th class="cart-total text-center" colspan="2">Action</th>
		<th class="cart-total text-center">Thành tiền</th>
	</tr>
</thead>
<!-- TABLE HEADER END -->
<!-- TABLE BODY START -->
<form method="get" action=""> 
<input name="_token" type="hidden" value="{!! csrf_token() !!}"/>
@foreach($content as $item)
<input type="hidden" value="{{ $total=$total+ ($item->price*$item->qty) }}" />
<tbody>	
	<!-- SINGLE CART_ITEM START -->
	
	<tr>
		<td class="cart-product">
			<a href="#"><img alt="Blouse" src="{{url('/')}}/img/images/hoa/{!! $item->options->img !!}"></a>
		</td>
		<td class="cart-description" style="width:600px;">
			<p class="product-name"><a href="#">{!! $item->name !!}</a></p>
		</td>
		<td class="cart-unit">
			<ul class="price text-right">
				<li >{!! number_format($item->price,0,",",".") !!}<sup>Đ</sup></li>
			</ul>
		</td>
		<td>
			<div >
				<input type="number" class="qty" min="1" name="qty"  value="{!! $item->qty !!}" style="width:80px;" />
			</div>
		</td>
		<td class="cart-delete text-center">
				<a href="{{url('/')}}/xoa-hang-{!! $item->rowId !!}"><img src="{{url('/')}}/img/images/delete.png" style="max-width:40px; align='center'"></a>
		</td>
		<td class="cart-delete text-center">
				<a href="#"><img src="{{url('/')}}/img/images/update.jpg" class="updated" id="{!! $item->rowId !!}" style="max-width:40px; align='center'" /></a>
		</td>
		<td class="cart-total">
			<span >{!! number_format($item->price*$item->qty,0,",",".") !!}<sup>Đ</sup></span>
		</td>
	</tr>
	
	<!-- SINGLE CART_ITEM END -->
	
</tbody>
@endforeach
</form>
<!-- TABLE BODY END -->
<!-- TABLE FOOTER START -->
<tfoot>										
	<tr >
		<td colspan="3" rowspan="4"></td>
		<td colspan="3">Tổng tiền thanh toán : </td>
		<td style="color:red">{!! number_format($total,0,",",".") !!}<sup>Đ</sup></td>
	</tr>

</tfoot>		
<!-- TABLE FOOTER END -->									
</table>
<!-- TABLE END -->
</div>
<!-- CART TABLE_BLOCK END -->
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<!-- FOUR-PAYMENT-METHOD START -->
		<div class="four-payment-method">
			<!-- SINGLE-PAYMENT-METHOD START -->
			<div class="single-payment-method payment-method-one">
				<a href="thanh-toan">Thanh toán trực tiếp tại nơi giao hàng<i class="fa fa-chevron-right"></i></a>
			</div>
								
		</div>
		<!-- FOUR-PAYMENT-METHOD END -->
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<!-- RETURNE-CONTINUE-SHOP START -->
		<div class="returne-continue-shop">
			<a href="." class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua hàng</a>
		</div>	
		<!-- RETURNE-CONTINUE-SHOP END -->								
	</div>
</div>
</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->

@stop
