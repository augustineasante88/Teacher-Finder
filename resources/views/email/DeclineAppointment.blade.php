@component('mail::message')
# Appointment Declined

Dear {{$appointment->requestedUser->name}}, 
Your appointment with Mr/Miss {{$appointment->getTeacher->name}} has been declined. 
Please visit our website to book a different teacher. Thank you.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
