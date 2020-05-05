
<section class="destacados-product-section">
  <div class="container">
    <div class="section-title">
      <h2>FUNCIONANDO EN CUARENTENA</h2>
    </div>
    <div class="product-slider owl-carousel">
      @foreach($destacados as $destacado)

      <div class="product-item">
        <div class="mx-auto" style="width: 18rem;">
          <a href="{{url('/product-detail',$destacado->id)}}">
            <img class="card-img-top" src="{{url('products/large/',$destacado->image)}}" alt="{{$destacado->title}}">
          </a>
          <!-- <div class="pi-links">
            <a href="{{url('/product-detail',$destacado->id)}}" class="add-card"><i class="fas fa-eye"></i><span>Ver Más</span></a>
          </div> -->
          <div class="card-body" style="height:150px;">
            <h5 class="card-title text-center"><a class="titleCard" href="{{url('/product-detail',$destacado->id)}}"> {{ $destacado->title }} </a></h5>
            <p class="card-text" style="text-align: justify;">{{ $destacado->short }}</p>
          </div>
        </div>
      </div>

      @endforeach
    </div>
  </div>
</section>
