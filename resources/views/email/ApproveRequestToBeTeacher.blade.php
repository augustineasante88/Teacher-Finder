@component('mail::message')
# Request To Be A Teacher Approved

Hey {{$user->name}}, Your request to be a teacher has been accepted.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
