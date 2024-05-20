<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'thumbnail',
        'subject_id'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class)->withTimestamps();
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
