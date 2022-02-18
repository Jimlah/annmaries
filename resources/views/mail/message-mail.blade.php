@component('mail::message')
# Hello {{ config('app.name') }}

{{ $data['message'] }}

Thanks,<br>
{{ $data['fullname'] }}
{{ $data['email'] }}
@endcomponent
