@extends('layouts.app')

@php
    $noNavbar = true;
    $noLoader = true;
    $noFooter = true;
@endphp

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <x-dashboard.sidebar active="portfolio" />

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto">
        <x-dashboard.header />
        
        <header class="bg-white border-b border-[#F0EDEA] px-8 py-6 sticky top-0 z-10 flex justify-between items-center bg-opacity-90 backdrop-blur-sm">
            <h1 class="font-radley text-2xl text-[#4A433A]">Portfolio Management</h1>
            <a href="{{ route('portfolio.create') }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#4A433A] text-white text-xs font-semibold uppercase tracking-widest rounded-lg hover:bg-[#322c26] transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add New Project
            </a>
        </header>

        <div class="p-8 lg:p-12">
            @if(session('success'))
                <div class="bg-green-50 text-green-600 p-4 rounded-lg mb-8 text-[10px] font-inter tracking-[0.1em] uppercase font-bold border border-green-100">
                    {{ session('success') }}
                </div>
            @endif

            <section class="bg-white border border-[#F0EDEA] rounded-xl overflow-hidden shadow-sm">
                <table class="w-full text-left font-inter text-sm">
                    <thead class="bg-[#F8F5F2] text-[9px] font-inter tracking-[0.3em] text-[#888] uppercase font-bold">
                        <tr>
                            <th class="px-8 py-5">Image</th>
                            <th class="px-8 py-5">Title</th>
                            <th class="px-8 py-5">Category</th>
                            <th class="px-8 py-5">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F0EDEA]">
                        @foreach($portfolios as $portfolio)
                        <tr class="hover:bg-[#FDFCFB] transition-colors">
                            <td class="px-8 py-6">
                                <img src="{{ asset('storage/' . $portfolio->image) }}" class="w-20 h-20 object-cover rounded-lg border border-[#F0EDEA]">
                            </td>
                            <td class="px-8 py-6 font-medium text-[#1A1A1A]">{{ $portfolio->title }}</td>
                            <td class="px-8 py-6 text-[#888] italic">{{ $portfolio->category }}</td>
                            <td class="px-8 py-6">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="text-[9px] font-inter tracking-[0.2em] text-[#C19A6B] uppercase font-bold hover:text-[#1A1A1A]">Edit</a>
                                    <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" onsubmit="return confirm('Silahkan konfirmasi penghapusan data ini.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-[9px] font-inter tracking-[0.2em] text-red-500 uppercase font-bold hover:text-red-700">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</div>
@endsection
