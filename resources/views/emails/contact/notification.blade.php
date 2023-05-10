@component('mail::message')
# New Contact Message

You have received a new contact message from:

Name: {{ $data['name_ar'] }}
Email: {{ $data['email'] }}
Mobile: {{ $data['mobile'] }}

Message:
{{ $data['message_ar'] }}

@endcomponent
