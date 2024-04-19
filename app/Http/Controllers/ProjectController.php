<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $site = Project::where('id', 1)->first();
        return view('admin.project', compact('site'));
    }
}
