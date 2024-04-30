@component('mail::message')
# Request To Be A Teacher

Hey {{$user->name}}, Your request to be a teacher has been recieved successfully and is pending for review.
You will be notified after the review is complete. Thank you.


Thanks,<br>
{{ config('app.name') }}
@endcomponent
