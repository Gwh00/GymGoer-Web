<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalTrainer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'certification', 'phone'];
    protected $table = 'personaltrainer';

    public function classes()
    {
        return $this->hasMany(ClassName::class); // Replace 'ClassName' with the actual name of your class model
    }

    public function timetableEntries()
    {
        return $this->hasMany(ClassName::class, 'personaltrainer_id');
    }
}