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
            <li><i class="fa fa-table"></i>hoa_don</li>
          </ol>
        </div>
      </div>
              <!-- page start-->
                {!!Form::open(array('route'=>'post-sua-hoa-don'))!!}
                
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Quản lý danh sách hóa đơn
                          </header>
                         
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th>Mã hóa đơn</th>
                                 <th>Mã khách hàng</th>
                                 <th>Ngày đặt</th>
                                 <th>Tổng tiền</th>
                                 <th>Tình trạng</th>
                                 <th>Chi tiết</th>
                                
                              </tr>
                              @foreach($ds_hoa_don as $hoa_don)
                              <input type="hidden" name="ma_hd[]" value="{{ $hoa_don->ma_hoa_don }}" />
                              <tr>
                                 <td>{!!  $hoa_don->ma_hoa_don !!}</td>
                                 <td><a href="cap-nhat-hoa-don/{{ $hoa_don->ma_hoa_don }}">{!! $hoa_don->ma_khach_hang !!}</a></td>
                                 
                                 <td>{!! $hoa_don->ngay_dat !!}</td>
                                 <td>{!! number_format($hoa_don->tong_tien,0,",",".") !!}<sup>Đ</sup></td>
                                  
                                
                                     
                                 <td>
                                  <div class="btn-group">
                                   

                                    <select  name="tinh_trang[]" id="tinh_trang">
                                      <option value="0" <?php echo($hoa_don->tinh_trang==0)?"selected":"" ?>>Chưa thanh toán</option>
                                      <option value="1" <?php echo($hoa_don->tinh_trang==1)?"selected":"" ?>>Đã thanh toán</option>
                                    </select>

                                    
                                  </div>
                                  </td>
                                  <td><a class="btn btn-success" href="hien-thi-ct-{{ $hoa_don->ma_hoa_don }}"><i class="icon_check_alt2"></i></a></td>
                                  
                                  
                              </tr>
                              @endforeach                              
                           </tbody>
                        </table>

                        
                      </section>
                  </div>
              </div>
              <input type="submit" name="Cập nhật" value="Cập nhật hóa đơn" class="btn btn-primary"/>
              {!! Form::close() !!}  
            
            <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
</div>
@stop