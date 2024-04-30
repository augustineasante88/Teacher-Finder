<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Like extends Model
{
    use HasFactory;

    // public function scopeLikedByUser($query){
    //     return $query->where('user_id', Auth::user()->id);
    // }

    public function getLikedUsers(){
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}
