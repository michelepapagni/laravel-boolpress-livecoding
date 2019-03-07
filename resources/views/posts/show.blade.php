@extends('layouts.app')
@section('content')

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->content }}</p>

    <a href="{{ route('categories.posts', $post->category->slug) }}">{{ $post->category->name }}</a>

@endsection
