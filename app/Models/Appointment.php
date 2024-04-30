<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function requestedUser(){
        return $this->belongsTo(User::class, 'requested_user_id', 'id');
    }

    public function getTeacher(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getLocation(){
        return $this->belongsTo(Locations::class, 'location', 'id');
    }
}
