<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;

    public function createdByTeacherUser()
    {
        return $this->hasOne(User::class, 'userId', 'userId');
        //return $this->hasMany(subject::class);
    }

    public function registeredByStudentUser()
    {
        return $this->hasMany(UsersSubjects::class, 'userId', 'userId');
        //return $this->hasMany(subject::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'userId',
        'description',
        'code',
        'creditValue',
    ];


}
