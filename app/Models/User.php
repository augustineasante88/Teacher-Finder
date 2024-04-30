<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getUser(){
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }
    
    // public function getLikes(){
    //     return $this->hasMany(Like::class, 'user_id', 'id');
    // }

    // public function scopeLikedByUser(){
    //     return $this->getLikes()->where('user_id', Auth::user()->id);
    // }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'index_number',
        'phone_number',
        'password',
        'level',
        'subject',
        'image',
        'email',
        'price',
        'user_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
