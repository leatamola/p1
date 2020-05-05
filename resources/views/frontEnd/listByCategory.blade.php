@extends('frontEnd.layouts.masterBarrios')
@section('title','BUSCATI - CATEGORÍAS')
@section('slider')
@endsection
@section('content')

<!-- Category section -->
<div class="page-top-info">
  <div class="container">
    <h1>Mostrar por categorías</h1>
    <div class="site-pagination">
      <a href="{{ url('/') }}">Home</a> /
      <a href="{{ url('/contacto') }}">Contacto</a>
    </div>
  </div>
</div>

<section class="category-section spad">

  <div class="container">
    <div class="row">

      <div class="col-lg-3 order-2 order-lg-1">
        <div class="filter-widget">
          <h2 class="fw-title">Categorias:</h2>
          <ul class="category-menu">
              <li><a href="{{ url('/all') }}">Mostrar Todos</a></li>
              <li><a href="{{ url('/destacados') }}">Funcionando en Cuarentena</a></li>
            @foreach ($categories as $category)
              <li><a href="{{ url('/cat',$category->id) }}">{{ $category->name }}</a></li>
            @endforeach

          </ul>
        </div>
      </div>

      <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
        <div class="row">
          @foreach ($list_product as $product)
          <div class="col-lg-3 col-sm-3">
            <div class="product-item">
              <div class="pi-pic">
                <img src="{{  url('products/small/',$product->image)  }}" alt="{{ $product->title }}">
              </div>
              <div class="pi-text">
                <p><a href="{{url('/product-detail',$product->id)}}">{{ $product->title }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{ $list_product->render()}}
      </div>

    </div>
  </div>
</section>
<!-- Category section end -->




  @include('frontEnd.includes.footerBanner')
@endsection
