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
                              Quản lý danh chủ đề
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> Mã chủ đề</th>
                                 <th> Tên chủ đề</th>
                                 
                              </tr>
                              @foreach($ds_chu_de as $chu_de)
                              <tr>
                                 <td>{!!  $chu_de->MaCD !!}</td>
                                 <td><a href="cap-nhat-chu-de/{{ $chu_de->MaCD }}">{!! $chu_de->TenCD !!}</a></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="{{url('/')}}/ad/cap-nhat-chu-de/{{ $chu_de->MaCD }}"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="{{url('/')}}/ad/xoa-chu-de/{{$chu_de->MaCD}}" onclick="return kiem_tra_xoa()"><i class="icon_close_alt2"></i></a>
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