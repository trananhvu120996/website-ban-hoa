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
            <li><i class="fa fa-file-text-o"></i>Thêm tin tức về hoa</li>
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
                          <script language="javascript" src="{{url('/')}}/public/ckeditor/ckeditor.js" type="text/javascript"></script>
                              {!!Form::open(array('route'=>'post_them_tin_tuc','files'=>true))!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên tin tức</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ten_tin_tuc', null, array('required', 'class'=>'form-control', 'placeholder'=>'Tên tin tức','id'=>'ten_tin_tuc'))!!}<br>
                                      </div>
                                  </div>   
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nội dung</label>
                                      <div class="col-sm-10">
                                        {!! Form::textarea('noi_dung', null,
                                        array('id'=>'noi_dung', 'placeholder'=>'Nội dung')) !!}
                                    <script type="text/javascript">CKEDITOR.replace( 'noi_dung', { customConfig: '{{url('/')}}/public/ckeditor/baiviet_config.js' } ); </script><br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Thời gian</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('thoi_gian', null, array('required', 'class'=>'form-control', 'placeholder'=>'Thời gian ','id'=>'datepicker'))!!}<br>
                                      </div>
                                  </div> 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Mã loại tin</label>
                                      <div class="col-sm-10">
                                      <select name="ma_loai_tin" id="seltin">
                                        @foreach($ma_loai_tin as $ma)
                                        <option value="{{$ma->MaLoaiTin}}">{{$ma->TenLoaiTin}}</option>
                                        @endforeach
                                      </select>
                                      </div>
                                  </div>
                                  <div class="form-group" >
                                      <label class="col-sm-2 control-label">Hinh</label>
                                      <div class="col-sm-10" style="padding-top:20px;" >
                                      {!! Form::file('hinh',['accept'=>'.png,.jpg,.gif']) !!}<br>
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