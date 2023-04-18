<?php

use App\Models\Candidate;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

return new class() extends Migration
{
    public function createStudent($studIdNum)
    {
        $student = Student::factory()->create([
            'student_id_number' => $studIdNum,
        ]);
        User::factory()->create([
            'student_id' => $student->id,
            'username' => $studIdNum,
            'password' => Hash::make($studIdNum),
        ]);

        return $student;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $studentIds = [
            '123',
            '15-0458-217',
            '15-0566-495',
            '17-0487-184',
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
        ];

        foreach ($studentIds as $key => $id) {
            $this->createStudent($id);
        }

        $presidents = [
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
        ];

        foreach ($presidents as $id) {
            $student = $this->createStudent($id);

            Candidate::create([
                'student_id' => $student->id,
                'position' => Candidate::PRESIDENT,
                'platform' => 'Lorem ipsum dolor sit amet, aliquip ex ea commodo consequat',
                'name' => $student->full_name,
            ]);
        }

        $vPresidents = [
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
        ];

        foreach ($vPresidents as $id) {
            $student = $this->createStudent($id);

            Candidate::create([
                'student_id' => $student->id,
                'position' => Candidate::VICE_PRESIDENT,
                'platform' => 'Lorem ipsum dolor sit amet, aliquip ex ea commodo consequat',
                'name' => $student->full_name,
            ]);
        }

        $counselors = [
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
            Str::orderedUuid(),
        ];

        foreach ($counselors as $id) {
            $student = $this->createStudent($id);

            Candidate::create([
                'student_id' => $student->id,
                'position' => Candidate::COUNSELOR,
                'platform' => 'Lorem ipsum dolor sit amet, aliquip ex ea commodo consequat',
                'name' => $student->full_name,
            ]);
        }
    }
};
