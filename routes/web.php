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

Route::get('/job/create', function () {
    return view('jobs.create' );
});

Route::post('/jobs', function () { 
    // dd(request()->all());
    Job::create([
        'employer_id' => 1,
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('jobs');
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::get('/jobs', function () {
    // $jobs = Job::with('employer')->get();
    $jobs = Job::with('employer')->latest()->simplepaginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    return "hello hmm";
});
