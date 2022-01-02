@extends('layouts.main')

@section('meta_title', "Browse all EWC codes")

@section('content')
    <div class="max-w-screen-lg py-12 mx-auto grid gap-4 grid-cols-3">
        @foreach($chapters as $chapter)
            <a
                href='{{ url("/browse/{$chapter->formattedIdentifier()}") }}'
                class="block flex-1 bg-white rounded-lg shadow-lg p-6 relative"
            >
                <span class="absolute top-0 right-0 mr-2 mt-2 text-7xl text-green-600/30 font-bold">{{ $chapter->formattedIdentifier() }}</span>
                <p class="text-sm font-medium text-green-600 relative z-10 mb-2">Chapter</p>
                <p class="text-3xl font-light text-gray-500 relative z-10">{{ $chapter->title; }}</p>
            </a>
        @endforeach
    </div>
@endsection
