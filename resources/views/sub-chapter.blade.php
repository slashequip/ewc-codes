@extends('layouts.main')

@section('meta_title', "Browse all EWC codes")

@section('content')
    <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 prose">
        <h1 class="text-gray-600 flex items-center">
            Sub-Chapter <span class="hidden">{{ $subChapter->title }}</span>
        </h1>
    </div>

    <div class="max-w-screen-lg py-12 mx-auto grid gap-4 grid-cols-1">
        <x-classification-card
            identifier="{{ $subChapter->formattedIdentifier() }}"
            title="{{ $subChapter->title }}"
            sub-title="Sub-Chapter {{ $chapter->formattedIdentifier() }} {{ $subChapter->formattedIdentifier() }}"
        ></x-classification-card>
    </div>

    <div class="max-w-screen-lg mx-auto grid gap-4 grid-cols-1 prose mt-6">
        <h2 class="text-4xl font-bold text-gray-600 flex items-center">
            EWC Codes
            <span class="ml-4 inline-flex items-center px-3 py-0.5 rounded-full text-sm font-bold bg-green-600 text-white">
                {{ $codes->count() }}
            </span>
        </h2>
    </div>

    <div class="max-w-screen-lg py-12 mx-auto grid gap-4 grid-cols-3">
        @foreach($codes as $code)
            <x-classification-card
                url='{{ url("/browse/{$chapter->formattedIdentifier()}/{$subChapter->formattedIdentifier()}/$code->code") }}'
                identifier="{{ $code->code }}{{ $code->getHazardousText() }}"
                title="{{ $code->code_description }}"
                sub-title="Ewc Code {{ $code->full_code }}"
            ></x-classification-card>
        @endforeach
    </div>
@endsection
