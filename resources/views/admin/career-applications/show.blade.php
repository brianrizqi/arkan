@extends('layouts.app')

@php
    $noNavbar = true;
    $noLoader = true;
    $noFooter = true;
@endphp

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <x-dashboard.sidebar active="career-application" />

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
        <x-dashboard.header />
        
        <header class="bg-white border-b border-[#F0EDEA] px-8 py-6 sticky top-0 z-10 flex justify-between items-center bg-opacity-90 backdrop-blur-sm">
            <div class="flex items-center gap-4">
                <a href="{{ route('career-application.index') }}" class="p-2 text-[#8A8174] hover:text-[#4A433A] transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <h1 class="font-radley text-2xl text-[#4A433A]">Application Details</h1>
            </div>
        </header>

        <div class="p-8 max-w-4xl mx-auto">
            <div class="bg-white border border-[#F0EDEA] rounded-2xl overflow-hidden shadow-sm">
                <!-- Applicant Info Header -->
                <div class="p-8 border-b border-[#F0EDEA] bg-[#FDFCFB]">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold text-[#4A433A]">{{ $application->first_name }} {{ $application->last_name }}</h2>
                            <p class="text-[#8A8174] mt-1">{{ $application->email }} • {{ $application->phone ?? 'No phone provided' }}</p>
                        </div>
                        <span class="inline-flex items-center px-4 py-1.5 rounded-full text-[11px] font-bold bg-[#4A433A] text-white uppercase tracking-widest">
                            {{ $application->career->title ?? 'Speculative Application' }}
                        </span>
                    </div>
                </div>

                <!-- Info Grid -->
                <div class="p-8 space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Applied For</h4>
                            <p class="text-[#4A433A] font-medium">{{ $application->career->title ?? 'Speculative Application' }}</p>
                        </div>
                        <div>
                            <h4 class="text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Submission Date</h4>
                            <p class="text-[#4A433A] font-medium">{{ $application->created_at->format('M d, Y H:i') }}</p>
                        </div>
                        @if($application->linkedin_url)
                        <div>
                            <h4 class="text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">LinkedIn Profile</h4>
                            <a href="{{ $application->linkedin_url }}" target="_blank" class="text-[#C19A6B] hover:underline flex items-center gap-2">
                                View Profile
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                        @endif
                        @if($application->portfolio_url)
                        <div>
                            <h4 class="text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Portfolio / Website</h4>
                            <a href="{{ $application->portfolio_url }}" target="_blank" class="text-[#C19A6B] hover:underline flex items-center gap-2">
                                View Portfolio
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                        @endif
                    </div>

                    <div class="pt-8 border-t border-[#F0EDEA]">
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-4">Cover Letter / Message</h4>
                        <div class="bg-[#FDFCFB] p-6 rounded-xl border border-[#F0EDEA] text-[#4A433A] leading-relaxed whitespace-pre-wrap text-sm">
                            {{ $application->cover_letter ?? 'No cover letter provided.' }}
                        </div>
                    </div>

                    <div class="pt-8 border-t border-[#F0EDEA]">
                        <h4 class="text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-4">Resume / CV</h4>
                        <a href="{{ asset('storage/' . $application->cv_path) }}" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 bg-[#4A433A] text-white text-xs font-bold uppercase tracking-widest rounded-lg hover:bg-[#322c26] transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            Download Curriculum Vitae
                        </a>
                    </div>
                </div>
            </div>

            <!-- Admin Actions -->
            <div class="mt-8 flex justify-between font-inter">
                <form action="{{ route('career-application.destroy', $application) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this application permanently?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-xs font-bold text-red-500 uppercase tracking-widest hover:text-red-700 transition-colors">
                        Delete Application
                    </button>
                </form>
                <a href="mailto:{{ $application->email }}" class="text-xs font-bold text-[#C19A6B] uppercase tracking-widest hover:text-[#4A433A] transition-colors">
                    Reply to Applicant
                </a>
            </div>
        </div>
    </main>
</div>
@endsection
