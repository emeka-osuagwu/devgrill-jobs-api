<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        return Job::with('category', 'tags')->get();
    }

    public function getJob($id)
    {
        return Job::with('category', 'tags')->where('id', $id)->get();
    }
}
