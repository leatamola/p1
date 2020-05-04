<!-- Header section -->
<header class="header-section">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 text-center text-lg-left">
          <!-- logo -->
          <a href="{{ url('/') }}" class="site-logo">
            <img src="/img/logo.png" alt="">
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
              <i class="flaticon-profile"></i>
              <a href="{{ url('/contacto') }}">Anunciá con nosotros</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <nav class="main-navbar" id="myNavbar">
    <div class="container collapse navbar-collapse" id="mainNav">
      <ul class="main-menu navbar-nav ml-auto nav-fill">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/admin') }}">Admin</a></li>
        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
        <li><a href="{{ url('/all') }}">Categorias</a>
          <ul class="sub-menu w-100">
            <li><a href="{{ url('/all') }}">Mostrar Todos</a>
            <li><a href="{{ url('/destacados') }}">Funcionando en Cuarentena</a>

            @foreach ($categories as $category)
              <li><a href="{{url('/cat',$category->id)}}">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a href="{{ url('/about') }}">Quienes Somos</a></li>
      </ul>
    </div>
  </nav>
</header>
<!-- Header section end -->



<nav class="navbar navbar-light bg-light navbar-expand-lg" id="myNavbar">

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
 </button>


 <div class="collapse navbar-collapse" id="mainNav">
  <ul class="navbar-nav ml-auto nav-fill">


   <li class="nav-item px-4 dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
     <a class="dropdown-item" href="#">VER TODOS</a>
     <a class="dropdown-item" href="#">TRABAJANDO EN CUARENTENA</a>
     <div class="dropdown-divider"></div>
     <div class="d-md-flex align-items-start justify-content-start">
      <div>
       <div class="dropdown-header">Development</div>
       <a class="dropdown-item" href="#">Bespoke software</a>
       <a class="dropdown-item" href="#">Mobile apps</a>
       <a class="dropdown-item" href="#">Websites</a>
      </div>
      <div>
       <div class="dropdown-header">Professional Services</div>
       <a class="dropdown-item" href="#">Project rescue</a>
       <a class="dropdown-item" href="#">Source code recovery</a>
       <a class="dropdown-item" href="#">Application support &amp; maintenance</a>
      </div>
      <div>
       <div class="dropdown-header">Fixed Price Services</div>
       <a class="dropdown-item" href="#">Add cookie consent</a>
       <a class="dropdown-item" href="#">Add captcha</a>
       <a class="dropdown-item" href="#">Add core data</a>
       <a class="dropdown-item" href="#">Custom error pages</a>
       <a class="dropdown-item" href="#">Contact form creation</a>
       <a class="dropdown-item" href="#">Automated backups</a>
       <a class="dropdown-item" href="#">Image to HTML</a>
      </div>
     </div>
    </div>
   </li>

  </ul>
 </div>
</nav>
