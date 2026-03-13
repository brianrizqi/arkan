@extends('layouts.app')

@php
    $noNavbar = true;
    $noLoader = true;
    $noFooter = true;
@endphp

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <x-dashboard.sidebar active="career-category" />

    <main class="flex-1 overflow-y-auto">
        <x-dashboard.header />
        <header class="bg-white border-b border-[#F0EDEA] px-8 py-6 sticky top-0 z-10 flex justify-between items-center bg-opacity-90 backdrop-blur-sm">
            <h1 class="font-radley text-2xl text-[#4A433A]">Edit Category</h1>
            <a href="{{ route('career-category.index') }}" class="text-sm font-medium text-[#8A8174]">Cancel</a>
        </header>

        <div class="p-8 max-w-xl">
            <div class="bg-white border border-[#F0EDEA] rounded-2xl p-8 shadow-sm">
                <form action="{{ route('career-category.update', $career_category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Category Name</label>
                        <input type="text" name="name" value="{{ old('name', $career_category->name) }}" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A]">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-10 py-4 bg-[#4A433A] text-white text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-[#322c26]">
                            Update Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
