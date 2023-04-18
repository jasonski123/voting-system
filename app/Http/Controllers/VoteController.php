<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use App\Models\VoteCount;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function reselectVotes($id)
    {
        $vote = Vote::find($id)->delete();

        return redirect()->route('home');
    }

    public function confirmVotes($id)
    {
        $vote = Vote::find($id);

        $decodeVotes = json_decode($vote->candidates);

        if ($decodeVotes->counselor) {
            $candidates = Candidate::with('student')->wherePosition(Candidate::COUNSELOR)
            ->whereIn('id', $decodeVotes->counselor)
            ->get();

            $this->loopCandidate($candidates, $vote);
        }

        if ($decodeVotes->president) {
            $candidates = Candidate::with('student')->wherePosition(Candidate::PRESIDENT)
            ->whereIn('id', [$decodeVotes->president])
            ->get();
            $this->loopCandidate($candidates, $vote);
        }

        if ($decodeVotes->vice_president) {
            $candidates = Candidate::with('student')->wherePosition(Candidate::VICE_PRESIDENT)
            ->whereIn('id', [$decodeVotes->vice_president])
            ->get();
            $this->loopCandidate($candidates, $vote);
        }

        $vote->update([
            'is_confirmed' => true,
        ]);

        return redirect()->route('home');
    }

    public function loopCandidate($candidates, $vote)
    {
        foreach ($candidates as $candidate) {
            VoteCount::create([
                'student_id' => $vote->student_id,
                'candidate_id' => $candidate->id,
                'position' => $candidate->position,
            ]);
        }
    }

    public function reviewVotes($id)
    {
        $vote = Vote::with('student')->whereId($id)->first();
        $decodeVotes = json_decode($vote->candidates);

        if (auth()->user()->student->vote->id == $id) {
            $counselors = null;
            if ($decodeVotes->counselor) {
                $counselors = Candidate::with('student')->wherePosition(Candidate::COUNSELOR)
                ->whereIn('id', $decodeVotes->counselor)
                ->get();
            }

            $president = null;
            if ($decodeVotes->president) {
                $president = Candidate::with('student')->wherePosition(Candidate::PRESIDENT)
                ->whereId($decodeVotes->president)
                ->first();
            }

            $v_president = null;
            if ($decodeVotes->president) {
                $v_president = Candidate::with('student')->wherePosition(Candidate::VICE_PRESIDENT)
                ->whereId($decodeVotes->vice_president)
                ->first();
            }

            $candidates = true;
            if (is_null($decodeVotes->counselor) && is_null($decodeVotes->president) && is_null($decodeVotes->vice_president)) {
                $candidates = false;
            }

            return view('students.votes-initial', compact('counselors', 'president', 'v_president', 'vote', 'candidates'));
        }
        abort(404);
    }

    public function castVote(Request $request)
    {
        if (auth()->user()->student->vote) {
            abort(404);
        }
        $candidatesVoted = [
            'president' => $request->president,
            'vice_president' => $request->vice_president,
            'counselor' => $request->counselors,
        ];
        $votes = Vote::create([
            'student_id' => auth()->user()->student_id,
            'candidates' => json_encode($candidatesVoted),
        ]);

        return redirect()->route('review.vote', ['id' => $votes->id]);
    }
}
