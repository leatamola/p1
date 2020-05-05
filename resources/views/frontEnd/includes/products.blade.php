
<section class="top-letest-product-section">
  <div class="container">
    <div class="section-title">
      <h2>SERVICIOS Y TIENDAS</h2>
    </div>
    <div class="row">
        @foreach($algunos_productos as $algun_producto)

        <div class="col-12" style="padding-bottom: 20px;">
          <div class="mx-auto" style="width: 18rem;">
            <a href="{{url('/product-detail',$algun_producto->id)}}">
              <img class="card-img-top" src="{{url('products/large/',$algun_producto->image)}}" alt="{{$algun_producto->title}}">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center"><a class="titleCard" href="{{url('/product-detail',$algun_producto->id)}}"> {{ $algun_producto->title }} </a></h5>

            </div>
          </div>
        </div>

        @endforeach
        <div class="col-12 text-center">
				<button class="site-btn sb-line sb-dark"><a id="buttonVerMas" href="{{ url('/all') }}">VER MÁS</a></button>
			</div>
    </div>
  </div>
</section>
