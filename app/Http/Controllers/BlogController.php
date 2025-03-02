<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Post::all();
        return view('admin.layouts.blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layouts.form-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'kategori' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images-blog'), $new_name);

        Post::create([
            'title' => $request->title,
            'kategori' => $request->kategori,
            'description' => $request->description,
            'image' => $new_name,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('blog.index')->with('success', 'Data Added Successfully');
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
        $request->validate([
            'title' => 'required',
            'kategori' => 'required',
            'description' => 'required',
            'images' => 'required',
        ]);

        $blog = Post::find($id);
        $image = $request->file('images');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images-blog'), $new_name);
        $blog->update([
            'title' => $request->title,
            'kategori' => $request->kategori,
            'description' => $request->description,
            'image' => $new_name,
        ]);
        return redirect()->route('blog.index')->with('success', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Post::find($id);
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Data Deleted Successfully');
    }
}
