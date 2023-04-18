<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id_number',
        'firstname',
        'middlename',
        'lastname',
        'course',
        'year_level',
        'school_year_start',
        'school_year_end',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function candidate()
    {
        return  $this->hasOne(Candidate::class);
    }

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }

    public function getFullNameAttribute() // notice that the attribute name is in CamelCase.
    {
        return $this->firstname.' '.$this->middlename.' '.$this->lastname
        .', '.$this->course.'-'.$this->year_level;
    }
}
