@extends("admin.template")

@section("content")
<div>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{url("/")}}/ad">Home</a></li>
            <li><i class="icon_document_alt"></i>Cập nhật</li>
            <li><i class="fa fa-file-text-o"></i>Cập nhật tin tức</li>
          </ol>
        </div>
      </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            
                          </header>
                          <div class="panel-body">
                              {!!Form::open(array('route'=>'post_cap_nhat_tin','files'=>true))!!}
                                {!!Form::hidden('id',$tin_tuc->idTin)!!}
                                <script language="javascript" src="{{url('/')}}/public/ckeditor/ckeditor.js" type="text/javascript"></script>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tiêu Đề</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('tieu_de', $tin_tuc->TieuDe, array('required', 'class'=>'form-control', 'placeholder'=>'Tiêu đề','id'=>'tieu_de'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tóm tắt</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('tom_tat', $tin_tuc->TomTat, array('required', 'class'=>'form-control', 'placeholder'=>'Tóm tắt','id'=>'tom_tat'))!!}<br>
                                      </div>
                                  </div>    
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nội dung</label>
                                      <div class="col-sm-10">
                                        {!! Form::textarea('noi_dung', $tin_tuc->Content,
                                        array('id'=>'noi_dung', 'placeholder'=>'Nội dung')) !!}
                                    <script type="text/javascript">CKEDITOR.replace( 'noi_dung', { customConfig: '{{url('/')}}/public/ckeditor/baiviet_config.js' } ); </script><br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Thể loại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ma_the_loai', $tin_tuc->idTL, array('required', 'class'=>'form-control', 'placeholder'=>'Thể loại','id'=>'ma_the_loai'))!!}<br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Loại tin</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ma_loai_tin', $tin_tuc->idLT, array('required', 'class'=>'form-control', 'placeholder'=>'Loại tin','id'=>'ma_loai_tin'))!!}<br>
                                      </div>
                                  </div>  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Thời gian</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('thoi_gian', $tin_tuc->Ngay, array('required', 'class'=>'form-control', 'placeholder'=>'Thời gian ','id'=>'datepicker'))!!}<br>
                                      </div>
                                  </div> 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Hinh</label>
                                      <div class="col-sm-10">
                                      {!! Form::file('hinh',['accept'=>'.png,.jpg,.gif']) !!}<br>
                                        {!! Form::hidden('hinh',$tin_tuc->Hinh) !!}<br>
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