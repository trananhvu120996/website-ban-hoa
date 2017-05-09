  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Hình sự</span></h2>
            <div class="single_post_content_left">
            @foreach($dn as $d)
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="{{url("/")}}/tintuc/single-{{ $d->idTin }}" class="featured_img"> <img alt="" src="{{url('/')}}/tintuc/{{ $d->Hinh }}" style="max-height:200px;"><span class="overlay"></span> </a>
                    <figcaption> <a href="{{url("/")}}/tintuc/single-{{$d->idTin}}">{{ $d->TieuDe }}</a> </figcaption>
                    <p>{{ $d->TomTat }}</p>
                  </figure>
                </li>
              </ul>
            @endforeach
            </div>
            <div class="single_post_content_right">
            
              <div class="latest_post">
                <h2><span>Tin tức được xem nhiều</span></h2>
                <!--div class="latest_post_container">
                  <div id="prev-button"><i class="fa fa-chevron-up"></i></div-->
                  <ul >
                   @foreach($doanh_nhan as $n)
                    <li style="margin:15px 0px;">
                      <div class="media"> <a href="{{url("/")}}/tintuc/single-{{$n->idTin}}" class="media-left"> <img alt="" src="{{url('/')}}/tintuc/{{ $n->Hinh }}"></a>
                        <div class="media-body"> <a href="{{url("/")}}/tintuc/single-{{$n->idTin}}" class="catg_title">{{ $n->TieuDe }}</a> </div>
                      </div>
                    </li>
                   @endforeach
                  </ul>
                  <!--div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                </div-->
              </div>
            
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Cuộc sống đó đây</span></h2>
                @foreach($tr_moi as $moi)
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="{{url("/")}}/tintuc/single-{{ $moi->idTin }}" class="featured_img"> <img alt="" src="{{url('/')}}/tintuc/{{ $moi->Hinh }}" style="max-height:300px;"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{url("/")}}/tintuc/single-{{ $moi->idTin }}">{{ $moi->TieuDe }}</a> </figcaption>
                      <p>{{ $moi->TomTat }}</p>
                    </figure>
                  </li>
                </ul>
                @endforeach
                
                <div class="latest_post">
                
                <!--div class="latest_post_container">
                  <div id="prev-button"><i class="fa fa-chevron-up"></i></div-->
                  <ul >
                   @foreach($thoi_trang as $tt)
                    <li style="margin:15px 0px;">
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
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Nhịp điệu trẻ</span></h2>
                @foreach($cn_moi as $cnm)
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="{{url("/")}}/tintuc/single-{{ $cnm->idTin }}" class="featured_img"> <img alt="" src="{{url('/')}}/tintuc/{{ $cnm->Hinh }}" style="max-height: 300px;"> <span class="overlay"></span> </a>
                      <figcaption> <a href="{{url("/")}}/tintuc/single-{{ $cnm->idTin }}">{{ $cnm->TieuDe }}</a> </figcaption>
                      <p>{{ $cnm->TomTat }}</p>
                    </figure>
                  </li>
                </ul>
              @endforeach
              
                <div class="latest_post">
                    <ul >
                     @foreach($cong_nghe as $cn)
                      <li style="margin:15px 0px;">
                        <div class="media"> <a href="{{url("/")}}/tintuc/single-{{$cn->idTin}}" class="media-left"> <img alt="" src="{{url('/')}}/tintuc/{{ $cn->Hinh }}"></a>
                          <div class="media-body"> <a href="{{url("/")}}/tintuc/single-{{$cn->idTin}}" class="catg_title">{{ $cn->TieuDe }}</a> </div>
                        </div>
                      </li>
                     @endforeach
                    </ul>
                </div>
              
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Ẩm thực</span></h2>
            <div class="single_post_content_left">
            @foreach($gt_moi as $gtm)
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="{{url("/")}}/tintuc/single-{{ $gtm->idTin }}"> <img src="{{url('/')}}/tintuc/{{ $gtm->Hinh }}" style="max-height: 300px;" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="{{url("/")}}/tintuc/single-{{ $gtm->idTin }}">{{ $gtm->TieuDe }}</a> </figcaption>
                    <p>{{ $gtm->TomTat }}</p>
                  </figure>
                </li>
              </ul>
            @endforeach
            </div>
            <div class="single_post_content_right">
            
              <div class="latest_post">
                    <ul >
                     @foreach($giai_tri as $gt)
                      <li style="margin:15px 0px;">
                        <div class="media"> <a href="{{url("/")}}/tintuc/single-{{$gt->idTin}}" class="media-left"> <img alt="" src="{{url('/')}}/tintuc/{{ $gt->Hinh }}"></a>
                          <div class="media-body"> <a href="{{url("/")}}/tintuc/single-{{$gt->idTin}}" class="catg_title">{{ $gt->TieuDe }}</a> </div>
                        </div>
                      </li>
                     @endforeach
                    </ul>
                </div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="latest_post">
            <h2><span><a href="news.html">Tin tức sản phẩm</a></span></h2>
              <ul >
               @foreach($tin_pho_bien as $pb)
                <li style="margin:15px 0px;">
                  <div class="media"> <a href="{{url('/')}}/single-news-{{ $pb->MaTT }}.html" class="media-left"> <img alt="" src="{{url('/')}}/tintuc/{{ $pb->Hinh }}"></a>
                    <div class="media-body"> <a href="{{url('/')}}/single-news-{{ $pb->MaTT }}.html" class="catg_title">{{ $pb->TenTT }}</a> </div>
                  </div>
                </li>
               @endforeach
              </ul>
            </div>
          
           
          
        </aside>
      </div>
    </div>
  </section>
