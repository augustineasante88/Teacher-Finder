<?php

namespace App\Http\Controllers;

use App\Models\Locations;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    //
    public function getWelcome(){

        $teachers = User::where('user_type', 2)->paginate(8);
        //dd($teachers);
        
        return view('welcome', compact('teachers'));
    }

    public function getProfile(){
        return view('user-pages.profile');
    }

    public function getUsers(){
        
        return view('user-pages.users');
    }

    public function getComments(){
        
        return view('user-pages.comments');
    }

    public function getAppointments(){
        
        return view('user-pages.appointments');
    }

    public function getLocations(){
        
        return view('user-pages.locations');
    }

    public function getCampusLocations(Request $request){
        
        return Locations::query()
            ->select('id', 'name')
            ->orderBy('name')
            ->when(
                $request->search,
                fn (Builder $query) => $query
                    ->where('name', 'like', "%{$request->search}%")
            )
            ->when(
                $request->exists('selected'),
                fn (Builder $query) => $query->whereIn('id', $request->input('selected', [])),
                fn (Builder $query) => $query->limit(10)
            )
            ->get();
    }

    public function getAllTeachers(){
        
        return view('all_teachers');
    }

    public function getTeacher($user){
        //dd($user);
        $user = User::with('getUser')->findOrFail($user);
        //dd($user);
        return view('teacher_details', compact('user'));
    }

    public function getAppointmentPage($teacher){
        $teacher = User::findOrFail($teacher);
        return view('book-appointment', compact('teacher'));
    }
}
