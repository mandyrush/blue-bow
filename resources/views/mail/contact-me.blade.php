@component('mail::message')
# New Request from bluebowfashion.com

Name: {{ $data['firstName'] }} {{ $data['lastName'] }}<br>

Email: {{ $data['email'] }}<br>

Phone: {{ $data['phone'] }}<br>

Wedding Date: {{ $data['weddingDate'] }}<br>

Location: {{ $data['location'] }}<br>

Message: {{ $data['message'] }}<br>

@endcomponent
