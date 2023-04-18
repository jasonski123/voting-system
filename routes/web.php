<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Middleware\CheckElection;
use App\Http\Middleware\RouteAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('test', function () {
});
Route::redirect('/', '/login');
Route::post('submit-form', [StudentController::class, 'studentLogin'])
->name('submit-form');

Route::view('student-portal', 'students.student-login-portal')
->middleware('check-election');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');
// ->middleware('check-election');

Route::middleware([RouteAdmin::class])->group(function () {
    Route::resource('users', UserController::class);

    Route::view('president', 'candidates.president')->name('candidate.president');

    Route::post('add-candidate', [CandidateController::class, 'store'])->name('candidate.store');

    Route::get('create-candidate/{position}', [CandidateController::class, 'create'])->name('candidate.create');

    Route::delete('delete-candidate/{candidate}', [CandidateController::class, 'delete'])->name('candidate.delete');

    Route::view('vice-president', 'candidates.vice-president')->name('candidate.vice-president');

    Route::view('counselor', 'candidates.counselor')->name('candidate.counselor');

    Route::view('students', 'students.index')->name('students.index');

    // Route::post('election-start', [ElectionController::class, 'start'])->name('election.start');

    Route::view('elections', 'elections.index')->name('election.index');
    Route::get('elections-edit/{id}', [ElectionController::class, 'edit'])->name('election.edit');
    Route::put('elections-update/{id}', [ElectionController::class, 'update'])->name('election.update');
});

Route::middleware([CheckElection::class])->group(function () {
    Route::post('submit-vote', [VoteController::class, 'castVote'])->name('submit.vote');
    Route::get('votes/{id}', [VoteController::class, 'reviewVotes'])->name('review.vote');
    Route::put('confirm-votes/{id}', [VoteController::class, 'confirmVotes'])->name('confirm.vote');
    Route::get('reselect-votes/{id}', [VoteController::class, 'reselectVotes'])->name('reselect.vote');
});
