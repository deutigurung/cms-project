<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogCategories = BlogCategory::all();
        return view('backend.blogs.create',compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:blogs',
            'content' => 'nullable|string',
            'blog_category' => 'required',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);
        //dd($request->all());
        $blog = Blog::create([
            'title'      => $request->get('title'),
            'slug'      => Str::slug($request->get('title')),
            'content'      => $request->get('content'),
            'tags'      => $request->get('tags'),
            'status'      => 1,
            'blog_category_id'      => $request->get('blog_category'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/blogs';
            $file_name   = 'blog-pic-' . $blog->id . '.' . $extension;
            $file->move($destination, $file_name);
            Blog::where('id', $blog->id)->update(['image' => $file_name ]);
        }
        return redirect()->route('blogs.index')->with('success', 'Blog Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blog = Blog::find($blog->id);
        $blogCategories = BlogCategory::all();
        return view('backend.blogs.edit',compact('blog','blogCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255|unique:blogs,title,'.$blog->id,
            'content' => 'nullable|string',
            'blog_category' => 'required',
            'image'           => 'nullable|mimes:jpg,jpeg,png|max:2060',
        ]);

        $blog = Blog::find($blog->id);
        $blog->update([
            'title'      => $request->get('title'),
            'slug'      => Str::slug($request->get('title')),
            'content'      => $request->get('content'),
            'tags'      => $request->get('tags'),
            'status'      => $request->get('status'),
            'blog_category_id'      => $request->get('blog_category'),
        ]);
        if ($request->hasFile('image')) {
            $file        = $request->file('image');
            $extension   = $file->getClientOriginalExtension();
            $destination = 'uploads/blogs';
            $file_name   = 'blog-pic-' . $blog->id . '.' . $extension;
            $file->move($destination, $file_name);
            Blog::where('id', $blog->id)->update(['image' => $file_name]);
        }
        return redirect()->route('blogs.index')->with('success', 'Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog = Blog::find($blog->id);
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog Deleted Successfully');
    }
}
