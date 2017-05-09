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
            <li><i class="fa fa-home"></i><a href="{{url('/')}}/ad">Home</a></li>
            <li><i class="icon_document_alt"></i>Thêm</li>
            <li><i class="fa fa-file-text-o"></i>Thêm sản phẩm</li>
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
                              {!!Form::open(array('route'=>'post_cap_nhat_san_pham','files'=>true))!!}
                               {!!Form::hidden('id',$thong_tin_san_pham->MaHoa)!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên sản phẩm</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ten_san_pham', $thong_tin_san_pham->TenHoa, array('required', 'class'=>'form-control', 'id'=>'ten_san_pham'))!!}<br>
                                      </div>
                                  </div>   
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Giá</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('gia',  $thong_tin_san_pham->Gia, array('required', 'class'=>'form-control', 'placeholder'=>'Giá thành','id'=>'gia'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Thành phần</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('thanh_phan',$thong_tin_san_pham->ThanhPhan, array('required', 'class'=>'form-control', 'placeholder'=>'Thành phần','id'=>'thanh_phan'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nội dung</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('noi_dung',$thong_tin_san_pham->NoiDung, array('required', 'class'=>'form-control', 'placeholder'=>'Nội dung','id'=>'noi_dung'))!!}<br>
                                        </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Mã loại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ma_loai',  $thong_tin_san_pham->MaLoai, array('required', 'class'=>'form-control', 'placeholder'=>'Mã loại','id'=>'ma_loai'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Thời gian</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('thoi_gian',  $thong_tin_san_pham->ThoiGian, array('required', 'class'=>'form-control', 'placeholder'=>'Thời gian','id'=>'datepicker'))!!}<br>
                                        </div>
                                  </div>
                                 <div class="form-group">
                                      <label class="col-sm-2 control-label">Khuyến mãi</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('khuyen_mai',  $thong_tin_san_pham->KhuyenMai, array('required', 'class'=>'form-control', 'placeholder'=>'Khuyến mãi','id'=>'khuyen_mai'))!!}<br>
                                        </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Hinh</label>
                                      <div class="col-sm-10">
                                      {!! Form::file('hinh',['accept'=>'.png,.jpg,.gif']) !!}<br>
                                        {!! Form::hidden('hinh',$thong_tin_san_pham->Hinh) !!}<br>
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