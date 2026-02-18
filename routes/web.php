<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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


//index
// Route::get('/jobs', function () {
    //     // $jobs = Job::with('employer')->get();
    //     $jobs = Job::with('employer')->latest()->simplepaginate(3);
    //     return view('jobs.index', ['jobs' => $jobs]);
    // });
    
Route::get('/jobs', [JobController::class, 'index']); 

// show
// Route::get('/job/{job}', function (Job $job) {
//     return view('jobs.show', ['job' => $job]);
// });

Route::get('/job/{job}', [JobController::class, 'show']); 

// create
Route::get('/job/create', [JobController::class, 'create']); 

//store
Route::post('/job', [JobController::class, 'create']); 

//edit
// Route::get('/job/{job}/edit', function ($id) {
//     $job = Job::find($id);
    // return view('jobs.edit', ['job' => $job]);
// });

Route::get('/job/{job}/edit', [JobController::class, 'edit']); 

//update
Route::patch('/job/{job}', [JobController::class, 'update']); 

//delete
Route::delete('/job/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    // $job = Job::findOrFail($id);
    // $job->delete();
    return redirect('/jobs');
});


// Route::controller(JobController::class)->group(function () {
    
// })
// Route::apiResource('{parent_name}', {ClassController}::class)->only(['index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello', function () {
    return "hello hmm";
});
