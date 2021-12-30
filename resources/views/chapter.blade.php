@extends('layouts.main')

@section('meta_title', "Browse all EWC codes")

@section('content')
    CHAPTER {{ $chapter->title }}

    @foreach($children as $child)
        <p>{{ $child->title }}</p>
    @endforeach
@endsection
