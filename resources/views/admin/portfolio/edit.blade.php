@extends('layouts.app')

@php
    $noNavbar = true;
    $noLoader = true;
    $noFooter = true;
@endphp

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <x-dashboard.sidebar active="portfolio" />

    <main class="flex-grow flex flex-col min-w-0">
        <x-dashboard.header />
        <header class="h-20 bg-white border-b border-[#F0EDEA] flex items-center justify-between px-8">
            <h2 class="font-serif-luxury text-xl text-[#1A1A1A]">Edit Project</h2>
            <a href="{{ route('portfolio.index') }}" class="text-[10px] font-inter tracking-[0.2em] uppercase font-bold text-[#C19A6B]">Back to List</a>
        </header>

        <div class="p-8 lg:p-12 max-w-2xl">
            <section class="bg-white border border-[#F0EDEA] p-8 rounded-xl shadow-sm">
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Portfolio Title</label>
                        <input type="text" name="title" value="{{ $portfolio->title }}" required class="w-full border-b border-[#F0EDEA] py-3 focus:border-[#C19A6B] outline-none font-serif-luxury text-lg transition-colors">
                    </div>

                    <div>
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Category</label>
                        <input type="text" name="category" value="{{ $portfolio->category }}" class="w-full border-b border-[#F0EDEA] py-3 focus:border-[#C19A6B] outline-none font-inter text-sm transition-colors">
                    </div>

                    <div>
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Current Image</label>
                        <img src="{{ asset('storage/' . $portfolio->image) }}" class="w-20 h-20 object-cover rounded-lg mb-4 border border-[#F0EDEA]">
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Change Image</label>
                        <input type="file" name="image" class="w-full py-3 text-[10px] font-inter tracking-[0.1em] text-[#888]">
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-[#1A1A1A] text-white text-[10px] font-inter tracking-[0.3em] uppercase font-bold rounded-lg hover:bg-[#C19A6B] transition-all">Update Portfolio</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
</div>
@endsection
