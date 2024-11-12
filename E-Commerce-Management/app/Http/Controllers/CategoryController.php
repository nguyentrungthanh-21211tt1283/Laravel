<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController 
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name_categorie' => 'required',
            'description_categorie' => 'required',
        ]);
        $category = Category::create($data);
        return response()->json(['message' => 'Category created successfully!', 'category' => $category], 201);
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return response()->json(['success' => true, 'category' => $category], 200);
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validate([
            'name_categorie' => 'required',
            'description_categorie' => 'required',
        ]);
        $category->update($data);
        return response()->json(['success' => true, 'category' => $category], 200);
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return response()->json(['success' => true, 'message' => 'Category deleted successfully'], 200);
    }
}