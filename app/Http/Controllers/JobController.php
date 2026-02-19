<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index() {
        $jobs = Job::with('employer')->latest()->simplepaginate(3);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Job $job) {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'] 
        ]);
    
        $job->create([
            'employer_id' => 1,
            'title' => request('title'),
            'salary' => request('salary')
        ]);
    
        return redirect('jobs');
    }

    public function edit(Job $job) {
        Auth::user()->can('edit-job', $job);
        // Gate::authorize('edit-job', $job);
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job) {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'] 
        ]);
    
        $job->update([
            // 'employer_id' => request($id),
            'title' => request('title'),
            'salary' => request('salary')
        ]);
    
        return redirect('/job/' . $job['id']);
        
    }

    public function delete(Job $job) {
        $job->delete();
    }

}
