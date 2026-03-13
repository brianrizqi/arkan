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
            <h1 class="font-radley text-2xl text-[#4A433A]">Career Applications</h1>
        </header>

        <div class="p-8">
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-xl text-sm font-medium flex items-center gap-3 animate-fade-in">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-[#F0EDEA] rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-[#FDFCFB] border-b border-[#F0EDEA]">
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174]">Applicant</th>
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174]">Position</th>
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174]">Submitted At</th>
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174] text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F0EDEA]">
                        @forelse($applications as $application)
                        <tr class="hover:bg-[#FDFCFB] transition-colors group">
                            <td class="px-8 py-6">
                                <div class="font-semibold text-[#4A433A]">{{ $application->first_name }} {{ $application->last_name }}</div>
                                <div class="text-[11px] text-[#8A8174] mt-1">{{ $application->email }}</div>
                            </td>
                            <td class="px-8 py-6">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[10px] font-medium bg-[#F0EDEA] text-[#4A433A] uppercase tracking-wider">
                                    {{ $application->career->title ?? 'Speculative Application' }}
                                </span>
                            </td>
                            <td class="px-8 py-6 text-sm text-[#8A8174]">{{ $application->created_at->format('M d, Y H:i') }}</td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end gap-3">
                                    <a href="{{ route('career-application.show', $application) }}" class="p-2 text-[#8A8174] hover:text-[#4A433A] transition-colors" title="View Details">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                    </a>
                                    <form action="{{ route('career-application.destroy', $application) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this application?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-[#8A8174] hover:text-red-500 transition-colors">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-8 py-12 text-center text-[#8A8174] italic">
                                No applications received yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-6">
                {{ $applications->links() }}
            </div>
        </div>
    </main>
</div>
@endsection
