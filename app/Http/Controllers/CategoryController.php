<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('admin.pages.test-category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'status' => 'required|in:Active,InActive',
        ]);

        Category::create($request->only('name', 'status'));

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request)
    {
        // Find category by ID from hidden input
        $category = Category::findOrFail($request->id);
        
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,'.$category->id,
            'status' => 'required|in:Active,InActive',
        ]);

        $category->update($request->only('name','status'));

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}