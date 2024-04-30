<?php

use App\Http\Controllers\UserDashboardController;
use App\Http\Livewire\UserDashboard\ProfilePage;
use App\Models\Appointment;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {

//     return redirect('welcome');
// });

Route::get('/dashboard', function () {
    
    $users = User::count();

    if(Auth::user()->is_admin === 1){
        $comments = Comment::count();
    }else {
        $comments = Comment::where('user_id', Auth::user()->id)->count();
    }

    if(Auth::user()->is_admin == 1){
        $appointments = Appointment::count();
    }else{
        $appointments = Appointment::where('user_id', '=', Auth::user()->id)
        ->orWhere('requested_user_id', Auth::user()->id)
        ->count();
    }
    //dd($users);
    return view('dashboard', compact('users', 'comments', 'appointments'));
})->middleware('auth')->name('dashboard');


Route::get('/', [UserDashboardController::class, 'getWelcome'])->name('welcome');
Route::get('/profile', [UserDashboardController::class, 'getProfile'])->middleware('auth')->name('profile');
Route::get('/users', [UserDashboardController::class, 'getUsers'])->middleware(['auth', 'isAdmin'])->name('users');
Route::get('/comments', [UserDashboardController::class, 'getComments'])->middleware('auth')->name('comments');
Route::get('/appointments', [UserDashboardController::class, 'getAppointments'])->middleware('auth')->name('appointments');
Route::get('/campus-locations', [UserDashboardController::class, 'getLocations'])->middleware('auth')->name('locations');


Route::get('/location', [UserDashboardController::class, 'getCampusLocations'])->name('campus-locations');

// frontend routes
Route::get('/all-teachers', [UserDashboardController::class, 'getAllTeachers'])->name('all-teachers');
Route::get('/teacher-details/{user}', [UserDashboardController::class, 'getTeacher'])->name('teacher-details');
Route::get('/book-appointment/{user}', [UserDashboardController::class, 'getAppointmentPage'])->name('book-appointment');