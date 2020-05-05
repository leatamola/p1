@extends('frontEnd.layouts.masterBarrios')
@section('title','BUSCATI - SOBRE NOSOTROS')
@section('slider')
@endsection
@section('content')

<!-- Page info -->
<div class="page-top-info">
  <div class="container">
    <h4>Sobre Nosotros</h4>
    <div class="site-pagination">
      <a href="{{ url('/') }}">Home</a> /
      <a href="{{ url('/about') }}">Sobre Nosotros</a>
    </div>
  </div>
</div>
<!-- Page info end -->


<!-- Contact section -->
<section class="contact-section mb-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 contact-info text-justify">
        <h3 style="margin-bottom: 20px;">Sobre Nosotros</h3>
        <p class="panel-body" style="font-size:20px; margin-bottom: 40px;">Buscati.com.ar es el punto de encuentro online de las tiendas y servicios del barrio de Barracas. Desde el año 2019, este medio digital facilita, entretiene e informa a sus usuarios sobre las diferentes alternativas de tiendas y servicios del barrio. En un sólo lugar los usuarios pueden encontrar toda la información y obtener datos relevantes para decidir su preferencia</p>
        <h3 style="margin-bottom: 20px;">¿Cómo incluyo mi tienda/servicio?</h3>
        <p class="panel-body" style="font-size:20px; margin-bottom: 40px;">
          Si querés publicar tus tiendas y/o servicios, podés comunicarte con nosotros utilizando el formulario de contacto o enviando un email a la dirección <a href="mailto:contacto@buscati.com.ar">contacto@buscati.com.ar</a> .
        </p>
        <h3 style="margin-bottom: 20px;">¿Para qué existe este emprendimiento?</h3>
        <p class="panel-body" style="font-size:20px; margin-bottom: 40px;">
          Creamos a la Buscati.com.ar con la visión de difundir a las tiendas/servicios de calidad y reunir a toda la comunidad del barrio.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Contact section end -->

@endsection
