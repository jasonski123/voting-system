<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_year_start',
        'school_year_end',
        'election_start',
        'election_end',
        'is_election',
    ];
}
