@extends('layouts.app')

@section('content')

    <h1>Post della categoria: {{ $category->name }}</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->slug) }}">
                    {{ $post->title }} ({{ $post->id }})
                </a>
            </li>
        @endforeach
    </ul>

@endsection
