<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;  // Ensure you have this namespace

class InBodyRecord extends Model
{
    use HasFactory;

    // If your table name isn't 'in_body_records' you can define it below
    // protected $table = 'name_of_your_table';

    protected $fillable = [
        'user_id',
        'total_body_water',
        'protein',
        'minerals',
        'body_fat_mass',
        'weight',
        'skeletal_muscle_mass',
        'BMI',
        'PBF'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
