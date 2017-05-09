  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
        @foreach($du_lich as $dl)
          <div class="single_iteam"> <a href="{{url("/")}}/tintuc/single-{{ $dl->idTin }}"> <img src="{{url('/')}}/tintuc/{{ $dl->Hinh }}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="{{url("/")}}/tintuc/single-{{ $dl->idTin }}">{{ $dl->TieuDe }}</a></h2>
              <p>{{ $dl->TomTat }}</p>
            </div>
          </div>
          @endforeach
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
      </div>
    </div>
  </section>