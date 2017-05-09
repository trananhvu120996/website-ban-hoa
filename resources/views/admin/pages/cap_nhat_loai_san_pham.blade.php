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
            <li><i class="fa fa-file-text-o"></i>Cập nhật loại sản phẩm</li>
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
                              {!!Form::open(array('route'=>'post_cap_nhat_loai_san_pham'))!!}
                                {!!Form::hidden('id',$loai_san_pham->MaLoai)!!}
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên loại</label>
                                      <div class="col-sm-10">
                                        {!!Form::text('ten_loai', $loai_san_pham->TenLoai, array('required', 'class'=>'form-control', 'placeholder'=>'Tên loại','id'=>'ten_loai'))!!}<br>
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