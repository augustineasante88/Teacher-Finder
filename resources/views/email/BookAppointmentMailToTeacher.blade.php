@component('mail::message')
# New Appointment

Dear {{$appointments->getTeacher->name}}, You have a new appointment from Mr/Mrs {{$appointments->requestedUser->name}} to review. Thank you.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
