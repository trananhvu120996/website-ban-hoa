@extends("templates")

@section("slider_home")
<div>
    <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
        @foreach($thong_tin as $tt)
          <div class="single_iteam"> <a href="{{url("/")}}/tintuc/single-{{ $tt->idTin }}"> <img src="{{url('/')}}/tintuc/{{ $tt->Hinh }}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{url("/")}}/tintuc/single-{{ $tt->idTin }}">{{ $tt->TieuDe }}</a></h2>
              <p>{{ $tt->TomTat }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Tin tức cùng loại</span></h2>
          <!--div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div-->
            <ul class="latest_postnav">
             @foreach($thong_tin as $tt)
              <li>
                <div class="media"> <a href="{{url("/")}}/tintuc/single-{{$tt->idTin}}" class="media-left"> <img alt="" src="{{url('/')}}/tintuc/{{ $tt->Hinh }}"></a>
                  <div class="media-body"> <a href="{{url("/")}}/tintuc/single-{{$tt->idTin}}" class="catg_title">{{ $tt->TieuDe }}</a> </div>
                </div>
              </li>
             @endforeach
            </ul>
            <!--div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div-->
        </div>
      </div>

      <div class="single_post_content_left">
        @foreach($chi_tiet as $d)
          <ul class="business_catgnav  wow fadeInDown">
            <li>
            <div>
            <div style="float: left;"> <a href="{{url("/")}}/tintuc/single-{{ $d->idTin }}" class="featured_img"> <img alt="" src="{{url('/')}}/tintuc/{{ $d->Hinh }}" style="max-height:200px; max-width: 200px;"><span class="overlay"></span> </a></div>
                <div style=" font-weight: bold; font-size: 20pt; padding-left: 220px;"> <a href="{{url("/")}}/tintuc/single-{{$d->idTin}}">{{ $d->TieuDe }}</a> </div>
                <p style="font-size: 16pt;">{{ $d->TomTat }}</p>
              
              </div>
            </li>
          </ul>
        @endforeach
       </div>
       <div class="single_post_content_left" style=" padding-left: 100px; padding-right: 100px;">
        <div class="single_sidebar wow fadeInDown" style="max-width: 500px;">
            <h2><span>Thông tin sản phẩm</span></h2>
             <a href="../."><img src="{{url('/')}}/tintuc/logoshop.png"/></a>
            @foreach($san_pham_tieu_bieu as $sp)
            <ul>
                <a class="sideAdd" href="#"><img src="{{url('/')}}/img/images/hoa/{{ $sp->Hinh }}" alt=""></a>            
                <li><a href="#" style="font-size: 15pt;">{{ $sp->TenHoa }}</a></li>
              </ul>
            @endforeach
         </div>
       </div>
    </div>
  </section>
  {!! $chi_tiet->render() !!}
</div>
@stop

@section("content")
<div>
  
</div>
@stop