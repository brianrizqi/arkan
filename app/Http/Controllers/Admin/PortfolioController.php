<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'nullable'
        ]);

        $imagePath = $request->file('image')->store('portfolios', 'public');

        Portfolio::create([
            'title' => $request->title,
            'image' => $imagePath,
            'category' => $request->category
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'nullable'
        ]);

        $data = [
            'title' => $request->title,
            'category' => $request->category
        ];

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($portfolio->image);
            $data['image'] = $request->file('image')->store('portfolios', 'public');
        }

        $portfolio->update($data);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete($portfolio->image);
        $portfolio->delete();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio deleted successfully.');
    }
}
