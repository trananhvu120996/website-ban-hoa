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
							<span>Liên hệ</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title contant-page-title">Hãy liên hệ với chúng tôi qua biểu mẫu sau</h2>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						@if($errors->all())

							<div class="error_messages">

							@foreach($errors->all() as $thong_bao_loi)

							<div > {{$thong_bao_loi}}</div>

							@endforeach

							</div>

							@endif

						<!-- CONTACT-US-FORM START -->
						<div class="contact-us-form">
							<div class="contact-form-center">
								
								<!-- CONTACT-FORM START -->


								
									
								{!! Form::open(array("route"=>"post_contact","files"=>true)) !!}
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
												
											<div class="form-group primary-form-group">
												<label for="email">Email</label>
												{!! Form::email("email",null,array("class"=>"form-control","id"=>"email",
                                       			 "placeholder"=>"Nhập email của bạn")) !!}
											</div>
											<div class="form-group primary-form-group">
												<label for="tieu_de">Tiêu đề</label>
												{!! Form::text("tieu_de",null,array("class"=>"form-control","id"=>"tieu_de",
                                       			 "placeholder"=>"Nhập tiêu đề")) !!}
											</div>
											<br>													
											<input class="btn btn-primary" type="submit" value="Gửi liên hệ">
										</div>
										<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
											<div class="type-of-text">
												<div class="form-group primary-form-group">
													<label>Lời nhắn</label>
													<textarea class="contact-text" name="ContactMessage"></textarea>
												</div>													
											</div>
										</div>
									</div>
								{!! Form::close() !!}
								<!-- CONTACT-FORM END -->
							</div>
						</div>
						<!-- CONTACT-US-FORM END -->
					</div>
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->

@stop
