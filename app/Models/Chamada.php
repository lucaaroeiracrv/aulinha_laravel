<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'materia'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'id');
    }
}
