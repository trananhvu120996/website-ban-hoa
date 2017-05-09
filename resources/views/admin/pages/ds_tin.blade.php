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
                              Quản lý tin tức
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> Mã tin</th>
                                 <th> Tên tin tức</th>
                                 <th> Hình</th>
                                 <th> Số lượt xem</th>
                                
                              </tr>
                              @foreach($ds_tin_tuc as $tin_tuc)
                              <tr>
                                 <td>{!!  $tin_tuc->idTin !!}</td>
                                 <td><a href="cap-nhat-tin/{{ $tin_tuc->idTin }}">{!! $tin_tuc->TieuDe !!}</a></td>
                                 <td>
                                 <img src="{{url('/')}}/tintuc/{!! $tin_tuc->Hinh  !!}" style="max-width:100px; max-height:50px;" />
                                 </td>
                                 <td>{!! $tin_tuc->SoLanXem !!}</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                     
                                      <a class="btn btn-primary" href="{{url('/')}}/ad/cap-nhat-tin/{{$tin_tuc->idTin}}"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="{{url('/')}}/ad/xoa-tin/{{$tin_tuc->idTin}}" onclick="return kiem_tra_xoa()"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              @endforeach                              
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              {!! $ds_tin_tuc->render() !!}
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
</div>
@stop