<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timetableslot extends Model
{
    protected $fillable = ['lesson_id', 'start_time', 'end_time', 'date'];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    use HasFactory;
}
