<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user')->withTimestamps();
    }

    public function assignments()
    {
        return $this->belongsToMany(Assignment::class)->withTimestamps();
    }
}
