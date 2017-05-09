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
                              Quản lý danh sách User
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i>ID</th>
                                 <th><i class="icon_calendar"></i>Tên đăng nhập</th>
                                 <th><i class="icon_cogs"></i>Giới tính</th>
                                 <th><i class="icon_cogs"></i>Địa chỉ</th>
                                 <th><i class="icon_cogs"></i>email</th>
                                 <th><i class="icon_cogs"></i>Chứng minh nhân dân</th>
                                 <th><i class="icon_cogs"></i>Điện thoại</th>
                                 <th><i class="icon_cogs"></i>Quy định</th>
                              </tr>
                              @foreach($ds_user as $user)
                              <tr>
                                 <td>{!!  $user->id !!}</td>
                                 <td><a href="cap-nhat-user/{{ $user->id }}">{!! $user->username !!}</a></td>
                                 
                                 <td>{!! $user->gender !!}</td>
                                 <td>{!! $user->address !!}</td>
                                 <td>{!! $user->email !!}</td>
                                 <td>{!! $user->identitycard !!}</td>
                                 <td>{!! $user->mobiphone !!}</td>
                                 <td>{!! $user->role !!}</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="{{url('/')}}/ad/cap-nhat-user/{{$user->id}}"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-danger" href="{{url('/')}}/ad/xoa-user/{{$user->id}}" onclick="return kiem_tra_xoa()"><i class="icon_close_alt2"></i></a>
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