
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
							<span>Địa chỉ</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Địa chỉ</h2>
					</div>	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPING-CART-MENU START -->
						<div class="shoping-cart-menu">
							<ul class="step">
								<li class="step-todo first step-done">
									<span><a href="cart.html">01. Giỏ hàng</a></span>
								</li>
								<li class="step-todo second step-done">
									<span><a href="checkout-signin.html">02. Đăng nhập</a></span>
								</li>
								<li class="step-current third">
									<span>03. Địa chỉ</span>
								</li>
								<li class="step-todo last" id="step_end">
									<span>04. Thanh toán</span>
								</li>
							</ul>									
						</div>
						<!-- SHOPING-CART-MENU END -->
					</div>
					<!-- ADDRESS AREA START --> 
					@foreach($thong_tin_kh as $tt)
					<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
							
						<div class="form-group primary-form-group p-info-group chose-address">
							<label class="cheker">
								<input type="checkbox" name="checkbox">
								<span></span>
							</label>
							<a href="#" style="color:red">
							Sử dụng địa chỉ làm địa chỉ thanh toán.</a>
						</div>							
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="first_item primari-box">
							<!-- DELIVERY ADDRESS START -->
							<ul class="address">
								<li>
									<h3 class="page-subheading box-subheading">
										
									ĐỊA CHỈ GIAO HÀNG CỦA BẠN : {{ $tt->ten_khach_hang }}
									</h3>
								</li>
								<li><span class="address_name">Họ và tên : {{ $tt->ten_khach_hang }}</span></li>
								<li><span class="address_address1">Email : {{ $tt->email }}</span></li>
								<li><span class="address_address2">Địa chỉ : {{ $tt->dia_chi }}</span></li>
								<li><span class="">Điện thoại : {{ $tt->dien_thoai }}</span></li>
								<li><span class="">Ghi chú : {{ $tt->ghi_chu }}</span></li>
													
							</ul>	
							<!-- DELIVERY ADDRESS END -->
						</div>						
					</div>
					
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						@endforeach
						<!-- RETURNE-CONTINUE-SHOP START -->
						<div class="returne-continue-shop ship-address">
							<a href="." class="continueshoping"><i class="fa fa-chevron-left"></i>Tiếp tục mua hàng</a>
							<a href="checkout.html" class="procedtocheckout">Tiếp tục<i class="fa fa-chevron-right"></i></a>
						</div>	
						<!-- RETURNE-CONTINUE-SHOP END -->		
					</div>					
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->

@stop