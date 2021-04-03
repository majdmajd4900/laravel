<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function registerForSubject()
    {
        if($this->type == 'student') return $this->hasMany(UsersSubjects::class, 'subjectId', 'subjectId');
        //return $this->hasMany(subject::class);
    }

    public function createSubject()
    {
        if($this->type == 'teacher') return $this->hasMany(UsersSubjects::class, 'subjectId', 'subjectId');
        //return $this->hasMany(subject::class);
    }


    



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
