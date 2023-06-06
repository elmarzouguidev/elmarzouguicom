<?php

namespace App\Http\Controllers\Admin\Blog\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Post\CreatePostFormRequest;
use App\Models\Blog\Category;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
use Illuminate\Http\Request;

class CreatePostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::list()->get();

        $tags = Tag::list()->get();

        return view('Admin.Blog.Post.create.index', compact('categories', 'tags'));
    }

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
}
