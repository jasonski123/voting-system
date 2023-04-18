<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteCount extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'candidate_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
