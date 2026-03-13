<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CareerApplication;
use App\Models\Career;
use App\Mail\CareerApplicationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CareerApplicationController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate Math Captcha
        $captchaAnswer = $request->input('captcha_answer');
        $expectedAnswer = session('captcha_result');

        if ($captchaAnswer === null || (int)$captchaAnswer !== $expectedAnswer) {
            return response()->json([
                'success' => false,
                'message' => 'Incorrect security answer. Please try again.'
            ], 422);
        }

        // Clear captcha from session after successful use
        session()->forget('captcha_result');

        // 2. Validate form data
        $validated = $request->validate([
            'career_id' => 'nullable|exists:careers,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'linkedin_url' => 'nullable|url|max:255',
            'portfolio_url' => 'nullable|url|max:255',
            'cover_letter' => 'nullable|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB limit
        ]);

        try {
            // 3. Store uploaded CV
            $cvPath = $request->file('cv')->store('cvs', 'public');

            // 4. Create record in career_applications
            $application = CareerApplication::create(array_merge($validated, ['cv_path' => $cvPath]));

            // 5. Trigger email notification
            Mail::to('careers@arkan365.com')->send(new CareerApplicationMail($application));

            return response()->json([
                'success' => true,
                'message' => 'Your application has been submitted successfully!'
            ]);

        } catch (\Exception $e) {
            \Log::error('Career Application Submission Error: ' . $e->getMessage(), [
                'exception' => $e
            ]);
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your application. Please try again later.'
            ], 500);
        }
    }

    /**
     * Generate a new math captcha.
     */
    public function getCaptcha()
    {
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        $result = $num1 + $num2;

        session(['captcha_result' => $result]);

        return response()->json([
            'question' => "{$num1} + {$num2} = ?"
        ]);
    }
}
