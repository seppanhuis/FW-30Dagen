<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Jobs', function () {
    return view('Jobs', [
        'Jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50.000'
            ],
            [
                'title' => 'Programmer',
                'salary' => '$10.000'
            ],
            [
                'title' => 'Teacher',
                'salary' => '$40.000'
            ]
        ]
    ]
);
});

Route::get('/Contact', function () {
    return view('Contact');
});
