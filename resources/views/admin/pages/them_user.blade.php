@extends("admin.template")

@section("content")
<div>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{url("/")}}/ad">Home</a></li>
            <li><i class="icon_document_alt"></i>Thêm</li>
            <li><i class="fa fa-file-text-o"></i>Thêm user</li>
          </ol>
        </div>
      </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Form Elements
                          </header>
                          <div class="panel-body">
                              {!!Form::open(array('route'=>'post_them_user'))!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên đăng nhập</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ten_dang_nhap', null, array('required', 'class'=>'form-control', 'placeholder'=>'Tên đăng nhập','id'=>'ten_dang_nhap'))!!}<br>
                                      </div>
                                  </div>   
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Mật khẩu</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('mat_khau', null, array('required', 'class'=>'form-control', 'placeholder'=>'Mật khẩu','id'=>'mat_khau'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Tên đầy đủ</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('fullname', null, array('required', 'class'=>'form-control', 'placeholder'=>'Tên đầy đủ ','id'=>'fullname'))!!}<br>
                                      </div>
                                  </div> 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Ngày sinh</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ngay_sinh', null, array('required', 'class'=>'form-control', 'placeholder'=>'Ngày sinh','id'=>'ngay_sinh'))!!}<br>
                                        </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Địa chỉ</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('dia_chi', null, array('required', 'class'=>'form-control', 'placeholder'=>'Địa chỉ','id'=>'dia_chi'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'email','id'=>'dia_chi'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Chứng minh nhân dân</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('cmnd', null, array('required', 'class'=>'form-control', 'placeholder'=>'Chứng minh nhân dân','id'=>'cmnd'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Điện thoại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('sdt', null, array('required', 'class'=>'form-control', 'placeholder'=>'Điện thoại','id'=>'sdt'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Quyền hạn</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('quyen_han', null, array('required', 'class'=>'form-control', 'placeholder'=>'Quyền hạn','id'=>'quyen_han'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nam</label>
                                      <div class="col-sm-10">
                                        {!!Form::checkbox('gioi_tinh', 1, true)!!}<br>
                                        </div>
                                  </div>
                                  {!!Form::submit('Thêm',array('class'=>'btn btn-primary'))!!}
                              {!!Form::close()!!}
                          </div>
                      </section>
                      
                  </div>
              </div>
                           <!-- page end-->
          </section>
      </section>
      <!--main content end-->

</div>
@stop