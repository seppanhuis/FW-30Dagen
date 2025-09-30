<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    return view('home');
});

// Jobs


//all jobs
Route::get('/jobs', function () {
    $jobs = job::with("employer")->latest   ()->simplepaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//create job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//single job
Route::get('/jobs/{id}', function ($id) {

    $job = job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//store job
Route::post('/jobs', function () {
    $validated = request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required'
    ]);

    job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


//Edit job
Route::get('/jobs/{id}/edit', function ($id) {

    $job = job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//Update job
Route::patch('/jobs/{id}', function ($id) {

     $validated = request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required'
    ]);

    $job = job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect("/jobs/{$id}");
});

//destroy job
Route::delete('/jobs/{id}', function ($id) {

    $job = job::findOrFail($id)->delete();

    return redirect('/jobs');
});



//contact
Route::get('/contact', function () {
    return view('contact');
});
