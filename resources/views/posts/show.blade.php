@extends('layouts.app')

@section("content")
    <div class="container">
        <img src="/storage/{{$post->image}}" alt="{{$post->caption}}">
    </div>

@endsection
