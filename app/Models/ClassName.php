<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassName extends Model
{
    use HasFactory;

    protected $fillable = ['class_name', 'class_code', 'class_description', 'coachname'];

    public function personalTrainer()
    {
        return $this->belongsTo(PersonalTrainer::class);
    }
}
