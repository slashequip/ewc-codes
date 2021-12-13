@extends('layouts.main')

@section('meta_title', "API Documentation")

@section('content')
    <div class="prose max-w-screen-lg mx-auto py-12">
        <h2>API Documentation</h2>
        <p>Our aim is to provide the simplest and most comprehensive, free, API available. We are always trying to
            improve so any feedback is welcome.</p>

        <h3 class="mb-2">Get All {{ $code_count }} Waste Codes</h3>
        <h4 class="text-base font-normal font-mono">https://ewccodes.com/api/codes</h4>
        <pre>{!! json_encode($codes->toArray(), JSON_PRETTY_PRINT) !!}</pre>

        <h3 class="mb-2">Get Single Waste Code</h3>
        <h4 class="text-base font-normal font-mono">https://ewccodes.com/api/codes/{{ $codes[0]->uuid->toString() }}</h4>
        <pre>{!! json_encode($codes[0]->toArray(), JSON_PRETTY_PRINT) !!}</pre>
    </div>
@endsection
