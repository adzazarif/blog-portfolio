<?php

namespace App\Http\Controllers;

use App\Models\AssignTool;
use App\Models\Project;
use App\Models\Tool;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin.layouts.project", compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tools = Tool::all();
        return view("admin.layouts.form-project",compact('tools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        foreach ($file as $f) {
            $name = rand(1000, 10000) . time(). '.' . $f->getClientOriginalExtension();
            $f->move(public_path('images-project'), $name);
            $data[] = $name;
        }

        $project = Project::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => implode(',', $data),
        ]);

        foreach($request->tool_id as $t){
            AssignTool::create([
                'project_id' => $project->id,
                'tool_id' => $t
            ]);
        }

        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::destroy($id);
        return redirect()->route('project.index');
    }
}