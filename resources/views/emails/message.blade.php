@component('mail::message')
# Contact Message

## Name: {{$name}}
## Email: **{{$email}}**

{{$message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
