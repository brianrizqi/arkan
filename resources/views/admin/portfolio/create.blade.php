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

        <div class="p-8 lg:p-12 max-w-2xl">
            <section class="bg-white border border-[#F0EDEA] p-8 rounded-xl shadow-sm">
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Portfolio Title</label>
                        <input type="text" name="title" required class="w-full border-b border-[#F0EDEA] py-3 focus:border-[#C19A6B] outline-none font-serif-luxury text-lg transition-colors" placeholder="Enter title...">
                    </div>

                    <div>
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Category</label>
                        <input type="text" name="category" class="w-full border-b border-[#F0EDEA] py-3 focus:border-[#C19A6B] outline-none font-inter text-sm transition-colors" placeholder="e.g. Design Excellence">
                    </div>

                    <div>
                        <label class="block text-[9px] font-inter tracking-[0.3em] text-[#C19A6B] uppercase mb-2 font-bold">Image</label>
                        <input type="file" name="image" required class="w-full py-3 text-[10px] font-inter tracking-[0.1em] text-[#888]">
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full py-4 bg-[#1A1A1A] text-white text-[10px] font-inter tracking-[0.3em] uppercase font-bold rounded-lg hover:bg-[#C19A6B] transition-all">Create Portfolio</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
</div>
@endsection
