<!-- Hero section -->
<section class="hero-section">
  <div class="hero-slider owl-carousel">
    <div class="hs-item set-bg" data-setbg="img/barracas/cuarentena.jpg">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 text-white">
            <span>DESTACADOS</span>
            <h2>Cuarentena</h2>
            <p>Conocé todas las tiendas/servicios que estan funcionando en Barracas</p>
            <a href="{{ url('/destacados') }}" class="site-btn sb-line">VER MÁS</a>
          </div>
        </div>
      </div>
    </div>
    @foreach($destacados as $destacado)
    <div class="hs-item set-bg" data-setbg="{{url('products/banner',$destacado->banner)}}">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-7 text-white">
            <span>DESTACADOS</span>
            <h2>{{ $destacado->p_name }}</h2>
            <p>{{ $destacado->short }} </p>
            <a href="{{url('/product-detail',$destacado->id)}}" class="site-btn sb-line">VER MÁS</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="container">
    <div class="slide-num-holder" id="snh-1"></div>
  </div>
</section>
<!-- Hero section end -->

<!-- Features section -->
<section class="features-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 p-0 feature">
        <div class="feature-inner">
          <div class="feature-icon">
            <img src="img/icons/1.png" alt="#">
          </div>
          <h2>Encontrá Rápido</h2>
        </div>
      </div>
      <div class="col-md-4 p-0 feature">
        <div class="feature-inner">
          <div class="feature-icon">
            <img src="img/icons/2.png" alt="#">
          </div>
          <h2>Lo mejor de Barracas</h2>
        </div>
      </div>
      <div class="col-md-4 p-0 feature">
        <div class="feature-inner">
          <div class="feature-icon">
            <img src="img/icons/3.png" alt="#">
          </div>
          <h2>Los mejores servicios</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Features section end -->
