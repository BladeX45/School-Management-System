<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
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
        'start_date',
        'end_date',
        'path_image',
        'user_id',
        'nik',
        'nip',
        'gender',
        'grade',
        'hobby',
        'religion',
        'salary',
    ];

    // relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjectClass()
    {
        return $this->hasMany(SubjectClass::class);
    }

    public function class()
    {
        return $this->hasMany(ClassRoom::class);
    }

}
