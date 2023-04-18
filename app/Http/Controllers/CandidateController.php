<?php

namespace App\Http\Controllers;

use App\Http\Requests\CandidateRequest;
use App\Models\Candidate;
use App\Models\Student;

class CandidateController extends Controller
{
    public function store(CandidateRequest $request)
    {
        $student = Student::whereStudentIdNumber($request->student_id_number)
        ->first();

        $candidateExists = Candidate::whereStudentId($student->id)
        ->exists();

        if (! $candidateExists) {
            Candidate::create(array_merge($request->except('student_id_number'), [
                'student_id' => $student->id,
                'name' => $student->full_name,
            ]));
            session()->flash('success', 'Student: '.$student->full_name.' Registered Successfully! ');

            return redirect()->back();
        }

        return redirect()->back()->withErrors(['Candidate Already Exists!']);
    }

    public function create(string $position)
    {
        return view('candidates.crud.create', [
            'position' => $position,
        ]);
    }

    public function delete(Candidate $candidate)
    {
        $position = $candidate->position;

        $candidate->delete();
        if ($position === Candidate::PRESIDENT) {
            return redirect()->route('candidate.president');
        }
        if ($position === Candidate::VICE_PRESIDENT) {
            return redirect()->route('candidate.vice-president');
        } else {
            return redirect()->route('candidate.counselor');
        }
    }
}
