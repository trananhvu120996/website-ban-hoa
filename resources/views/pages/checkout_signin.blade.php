
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
							<span>Đăng nhập / Đăng ký</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Đăng nhập / Đăng ký</h2>
					</div>	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPING-CART-MENU START -->
						<div class="shoping-cart-menu">
							<ul class="step">
								<li class="step-todo first step-done">
									<span><a href="cart.html">01. Giỏ hàng</a></span>
								</li>
								<li class="step-current second">
									<span>02. Đăng nhập</span>
								</li>
								<li class="step-todo third">
									<span>03. Địa chỉ</span>
								</li>
								<li class="step-todo last" id="step_end">
									<span><em>04.</em> Thanh toán</span>
								</li>
							</ul>									
						</div>
						<!-- SHOPING-CART-MENU END -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- CREATE-NEW-ACCOUNT START -->
						<div class="create-new-account">
							<form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
								<h3 class="box-subheading">Tạo tài khoản</h3>
								<div class="form-content">
									<p>Nếu chưa có tài khoản xin vui lòng đăng ký tài khoản mới.</p>
									
									<div class="submit-button">
										<a href="checkout-regis.html" id="SubmitCreate" class="btn main-btn">
											<span>
												<i class="fa fa-user submit-icon"></i>
												Tạo tài khoản
											</span>											
										</a>
									</div>
								</div>
							</form>							
						</div>
						<!-- CREATE-NEW-ACCOUNT END -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- REGISTERED-ACCOUNT START -->
						@if($errors->all())

							<div class="error_messages">

							@foreach($errors->all() as $thong_bao_loi)

							<div > {{$thong_bao_loi}}</div>

							@endforeach

							</div>

							@endif
						<div class="primari-box registered-account">
							{!! Form::open(array("route"=>"post_checkout_login","files"=>true)) !!}
								<h3 class="box-subheading">Đã có tài khoản?</h3>
								<div class="form-content">
									<div class="form-group primary-form-group">
										<label for="loginemail">Email address</label>
										{!! Form::email("loginemail",null,array("class"=>"form-control","id"=>"loginemail",
                                        "placeholder"=>"Nhập email của bạn")) !!}
									</div>
									<div class="form-group primary-form-group">
										<label for="loginpassword">Password</label>
										{!! Form::password("loginpassword",array("class"=>"form-control","id"=>"loginpassword",
                                        "placeholder"=>"Nhập password của bạn")) !!}
									</div>
									<div class="forget-password">
										<p><a href="#">Forgot your password?</a></p>
									</div>
									<div class="submit-button">
										<input class="btn btn-primary" type="submit" value="Đăng nhập">
									</div>
								</div>
							{!! Form::close() !!} 							
						</div>
						<!-- REGISTERED-ACCOUNT END -->
					</div>				
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->

@stop
