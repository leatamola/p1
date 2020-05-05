<!-- Product filter section -->
<section id="categoriesHome" class="product-filter-section">
  <div class="container">
    <div class="section-title">
      <h2>CATEGORÍAS</h2>
    </div>
    <ul class="product-filter-menu mx-auto">
      @foreach($categories as $category)
        <li><a class="cat-list" href="{{url('/cat',$category->id)}}">{{$category->name}}</a></li>
      @endforeach
    </ul>
  </div>
</section>
<!-- Product filter section end -->
