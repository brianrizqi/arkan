@extends('layouts.app')

@php
    $noNavbar = true;
    $noLoader = true;
    $noFooter = true;
@endphp

@section('content')
<div class="min-h-screen bg-[#FDFCFB] flex">
    <x-dashboard.sidebar active="career" />

    <main class="flex-1 overflow-y-auto">
        <x-dashboard.header />
        <header class="bg-white border-b border-[#F0EDEA] px-8 py-6 sticky top-0 z-10 flex justify-between items-center bg-opacity-90 backdrop-blur-sm">
            <h1 class="font-radley text-2xl text-[#4A433A]">Edit Opening</h1>
            <a href="{{ route('career.index') }}" class="text-sm font-medium text-[#8A8174] hover:text-[#4A433A]">Cancel</a>
        </header>

        <div class="p-8 max-w-4xl">
            <div class="bg-white border border-[#F0EDEA] rounded-2xl p-8 shadow-sm">
                <form action="{{ route('career.update', $career) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Job Title</label>
                            <input type="text" name="title" value="{{ old('title', $career->title) }}" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors" placeholder="e.g. Senior Product Designer">
                            @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Category</label>
                            <select name="category_id" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id', $career->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <p class="mt-2"><a href="{{ route('career-category.create') }}" class="text-[9px] text-[#C19A6B] uppercase tracking-widest font-bold font-inter hover:underline">+ Manage Categories</a></p>
                            @error('category_id') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Location</label>
                            <input type="text" name="location" value="{{ old('location', $career->location) }}" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Employment Type</label>
                            <input type="text" name="type" value="{{ old('type', $career->type) }}" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Experience Level</label>
                            <input type="text" name="level" value="{{ old('level', $career->level) }}" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Work Mode</label>
                            <input type="text" name="work_mode" value="{{ old('work_mode', $career->work_mode) }}" class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors" placeholder="e.g. On-site, Hybrid, Remote">
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Reporting To</label>
                            <input type="text" name="reporting_to" value="{{ old('reporting_to', $career->reporting_to) }}" class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors" placeholder="e.g. Head of Design">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Closing Date (Optional)</label>
                            <input type="date" name="closing_date" value="{{ $career->closing_date }}" class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Description / Opportunity</label>
                            <textarea name="description" rows="4" required class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">{{ old('description', $career->description) }}</textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Responsibilities (One per line)</label>
                            <textarea name="responsibilities" rows="5" class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">{{ old('responsibilities', $career->responsibilities) }}</textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Requirements (One per line)</label>
                            <textarea name="requirements" rows="5" class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">{{ old('requirements', $career->requirements) }}</textarea>
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-[10px] font-bold uppercase tracking-widest text-[#8A8174] mb-2">Benefits (One per line)</label>
                            <textarea name="benefits" rows="5" class="w-full bg-[#FDFCFB] border border-[#F0EDEA] px-4 py-3 rounded-xl focus:outline-none focus:border-[#4A433A] transition-colors">{{ old('benefits', $career->benefits) }}</textarea>
                        </div>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-10 py-4 bg-[#4A433A] text-white text-[10px] font-bold uppercase tracking-widest rounded-xl hover:bg-[#322c26] transition-all">
                            Update Role
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection
