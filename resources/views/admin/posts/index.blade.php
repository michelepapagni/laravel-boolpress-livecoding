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
                            <th>Categoria</th>
                            <th>Titolo</th>
                            <th>Slug</th>
                            <th>Content</th>
                            <th>Elimina</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>{{ str_limit($post->content, 10, '[...]') }}</td>
                                <td>
                                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" class="btn btn-danger" value="Elimina" />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $posts->links() }}
            </div>
        </div>
    </div>

@endsection
