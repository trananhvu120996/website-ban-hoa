  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Tin mới nhất</span>
          <ul id="ticker01" class="news_sticker">
          @foreach($tin_noi_bat as $tin)
          
            <li><a href="{{url("/")}}/tintuc/single-{{ $tin->idTin }}"><img src="{{url('/')}}/tintuc/{{ $tin->Hinh }}" alt="">{{ $tin->TieuDe }}</a></li>
          @endforeach
            
          </ul>
          <!--div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div-->
        </div>
      </div>
    </div>
  </section>
