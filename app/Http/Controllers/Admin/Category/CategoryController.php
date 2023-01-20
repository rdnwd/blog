<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', ['data' => Category::all()]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);
        return redirect()->route('admin_category_index');
    }

    public function show(Category $id)
    {
        return view('admin.categories.show', ['data' => $id]);
    }

    public function edit(Category $id)
    {
        return view('admin.categories.edit', ['data' => $id]);
    }

    public function update($id, UpdateRequest $request)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->save();
        return view('admin.categories.show', ['data' => $category]);
    }

    public function delete(Category $id)
    {
        Category::find($id)->first()->delete();
        return redirect()->route('admin_category_index');
    }
}
