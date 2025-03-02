<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $blogs = Post::all();
        $projects = Project::all();
        return view("layouts.home", compact('projects','blogs'));
    }

    public function detailProject($id)
    {
        $project = Project::find($id);
        return view("layouts.detail-project", compact('project'));
    }
}
