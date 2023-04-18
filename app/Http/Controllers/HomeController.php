<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Election;
use App\Models\Student;
use App\Models\VoteCount;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $presidents = Candidate::with('student')->wherePosition(Candidate::PRESIDENT)->get();
        $vicePresidents = Candidate::with('student')->wherePosition(Candidate::VICE_PRESIDENT)->get();
        $counselors = Candidate::with('student')->wherePosition(Candidate::COUNSELOR)->get();

        if (is_null(auth()->user()->student_id)) {
            $electionDate = Election::latest()->first();

            $year = $electionDate->election_start ? Carbon::parse($electionDate->election_start)->year : now()->year;

            $results = VoteCount::select('candidate_id', DB::raw('COUNT(student_id) as total_votes'))
            ->whereYear('created_at', '=', $year)
            ->groupBy('candidate_id')
            ->get();

            return view('home', compact('results'));
        } else {
            $student = Student::find(auth()->user()->student_id);
            if ($student->vote) {
                return redirect()->route('review.vote', ['id' => $student->vote->id]);
            }

            return view('students.home1', compact('presidents', 'vicePresidents', 'counselors'));
        }
    }
}
