@extends('layouts.main')

@section('meta_title', "Browse all EWC codes")

@section('content')
    <div class="max-w-screen-lg py-12 mx-auto grid gap-4 grid-cols-3">
        @foreach($chapters as $chapter)
            <x-classification-card
                url='{{ url("/browse/{$chapter->formattedIdentifier()}") }}'
                identifier="{{ $chapter->formattedIdentifier() }}"
                title="{{ $chapter->title }}"
                sub-title="Chapter {{ $chapter->formattedIdentifier() }}"
                counter-title="Sub-Chapters"
                counter="{{ $chapter->children->count() }}"
            ></x-classification-card>
        @endforeach
    </div>
@endsection
