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
            <li><i class="icon_document_alt"></i>Cập nhật</li>
            <li><i class="fa fa-file-text-o"></i>Cập nhật khách hàng</li>
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
                              {!!Form::open(array('route'=>'post_cap_nhat_khach_hang'))!!}
                                {!!Form::hidden('id',$khach_hang->ma_khach_hang)!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên khách hàng</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ten_khach_hang', $khach_hang->ten_khach_hang, array('required', 'class'=>'form-control', 'placeholder'=>'Tên khách hàng','id'=>'ten_khach_hang'))!!}<br>
                                      </div>
                                  </div> 
                                  
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('email', $khach_hang->email, array('required', 'class'=>'form-control', 'placeholder'=>'Email','id'=>'email'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Địa chỉ</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('dia_chi', $khach_hang->dia_chi, array('required', 'class'=>'form-control', 'placeholder'=>'Địa chỉ','id'=>'dia_chi'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Điện thoại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('dien_thoai', $khach_hang->dien_thoai, array('required', 'class'=>'form-control', 'placeholder'=>'Điện thoại','id'=>'dien_thoai'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Ghi chú</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ghi_chu', $khach_hang->ghi_chu, array('required', 'class'=>'form-control', 'placeholder'=>'Ghi chú','id'=>'ghi_chu'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Nam</label>
                                      <div class="col-sm-10">
                                        {!! Form::checkbox('phai', 1, $khach_hang->phai == 1 ? true : false) !!}
                                      </div>
                                  </div>
                                  {!!Form::submit('Cập nhật',array('class'=>'btn btn-primary'))!!}
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