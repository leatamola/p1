<!-- Header section -->
<header class="header-section">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 text-center text-lg-left">
          <!-- logo -->
          <a href="{{ url('/') }}" class="site-logo">
            <img id="logoPrincipal" src="/img/logo.png" alt="Buscati Barracas Logo">
          </a>
        </div>
        <div class="col-xl-8 col-lg-8">
          <form action="{{ url('search') }}"method="GET" class="header-search-form">
            <input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Buscar en Barracas ....">
            <button><i class="flaticon-search"></i></button>
          </form>
        </div>
        <div class="col-xl-2 col-lg-2">
          <div class="user-panel">
            <div class="up-item">

              <a id="anunciaCon" href="{{ url('/contacto') }}">
                <i class="flaticon-profile"></i>Anunciá con nosotros</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <nav  class="navbar .d-sm-none navbar-expand-lg">
    <div class="container">
      <ul class="main-menu">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li id="catDesktop"><a href="{{ url('/all') }}">Categorías</a></li>
        <li><a href="{{ url('/about') }}">Sobre Nosotros</a></li>
        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
      </ul>
      <div id="navbarContent" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <!-- Megamenu-->
          <li class="nav-item dropdown megamenu"><a id="megamneu" href="" data-toggle="dropdown"   class="dropdown-toggle ">Categorías</a>
            <div aria-labelledby="megamneu" class="dropdown-menu border-0 p-0 m-0">
              <div class="container">
                <div class="row bg-white rounded-0 m-0 shadow-sm">
                  <div class="col-lg-12 col-xl-12">
                    <div class="pt-4">

                      <div class="row">

                        <div class="col-lg-3 mb-3">

                          <ul class="list-unstyled">
                              <li class="nav-item"><a href="{{url('/all')}}" class="nav-link text-small pb-0">Ver todas</a></li><hr class="menuHr">
                            @foreach ($categories->slice(0, 9) as $category)
                              <li class="nav-item"><a href="{{url('/cat',$category->id)}}" class="nav-link text-small pb-0">{{ $category->name }}</a></li><hr class="menuHr">
                            @endforeach

                          </ul>
                        </div>
                        <div class="col-lg-3 mb-3">
                          <ul class="list-unstyled">
                            @foreach ($categories->slice(10, 10) as $category)
                              <li class="nav-item"><a href="{{url('/cat',$category->id)}}" class="nav-link text-small pb-0">{{ $category->name }}</a></li><hr class="menuHr">
                            @endforeach

                          </ul>
                        </div>
                        <div class="col-lg-3 mb-3">
                          <ul class="list-unstyled">
                            @foreach ($categories->slice(20, 10) as $category)
                              <li class="nav-item"><a href="{{url('/cat',$category->id)}}" class="nav-link text-small pb-0">{{ $category->name }}</a></li><hr class="menuHr">
                            @endforeach

                          </ul>
                        </div>
                        <div class="col-lg-3 mb-3">
                          <ul class="list-unstyled">
                            @foreach ($categories->slice(30, 10) as $category)
                              <li class="nav-item"><a href="{{url('/cat',$category->id)}}" class="nav-link text-small pb-0">{{ $category->name }}</a></li><hr class="menuHr">
                            @endforeach

                          </ul>
                        </div>
                        <div class="col-lg-3 mb-3">
                          <ul class="list-unstyled">
                            @foreach ($categories->slice(40, 10) as $category)
                              <li class="nav-item"><a href="{{url('/cat',$category->id)}}" class="nav-link text-small pb-0">{{ $category->name }}</a></li><hr class="menuHr">
                            @endforeach

                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <nav id="mobileNav" class="main-navbar">
    <div class="container">

    </div>
  </nav>





<!-- End -->
</header>
<!-- Header section end -->
