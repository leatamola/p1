@extends('frontEnd.layouts.masterBarrios')
@section('title','List Products')
@section('slider')
@endsection
@section('content')

<!-- Category section -->
<section class="category-section spad">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 order-2 order-lg-1">
        <div class="filter-widget">
          <h2 class="fw-title">Categories</h2>
          <h3 class="fw-title">Resultados for {{ request()->input('query') }}</h3>
          <ul class="category-menu">
            @foreach ($categories as $category)
              <li><a href="#">{{ $category->name }}</a></li>
            @endforeach


          </ul>
        </div>
      </div>


      <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
        <div class="row">

          @foreach ($products as $product)
            <div class="col-lg-4 col-sm-6">
              <div class="product-item">
                <div class="pi-pic">
                  <img src="./img/product/4.jpg" alt="">
                  <div class="pi-links">
                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                  </div>
                </div>
                <div class="pi-text">
                  <h6>$35,00</h6>
                  <p>{{$product->title}}</p>
                </div>
              </div>
            </div>
          @endforeach

          <div class="text-center w-100 pt-3">
            {{ $products->links() }}
          </div>
        </div>
      </div>



    </div>
  </div>
</section>
<!-- Category section end -->




  @include('frontEnd.includes.footerBanner')
@endsection
