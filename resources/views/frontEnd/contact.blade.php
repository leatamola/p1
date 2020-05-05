@extends('frontEnd.layouts.masterBarrios')
@section('title','BUSCATI - CONTACTO')
@section('slider')
@endsection
@section('content')

<!-- Page info -->
<div class="page-top-info">
  <div class="container">
    <h4>Contact</h4>
    <div class="site-pagination">
      <a href="{{ url('/') }}">Home</a> /
      <a href="{{ url('/contacto') }}">Contacto</a>
    </div>
  </div>
</div>
<!-- Page info end -->


<!-- Contact section -->
<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 contact-info">
        <h3>Contanos sobre tu tienda / servicio</h3>
        @if(session()->has('message'))
          <div class="alert alert-success" role="alert">
              <strong>Enviado con éxito</strong> {{ session()->get('message') }}
          </div>
        @endif
        <form method="POST" action="/contacto" style="margin-bottom:50px;" class="contact-form">
          <input type="text" name="name" placeholder="Tu Nombre" value"{{ old('name') }}">
          <span style="color:red"> {{$errors->first('name') }} </span>
          <input type="text" name="email" placeholder="Tu Email" value"{{ old('email') }}">
          <span style="color:red"> {{$errors->first('email') }} </span>
          <input type="text" name="subject" placeholder="Su Negocio" value"{{ old('subject') }}">
          <span style="color:red"> {{$errors->first('subject') }} </span>
          <textarea name="message" placeholder="Contanos sobre tu Servicio" value"{{ old('message') }}"></textarea>
          <span style="color:red"> {{$errors->first('message') }} </span>
          @csrf
          <button type="submit" class=" justify-content-end site-btn">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Contact section end -->

@endsection
