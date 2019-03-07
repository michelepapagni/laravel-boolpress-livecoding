@extends('layouts.app')

@section('content')

    @include('partials.category_form')

    <div style="display: none" id="display-if">
        <h1>Pubblicità progresso</h1>
    </div>

    <h1>Gli ultimi 5 Posts</h1>

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
