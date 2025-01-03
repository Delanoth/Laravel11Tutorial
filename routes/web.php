<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;





Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with("employer")->simplePaginate(3);
    
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});