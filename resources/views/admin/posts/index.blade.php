@extends('layouts.admin_app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i Posts</h1>
                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                    Aggiungi Post
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ str_limit($post->content, 10, '[...]') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
