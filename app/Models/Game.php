<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'name'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}
