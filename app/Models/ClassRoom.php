<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'name',
        'grade',
        'major',
        'teacher_id',
    ];

    // relationship
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class);
    }

    public function subjectClass()
    {
        return $this->hasMany(SubjectClass::class);
    }

}
