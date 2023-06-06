<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Category\UpdateCategoryFormRequest;
use App\Models\Blog\Category;
use Illuminate\Http\Request;

class EditCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function update(UpdateCategoryFormRequest $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);

        return redirect(route('admin:category:list'))->with('success', "la categorie a été Modifier avec succès");
    }
}
