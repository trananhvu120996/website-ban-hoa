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
            <li><i class="fa fa-file-text-o"></i>Thêm khách hàng</li>
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
                              {!!Form::open(array('route'=>'post_them_khach_hang'))!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên khách hàng</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ten_khach_hang', null, array('required', 'class'=>'form-control', 'placeholder'=>'Tên khách hàng','id'=>'ten_khach_hang'))!!}<br>
                                      </div>
                                  </div> 
                                  
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('email', null, array('required', 'class'=>'form-control', 'placeholder'=>'Email','id'=>'email'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Địa chỉ</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('dia_chi', null, array('required', 'class'=>'form-control', 'placeholder'=>'Địa chỉ','id'=>'dia_chi'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Điện thoại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('dien_thoai', null, array('required', 'class'=>'form-control', 'placeholder'=>'Điện thoại','id'=>'dien_thoai'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Ghi chú</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ghi_chu', null, array('required', 'class'=>'form-control', 'placeholder'=>'Ghi chú','id'=>'ghi_chu'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Nam</label>
                                      <div class="col-sm-10">
                                        {!!Form::checkbox('phai', 1,true)!!}<br>
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