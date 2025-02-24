<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view("layouts.home", compact('projects'));
    }

    public function detailProject($id)
    {
        $project = Project::find($id);
        return view("layouts.detail-project", compact('project'));
    }
}
