<?php

namespace App\Http\Controllers;
use App\Models\JobCareerApplication;
use App\Models\JobCareer;

use Illuminate\Http\Request;

class JobCareerApplicationController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'job_slug' => 'required|exists:job_careers,slug',
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'details' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5120', // 5MB
        ]);
        $resumePath = null;

        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }


        $job = JobCareer::where('slug', $request->job_slug)->firstOrFail();
        JobCareerApplication::create([
            'job_id' => $job->id,
            'job_title' => $job->title,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'details' => $request->details,
            'resume' => $resumePath,
        ]);


        return back()->with('success', 'Your application has been submitted successfully!');
    }
}
