<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    protected $fillable = ['name'];

    public function lessons()
    {
        return $this->hasMany(lesson::class);
    }
    use HasFactory;
}
