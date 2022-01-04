@extends('layouts.main')

@section('meta_title', "Browse all EWC codes")

@section('content')
    <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 prose">
        <h1 class="text-gray-600 flex items-center">
            Chapter <span class="hidden">{{ $chapter->title }}</span>
        </h1>
    </div>

    <div class="max-w-screen-lg py-12 mx-auto grid gap-4 grid-cols-1">
        <x-classification-card
            identifier="{{ $chapter->formattedIdentifier() }}"
            title="{{ $chapter->title }}"
            sub-title="Chapter {{ $chapter->formattedIdentifier() }}"
        ></x-classification-card>
    </div>

    <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 prose mt-6">
        <h2 class="text-4xl font-bold text-gray-600 flex items-center">
            Sub-Chapters
            <span class="ml-4 inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold bg-green-600 text-white">
                {{ $children->count() }}
            </span>
        </h2>
    </div>

    <div class="max-w-screen-lg py-12 mx-auto grid gap-4 grid-cols-3">
        @foreach($children as $child)
            <x-classification-card
                url='{{ url("/browse/{$chapter->formattedIdentifier()}/{$child->formattedIdentifier()}") }}'
                identifier="{{ $child->formattedIdentifier() }}"
                title="{{ $child->title }}"
                sub-title="Sub-Chapter {{ $chapter->formattedIdentifier() }} {{ $child->formattedIdentifier() }}"
            ></x-classification-card>
        @endforeach
    </div>
@endsection
