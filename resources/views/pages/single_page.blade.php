@extends("templates")

@section("slider_home")
<div>
  
</div>
@stop

@section("content")
<div>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="{{url('/')}}/tintuc.html">Trang chủ</a></li>
              <li class="active">Du lịch</li>
            </ol>
            @foreach($thong_tin as $tt)
            <h1>{{ $tt->TieuDe }}</h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Quản trị</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Du lịch</a> </div>
            <div class="single_page_content"> <img class="img-center" src="{{url('/')}}/tintuc/{{ $tt->Hinh }}" alt="">
              <div><?php echo html_entity_decode($tt->Content)?></div>
            @endforeach
             
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="related_post">
              <h2>Tin tức liên quan <i class="fa fa-thumbs-o-up"></i></h2>
              <ul  id="ticker01" class="news_sticker">
             @foreach($tt_cung_loai as $tt)
                <li><a href="{{url("/")}}/tintuc/single-{{ $tt->idTin }}"><img src="{{url('/')}}/tintuc/{{ $tt->Hinh }}" alt="">{{ $tt->TieuDe }}</a></li>

              @endforeach
                             
                
               
              
              </ul>
            </div>


          </div>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Tin tức được xem nhiều</span></h2>
          <!--div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div-->
            <ul class="latest_postnav">
             @foreach($tin_noi_bat as $nb)
              <li>
                <div class="media"> <a href="{{url("/")}}/tintuc/single-{{$nb->idTin}}" class="media-left"> <img alt="" src="{{url('/')}}/tintuc/{{ $nb->Hinh }}"></a>
                  <div class="media-body"> <a href="{{url("/")}}/tintuc/single-{{$nb->idTin}}" class="catg_title">{{ $nb->TieuDe }}</a> </div>
                </div>
              </li>
             @endforeach
            </ul>
            <!--div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div-->
        </div>
        
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Thông tin sản phẩm</span></h2>
             <a href="../."><img src="{{url('/')}}/tintuc/logoshop.png"/></a>
            @foreach($san_pham_tieu_bieu as $sp)
            <ul>
                <a class="sideAdd" href="{{url('/')}}/single-product-{{ $sp->MaHoa }}.html"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt=""></a>            
                <li><a href="#" style="font-size: 15pt;">{{ $sp->TenHoa }}</a></li>
              </ul>
            @endforeach
             </div>
             
           
          </div>
          </div>

    </div>
  </section>
</div>
@stop