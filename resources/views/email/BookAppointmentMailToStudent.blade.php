@component('mail::message')
# New Appointment Confirmation 

Hey {{$appointments->requestedUser->name}}, Your appointment request 
with Mr/Miss {{$appointments->getTeacher->name}} has been sent and is pending for approval. 


Thanks,<br>
{{ config('app.name') }}
@endcomponent
