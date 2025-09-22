<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;

Route::get('/', function () {
    return view('Home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
