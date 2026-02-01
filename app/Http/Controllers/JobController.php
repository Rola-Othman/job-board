<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index(){
        $jobs = Job::getAllJobs(); //* Fetch all jobs from the Job model
        return view('job.index', compact('jobs')); //* Render the 'job' view with jobs data
        // return $this->lang; //* Accessing the protected property from the base Controller class 
    }
} 
