<?php

namespace App\Http\Controllers\Admin\Blog\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\Category\CreateCategoryFormRequest;
use App\Http\Requests\Blog\Category\UpdateCategoryFormRequest;
use App\Models\Blog\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryFormRequest $request)
    {
        $category = $request->validated();

        Category::create($category);

        return redirect(route('admin:category:list'))->with('success', "la categorie a été ajouté avec succès");
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
    public function update(UpdateCategoryFormRequest $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);

        return redirect(route('admin:category:list'))->with('success', "la categorie a été Modifier avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
