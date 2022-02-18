@component('mail::message')
# Hello {{ config('app.name') }}

{{ $data['message'] }}

Thanks,<br>
{{ $data['fullname'] }}<br>
{{ $data['email'] }}<br>
@endcomponent
