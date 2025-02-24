<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('admin.layouts.tool', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.layouts.form-tool');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        
        Tool::create([
            'name' => $request->name,
            'image' => $request->image,
        ]);

        return redirect()->route('tool.index')->with('success', 'Data berhasil ditambahkan');
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
        $tool = Tool::find($id);
        return view('admin.layouts.form-tool', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $tool = Tool::find($id);
        $tool->update([
            'name' => $request->name,
            'image' => $request->image
        ]);

        return redirect()->route('tool.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tool = Tool::find($id);
        $tool->delete();
        return redirect()->route('tool.index')->with('success', 'Data berhasil dihapus');
    }
}
