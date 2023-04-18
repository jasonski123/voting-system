<?php

namespace App\Http\Controllers;

use App\Http\Requests\ElectionRequest;
use App\Models\Election;

class ElectionController extends Controller
{
    public function edit($id)
    {
        $election = Election::find($id);

        return view('elections.edit', compact('election'));
    }

    public function update(ElectionRequest $request, $id)
    {
        $election = Election::find($id);
        $election->update($request->validated());

        return redirect()->route('election.index');
    }
}
