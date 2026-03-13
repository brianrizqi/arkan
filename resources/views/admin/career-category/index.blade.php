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
            <h1 class="font-radley text-2xl text-[#4A433A]">Career Categories</h1>
            <a href="{{ route('career-category.create') }}" class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#4A433A] text-white text-xs font-semibold uppercase tracking-widest rounded-lg hover:bg-[#322c26] transition-all">
                Add New Category
            </a>
        </header>

        <div class="p-8">
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-100 text-green-600 px-6 py-4 rounded-xl text-sm font-medium flex items-center gap-3">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white border border-[#F0EDEA] rounded-2xl overflow-hidden shadow-sm">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-[#FDFCFB] border-b border-[#F0EDEA]">
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174]">Category Name</th>
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174]">Slug</th>
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174]">Roles Count</th>
                            <th class="px-8 py-5 text-[10px] font-bold uppercase tracking-widest text-[#8A8174] text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#F0EDEA]">
                        @forelse($categories as $category)
                        <tr class="hover:bg-[#FDFCFB] transition-colors">
                            <td class="px-8 py-6 font-semibold text-[#4A433A]">{{ $category->name }}</td>
                            <td class="px-8 py-6 text-sm text-[#8A8174]">{{ $category->slug }}</td>
                            <td class="px-8 py-6 text-sm text-[#8A8174]">{{ $category->careers_count }}</td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex justify-end gap-3">
                                    <a href="{{ route('career-category.edit', $category) }}" class="p-2 text-[#8A8174] hover:text-[#4A433A]">Edit</a>
                                    <form action="{{ route('career-category.destroy', $category) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this category?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="p-2 text-red-400 hover:text-red-600">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-8 py-12 text-center text-[#8A8174] italic">No categories found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
@endsection
