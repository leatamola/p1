
<section class="top-letest-product-section">
  <div class="container">
    <div class="section-title">
      <h2>DESTACADOS</h2>
    </div>
    <div class="product-slider owl-carousel">
      @foreach($products as $product)
        @if($product->category->status==1)

          <div class="product-item">
            <div class="pi-pic">
              <div class="tag-new">New</div>
              <img src="{{url('products/large/',$product->image)}}" alt="">
              <div class="pi-links">
                <a href="{{url('/product-detail',$product->id)}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
              </div>
            </div>
            <div class="pi-text">
              <h6>$ {{$product->price}}</h6>
              <h5><a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a></h5>
            </div>
          </div>

        @endif
      @endforeach
    </div>
  </div>
</section>
