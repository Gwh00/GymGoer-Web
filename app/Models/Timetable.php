<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    // The attributes that are mass assignable.
    protected $fillable = [
        'class',
        'personaltrainer',
        'start_time',
        'end_time',
        'day'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    

    // If your table doesn't have 'created_at' and 'updated_at' columns, uncomment the line below.
    // public $timestamps = false;
}
