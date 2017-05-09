@extends("admin.template")

@section("content")
<div>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{url("/")}}/ad">Home</a></li>
						<li><i class="fa fa-table"></i>User</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              

               

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Quản lý danh sách loại sản phẩm
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> Mã loại</th>
                                 <th> Tên loại</th>
                              </tr>
                              @foreach($ds_loai_san_pham as $loai)
                              <tr>
                                 <td>{!!  $loai->MaLoai !!}</td>
                                 <td><a href="cap-nhat-loai-san-pham/{{ $loai->MaLoai }}">{!! $loai->TenLoai !!}</a></td>
                                 <td>
                                  <div class="btn-group">
                                      
                                      <a class="btn btn-primary" href="{{url('/')}}/ad/cap-nhat-loai-san-pham/{{$loai->MaLoai}}"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="{{url('/')}}/ad/xoa-loai-san-pham/{{$loai->MaLoai}}" onclick="return kiem_tra_xoa()"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>   
                              @endforeach                           
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
</div>
@stop