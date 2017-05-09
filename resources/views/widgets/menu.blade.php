<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li><a href="{{url('/')}}/tintuc.html">Trang chủ</a></li>
        </ul>
      @foreach($ds_loai as $ds)
        <ul class="nav navbar-nav main_nav">
          <li><a href="{{url("/")}}/tintuc/loai-{{ $ds->idTL }}">{{ $ds->TenTL }}</a></li>
        </ul>
      @endforeach
      
        <!--ul class="nav navbar-nav main_nav">
          <li><a href="" class="menu-item-heading">Xem danh mục</a></li>
          @foreach($theloai as $tl)
          <ul>
          <li><a href="">{{ $tl->Ten }}</a></li>
          @endforeach
          </ul>
        </ul-->
     
      </div>
    </nav>
  </section>