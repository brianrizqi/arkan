<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $recent_applications = \App\Models\CareerApplication::with('career')->latest()->take(5)->get();
        return view('dashboard', compact('recent_applications'));
    }
}
