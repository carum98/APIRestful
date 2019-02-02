@component('mail::message')
# Hola {{ $user -> name}}

Has cambiado tu correo electronico por favor confirmar tu nuevo correo elecronico

@component('mail::button', ['url' =>  route ('verify', $user->verification_token) ])
Confirmar cuenta
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent