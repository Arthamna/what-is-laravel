<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    $jobs = Job::all();
    dd($jobs[0]);
    // return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/job/{id}', function ($id) {
   
    $job = Job::find($id);

    return view('job', ['job' => $job]);
    
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    return "hello hmm";
});
