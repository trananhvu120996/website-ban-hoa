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
            <li><i class="fa fa-file-text-o"></i>Cập nhật hóa đơn</li>
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
                              {!!Form::open(array('route'=>'post_cap_nhat_hoa_don'))!!}
                                {!!Form::hidden('id',$hoa_don->ma_hoa_don)!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Mã khách hàng</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ma_khach_hang', $hoa_don->ma_khach_hang, array('required', 'class'=>'form-control', 'placeholder'=>'>Mã khách hàng','id'=>'ma_khach_hang'))!!}<br>
                                      </div>
                                  </div> 
                                  
                                   <div class="form-group">
                                    <label class="col-sm-2 control-label">Ngày đặt</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ngay_dat', $hoa_don->ngay_dat, array('required', 'class'=>'form-control', 'placeholder'=>'Ngày đặt','id'=>'ngay_dat'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tổng tiền</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('tong_tien', $hoa_don->tong_tien, array('required', 'class'=>'form-control', 'placeholder'=>'Tổng tiền','id'=>'datepicker'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tiền đặt cọc</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('tien_dat_coc', $hoa_don->tien_dat_coc, array('required', 'class'=>'form-control', 'placeholder'=>'Tiền đặt cọc','id'=>'tien_dat_coc'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Còn lại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('con_lai', $hoa_don->con_lai, array('required', 'class'=>'form-control', 'placeholder'=>'Còn lại','id'=>'con_lai'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Hình thức thanh toán</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('hinh_thuc_thanh_toan', $hoa_don->hinh_thuc_thanh_toan, array('required', 'class'=>'form-control', 'placeholder'=>'Hình thức thanh toán','id'=>'hinh_thuc_thanh_toan'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Ghi chú</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ghi_chu', $hoa_don->ghi_chu, array('required', 'class'=>'form-control', 'placeholder'=>'Hình thức thanh toán','id'=>'ghi_chu'))!!}<br>
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