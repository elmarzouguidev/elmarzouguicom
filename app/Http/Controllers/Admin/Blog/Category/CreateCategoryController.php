<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Category\CreateCategoryFormRequest;
use App\Models\Blog\Category;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function store(CreateCategoryFormRequest $request)
    {
        $category = $request->validated();

        Category::create($category);

        return redirect(route('admin:category:list'))->with('success', "la categorie a été ajouté avec succès");
    }
}
