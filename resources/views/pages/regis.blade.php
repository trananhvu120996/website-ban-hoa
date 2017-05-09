
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
							<span>Authentication</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Tạo tài khoản</h2>
					</div>	
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- PERSONAL-INFOMATION START -->
						<div class="personal-infomation">


							@if($errors->all())

							<div class="error_messages">

							@foreach($errors->all() as $thong_bao_loi)

							<div > {{$thong_bao_loi}}</div>

							@endforeach

							</div>

							@endif

							{!! Form::open(array("route"=>"post_regis","files"=>true)) !!}
								<h3 class="box-subheading">Thông tin cá nhân</h3>
								<div class="personal-info-content">
									<div class="form-group primary-form-group p-info-group">
										<label>Title</label>
										<span class="radio-box">
											<input id="radio1" type="radio" name="gioi_tinh" value="1" checked="checked">
											<label for="radio1">Mr.</label>
										</span>
										<span class="radio-box">
											<input id="radio2" type="radio" name="gioi_tinh" value="0">											
											<label for="radio2">Mrs.</label>
										</span>
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="ten_hien_thi">Tên hiển thị <sup>*</sup></label>
										{!! Form::text("ten_hien_thi",null,array("class"=>"form-control","id"=>"ten_hien_thi",
                                        "placeholder"=>"Nhập tên hiển thị của bạn")) !!}
									</div>
									
									<div class="form-group primary-form-group p-info-group">
										<label for="email">Email <sup>*</sup></label>
										{!! Form::email("email",null,array("class"=>"form-control","id"=>"email",
                                        "placeholder"=>"Nhập email của bạn")) !!}
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="password">Password <sup>*</sup></label>
										{!! Form::password("password",array("class"=>"form-control","id"=>"password",
                                        "placeholder"=>"Nhập password của bạn")) !!}
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="password_confirmation">Re Password <sup>*</sup></label>
										{!! Form::password("password_confirmation",array("class"=>"form-control","id"=>"password_confirmation",
                                        "placeholder"=>"Nhập lại password của bạn")) !!}
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="ngay_sinh">Ngày sinh <sup>*</sup></label>
										{!! Form::text("ngay_sinh",null,array("class"=>"form-control","id"=>"ngay_sinh",
                                        "placeholder"=>"Nhập ngày sinh của bạn")) !!}
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="dia_chi">Địa chỉ <sup>*</sup></label>
										{!! Form::text("dia_chi",null,array("class"=>"form-control","id"=>"dia_chi",
                                        "placeholder"=>"Nhập địa chỉ của bạn")) !!}
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="sdt">Số điện thoại <sup>*</sup></label>
										{!! Form::text("sdt",null,array("class"=>"form-control","id"=>"sdt",
                                        "placeholder"=>"Nhập số điện thoại của bạn")) !!}
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="ghi_chu">Ghi chú</label>
										{!! Form::text("ghi_chu",null,array("class"=>"form-control","id"=>"ghi_chu",
                                        "placeholder"=>"Nhập ghi chú của bạn")) !!}
									</div>
									
									
									<div class="submit-button p-info-submit-button">
										<input class="btn btn-primary" type="submit" value="Đăng ký">
										<span class="required-field"><sup>*</sup>Required field</span>
									</div>
								</div>
							{!! Form::close() !!} 						
						</div>
						<!-- PERSONAL-INFOMATION END -->
					</div>
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->

@stop