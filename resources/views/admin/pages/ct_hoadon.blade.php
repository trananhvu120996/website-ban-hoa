
@extends("admin.template")
@section("content")
<div>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          
		  <div class="row">

				<div class="col-lg-12">
                    <div class="print">
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{url("/")}}/ad">Home</a></li>
						<li><i class="fa fa-table"></i>Chi tiết hóa đơn</li>
					</ol>
                    </div>
                    </div>
			</div>
            
              <!-- page start-->
              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">                          
                              @foreach($tt_kh as $tt)
                                <div style="color:blue">Hóa đơn của khách hàng : {{ $tt->ten_khach_hang  }}</div>
                                <div style="color:blue">Địa chỉ Email : {{ $tt->email  }}</div>
                                <div style="color:blue">Địa chỉ nhận hàng : {{ $tt->dia_chi  }}</div>
                                <div style="color:blue">Số điện thoại : {{ $tt->dien_thoai  }}</div>
                              @endforeach
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>  
                                 <th><i></i> Hình</th>
                                 <th><i></i> Tên hoa</th>
                                 <th><i></i> Số lượng</th>
                                 <th><i></i> Đơn giá</th>
                                 <th><i></i> Thành tiền</th>      
                              </tr>
                              @foreach($tt_hd as $hd)
                              <tr>
                                <input type="hidden" value="{{ $tong_tien=$tong_tien+ ($hd->thanh_tien) }}" /> 
                                 <td>
                                 <img src="{{url('/')}}/img/images/hoa/{{ $hd->Hinh  }}" style="max-width:100px; max-height:50px;" />
                                 </td>
                                 <td>{{  $hd->TenHoa }}</td>
                                 <td>{{  $hd->so_luong }}</td>
                                 <td>{{ number_format($hd->don_gia,0,",",".") }}<sup>Đ</sup></td>
                                 <td>{{ number_format($hd->thanh_tien,0,",",".") }}<sup>Đ</sup></td> 
                              </tr>
                              @endforeach
                           </tbody>
                           <tr >
                              <td colspan="5" style="color:red">Tổng số tiền : {!! number_format($tong_tien,0,",",".") !!}<sup>Đ</sup></td>
                              </tr>
                        </table>
                      </section>
                  </div>
              </div>
              <div class="print">
              <input class="button print btn btn-primary" type="button" value="In đơn hàng" name="btnIn" onclick="window.print()"  />
              <div class="print">
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
</div>

@stop
