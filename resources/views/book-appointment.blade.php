@extends('authentication_template')

@section('content')
    

    <div class="h-24 w-full bg-yellow-500">
        <div class="mx-auto flex h-full max-w-7xl flex-col justify-center space-y-2">
        <h1 class="ml-5 text-3xl font-extrabold text-red-800">Book Appointment</h1>
        <span class="ml-5 h-1 w-36 border-b-4 border-green-800"></span>
        </div>
    </div>

    <livewire:frontend.book-appointment-page :teacher='$teacher' />

@endsection