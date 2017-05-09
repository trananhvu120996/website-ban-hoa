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
                              Quản lý danh khách hàng
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> Mã khách hàng</th>
                                 <th> Tên khách hàng</th>
                                 <th> Phái</th>
                                 <th> Địa chỉ</th>
                                 <th> Điện thoại</th>
                                 <th> ghi chú</th>
                              </tr>
                              @foreach($ds_khach_hang as $khach_hang)
                              <tr>
                                 <td>{!!  $khach_hang->ma_khach_hang !!}</td>
                                 <td><a href="cap-nhat-khach-hang/{{ $khach_hang->ma_khach_hang }}">{!! $khach_hang->ten_khach_hang !!}</a></td>
                                 
                                 <td>{!! $khach_hang->phai !!}</td>
                                 <td>{!! $khach_hang->dia_chi !!}</td>
                                 <td>{!! $khach_hang->dien_thoai !!}</td>
                                 <td>{!! $khach_hang->ghi_chu !!}</td>
                                 
                                 <td>
                                  
                                      <a class="btn btn-primary" href="{{url('/')}}/ad/cap-nhat-khach-hang/{{$khach_hang->ma_khach_hang}}"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="{{url('/')}}/ad/xoa-khach-hang/{{$khach_hang->ma_khach_hang}}" onclick="return kiem_tra_xoa()"><i class="icon_close_alt2"></i></a>
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