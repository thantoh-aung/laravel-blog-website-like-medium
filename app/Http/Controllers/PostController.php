<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        $categories = Category::all();
        return view('post.index', [
            'categories' => $categories,
            'posts'=> $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate([
            'image'=> ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg','max:2048'],
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);
        $image = $data['image'];
        unset($data['image']);
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($data['title']);
        $imagePath = $image->store('posts','public');
        $data['image'] = $imagePath;

        Post::create($data);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
