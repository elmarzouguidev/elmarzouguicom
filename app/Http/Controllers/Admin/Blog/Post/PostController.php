<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Post\CreatePostFormRequest;
use App\Http\Requests\Blog\Post\UpdatePostFormRequest;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::list()->get();

        return view('Admin.Blog.Category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::list()->get();

        $tags = Tag::list()->get();

        return view('Admin.Blog.Post.create.index', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePostFormRequest $request)
    {
        $data = $request->validated();

        $post = Post::create($data);

        $post->user()->associate(auth()->id())->save();

        $request->whenFilled('category', function ($category) use ($post) {
            $post->category()->associate($category)->save();
        });

        $request->whenFilled('tags', function ($tags) use ($post) {
            $post->tags()->sync($tags);
        });

        return redirect(route('admin:post:list'))->with('success', "l'article a été ajouté avec succès");
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
        $categories = Category::list()->get();

        $tags = Tag::list()->get();

        return view('Admin.Blog.Post.edit.index', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostFormRequest $request, Post $post)
    {
        $data = $request->validated();

        $post->update($data);

        $request->whenFilled('category', function ($category) use ($post) {
            $post->category()->associate($category)->save();
        });

        $request->whenFilled('tags', function ($tags) use ($post) {
            $post->tags()->sync($tags);
        });

        return redirect(route('admin:post:edit', $post))->with('success', "l'article a été Modifié avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
