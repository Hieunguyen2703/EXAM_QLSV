<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
 
     protected $fillable = ['grade_level', 'room_number'];

     public function students()
     {
         return $this->hasMany(Student::class, 'class_id');
     }
}
