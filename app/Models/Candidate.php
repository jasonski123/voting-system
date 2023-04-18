<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'position',
        'platform',
        'name',
    ];

    public const PRESIDENT = 'President';

    public const VICE_PRESIDENT = 'Vice-President';

    public const COUNSELOR = 'Counselor';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

        /**
         * Scope a query to only include users of a given type.
         */
        public function scopeOfPosition(Builder $query, string $position): void
        {
            $query->where('position', $position);
        }
}
