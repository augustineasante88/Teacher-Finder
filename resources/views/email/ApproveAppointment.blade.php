@component('mail::message')
# Appointment Approved

Dear {{$appointment->requestedUser->name}}, 
Your appointment with Mr/Miss {{$appointment->getTeacher->name}} has been approved successfully. 
You can contact him/her on {{$appointment->getTeacher->phone_number}}.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
