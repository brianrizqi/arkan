<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::with('category')->latest()->get();
        return view('admin.career.index', compact('careers'));
    }

    public function create()
    {
        $categories = \App\Models\CareerCategory::all();
        return view('admin.career.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:career_categories,id',
            'type' => 'required|string',
            'level' => 'required|string',
            'work_mode' => 'nullable|string',
            'reporting_to' => 'nullable|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'closing_date' => 'nullable|date',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title) . '-' . Str::random(5);

        Career::create($data);

        return redirect()->route('career.index')->with('success', 'Career opening created successfully.');
    }

    public function show(Career $career)
    {
        return view('admin.career.show', compact('career'));
    }

    public function edit(Career $career)
    {
        $categories = \App\Models\CareerCategory::all();
        return view('admin.career.edit', compact('career', 'categories'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:career_categories,id',
            'type' => 'required|string',
            'level' => 'required|string',
            'work_mode' => 'nullable|string',
            'reporting_to' => 'nullable|string',
            'location' => 'required|string',
            'description' => 'required|string',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'closing_date' => 'nullable|date',
        ]);

        $data = $request->all();
        if ($career->title !== $request->title) {
            $data['slug'] = Str::slug($request->title) . '-' . Str::random(5);
        }

        $career->update($data);

        return redirect()->route('career.index')->with('success', 'Career opening updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('career.index')->with('success', 'Career opening deleted successfully.');
    }
}
