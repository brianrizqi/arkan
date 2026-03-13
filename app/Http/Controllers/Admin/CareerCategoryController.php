<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerCategoryController extends Controller
{
    public function index()
    {
        $categories = CareerCategory::withCount('careers')->get();
        return view('admin.career-category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.career-category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:career_categories,name',
        ]);

        CareerCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('career-category.index')->with('success', 'Category created successfully.');
    }

    public function edit(CareerCategory $career_category)
    {
        return view('admin.career-category.edit', compact('career_category'));
    }

    public function update(Request $request, CareerCategory $career_category)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:career_categories,name,' . $career_category->id,
        ]);

        $career_category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('career-category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(CareerCategory $career_category)
    {
        $career_category->delete();
        return redirect()->route('career-category.index')->with('success', 'Category deleted successfully.');
    }
}
