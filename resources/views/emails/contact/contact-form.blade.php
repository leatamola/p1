@component('mail::message')

#Gracias por tu mensaje

<strong>Nombre</strong> <br>{{ $data['name'] }} <br><br>
<strong>Email</strong> <br> {{ $data['email'] }}<br><br>
<strong>Negocio</strong> <br> {{ $data['subject'] }}<br><br>
<strong>Mensaje</strong> <br> {{ $data['message'] }}<br><br>
@endcomponent
