<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'age',
        'birthdate',
        'body_type',
        'checkin_time',
        'checkout_time',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
