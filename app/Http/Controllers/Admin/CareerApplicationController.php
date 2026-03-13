<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CareerApplication;
use Illuminate\Http\Request;

class CareerApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applications = CareerApplication::with('career')->latest()->paginate(10);
        return view('admin.career-applications.index', compact('applications'));
    }

    /**
     * Display the specified resource.
     */
    public function show(CareerApplication $career_application)
    {
        return view('admin.career-applications.show', ['application' => $career_application]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CareerApplication $career_application)
    {
        $career_application->delete();

        return redirect()->route('career-application.index')
            ->with('success', 'Application deleted successfully.');
    }
}
