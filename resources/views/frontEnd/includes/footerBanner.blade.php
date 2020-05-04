<!-- Banner section -->
<section class="search-section">
  <div id="Buscador">
    <div class="banner set-bg d-flex align-items-center justify-content-center" data-setbg="img/barracas/muralBarracas.jpg" >
        <form action="{{ url('search') }}"method="GET" class="bottom-search-form">
          <input type="text" name="query" id="query" value="{{ request()->input('query') }}" placeholder="Buscar en Barracas ....">
          <button><i class="flaticon-search"></i></button>
        </form>
    </div>
  </div>
</section>
<!-- Banner section end  -->
