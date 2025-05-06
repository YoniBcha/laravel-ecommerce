<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // DB::table('blogs')->insert([
        //     'title' => 'new sample title',
        //     'description' => 'new sample description',
        //     'author' => 'new sample author',
        // ]);

        // $blogs = Blog::all();
        // return view('blog.index', compact('blogs'));

       dd(DB::table('blogs')->pluck('title'));
        // $blogs = DB::table('blogs')->get();
        // return view('blog.index', compact('blogs'));
    }

    /**
     * Show the  form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
