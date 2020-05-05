@extends('frontEnd.layouts.masterBarrios')
@section('title','BUSCATI - TIENDA SERVICIO')

@section('content')
<!-- Page info -->
<div class="page-top-info">
  <div class="container text-md-left text-center">
    <h4> {{$detail_product->title}} </h4>
    <div class="site-pagination">
      <a href="{{ url('/') }}">Home</a> /
      <a href="{{ url('/all') }}">{{$detail_product->category->name}}</a>
    </div>
  </div>
</div>
<!-- Page info end -->


<!-- product section -->
<section class="product-section">
  <div class="container">
    <div class="back-link">
      <a href="{{ url('/all') }}"> &lt;&lt; Volver a Categorías</a>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="product-pic-zoom">
          <img class="product-big-img" src="{{url('products/large',$detail_product->image)}}" alt="">
        </div>
        <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
          <div class="product-thumbs-track">

            @foreach($imagesGalleries as $imageGallery)
            <div class="pt active" data-imgbigurl="{{url('products/medium',$imageGallery->image)}}"><img src="{{url('products/medium',$imageGallery->image)}}" alt=""></div>
            @endforeach

          </div>
        </div>
      </div>
      <div class="col-lg-6 product-details">
        <div id="accordion" class="accordion-area">
          <div class="panel">
            <div class="panel-header" id="headingOne">
              <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Dirección y Contacto</button>
            </div>
            <div id="collapse3" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="panel-body">


                @if($detail_product->tel && $detail_product->tel2)
                  <p><span>Telefono: </span> <a href="tel:{{ $detail_product->tel }}">{{$detail_product->tel}}</a>  -  <a href="tel:{{ $detail_product->tel2 }}">{{$detail_product->tel2}} </a> </p>
                @else
                    <p><span>Telefono: </span><a  href="tel:{{ $detail_product->tel }}"> {{$detail_product->tel}} </a></p>
                @endif

                @if($detail_product->whatsapp)
                  <p><span>Whatsapp: </span><a target="_blank" href="https://wa.me/{{$detail_product->whatsapp}}">{{$detail_product->whatsapp}}</a>   <a href="https://wa.me/{{$detail_product->whatsapp}}">{{$detail_product->whatsapp2}}</a></p>
                @endif

                @if($detail_product->cuarentena)
                  <p><span>Funcionando en Cuarentena: </span>{{$detail_product->cuarentena}}</p>
                @endif




                <p><span>Dirección: </span><a href="https://maps.google.com/?q={{$detail_product->adress}}">{{$detail_product->adress}}, Barracas</a></p>
                <p style="color:#007bff"><span>Horario de Atención: </span>{{$detail_product->horario}}</p>

              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-header" id="headingTwo">
              <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Información</button>
            </div>
            <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="panel-body">
                <p>{{$detail_product->description}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="social-links my-3">
          @if($detail_product->facebook)
            <a target="_blank" href="https://www.facebook.com/{{$detail_product->facebook}}"><i id="facebookIcon" class="fa fa-facebook"></i></a>
          @endif
          @if($detail_product->whatsapp)
            <a target="_blank" href="https://wa.me/{{$detail_product->whatsapp}}"><i id="whatsappIcon" class="fa fa-whatsapp"></i></a>
          @endif
          @if($detail_product->instagram)
            <a target="_blank" href="https://instagram.com/{{$detail_product->instagram}}"><i id="instagramIcon" class="fa fa-instagram"></i></a>
          @endif
          @if($detail_product->email)
            <a target="_blank" href="mailto:{{$detail_product->email}}"><i id="mailIcon" class="fa fa-envelope"></i></a>
          @endif
          @if($detail_product->twitter)
            <a target="_blank" href="https://www.twitter.com/{{$detail_product->twitter}}"><i id="twitterIcon" class="fa fa-twitter"></i></a>
          @endif
          @if($detail_product->youtube)
            <a target="_blank" href="https://www.youtube.com/{{$detail_product->youtube}}"><i id="youtubeIcon" class="fa fa-youtube"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>
  @if($detail_product->googleMaps)
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto" style="padding-top:40px;">
          <iframe src="{{$detail_product->googleMaps}}" style="border:0" allowfullscreen="" width="100%" height="320" frameborder="0"></iframe>
        </div>
      </div>
    </div>
  @endif
</section>
<!-- product section end -->

@endsection
