@component('mail::message')
# Request To Be A Teacher Declined

Dear {{$user->name}}, Your request to be a teacher has been declined. You do not meet the required criteria.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
