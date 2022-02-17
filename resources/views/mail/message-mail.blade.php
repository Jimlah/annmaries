@component('mail::message')
# Hello {{ config('app.name') }}

{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
