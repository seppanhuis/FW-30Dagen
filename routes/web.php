<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = job::with("employer")->latest   ()->simplepaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {

    $job = job::find($id);
    return view('jobs.show', ['job' => $job]);
});

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

Route::get('/contact', function () {
    return view('contact');
});
