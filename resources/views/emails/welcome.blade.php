@component('mail::message')
# Hola {{ $user -> name}}

Gracias por crear una cuenta por favor utiliza el siguiente enlace

@component('mail::button', ['url' => route ('verify', $user->verification_token) ])
Confirmar cuenta
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent