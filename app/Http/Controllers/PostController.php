<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('form');
    }
    
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
