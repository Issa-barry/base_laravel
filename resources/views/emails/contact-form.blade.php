@component('mail::message')
# Bonjour, Monsieur BARRY 

Vous avez un message de:
{{$data['name']}} <{{$data['email']}}>

Message: 
{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
