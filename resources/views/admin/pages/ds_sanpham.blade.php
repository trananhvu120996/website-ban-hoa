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
						<li><i class="fa fa-table"></i>Sản phẩm</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Quản lý danh sách sản phẩm
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i></i> Mã sp</th>
                                 <th><i></i> Tên sản phẩm</th>
                                 <th><i></i> Hình</th>
                                 <th><i></i> Đơn giá</th>
                                 
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>


                              @foreach($ds_san_pham as $san_pham)
                              <tr>
                                 <td>{{  $san_pham->MaHoa }}</td>
                                 <td><a href="cap-nhat-san-pham/{{ $san_pham->MaHoa }}">{{ $san_pham->TenHoa }}</a></td>
                                 <td>
                                 <img src="{{url('/')}}/img/images/hoa/{{ $san_pham->Hinh  }}" style="max-width:100px; max-height:50px;" />
                                 </td>
                                 <td>{{ $san_pham->Gia }}</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                      
                                      <a class="btn btn-primary" href="{{url('/')}}/ad/cap-nhat-san-pham/{{$san_pham->MaHoa}}"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="{{url('/')}}/ad/xoa-san-pham/{{$san_pham->MaHoa}}" onclick="return kiem_tra_xoa()"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              {!! $ds_san_pham->render() !!}
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
</div>
<script>
    function kiem_tra_xoa(){
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?");
    }
</script>
@stop