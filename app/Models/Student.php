<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'address',
        'birth_date',
        'generation',
        'path_image',
        'first_year',
        'user_id',
        'gender',
        'grade',
        'hobby',
        'religion',
    ];

    // relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function class()
    {
        return $this->belongsToMany(ClassRoom::class);
    }

    public function subjectClass()
    {
        return $this->belongsToMany(SubjectClass::class);
    }



}
