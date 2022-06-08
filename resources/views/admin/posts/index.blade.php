@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary">Aggiungi un nuovo post</a>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                    <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>
                        <p>
                            {{$post->content}}
                        </p>
                    </td>
                    <td>
                        <img src="{{$post->image}}" alt="{{$post->title}}" style="width: 200px">
                    </td>
                    <td>{{$post->slug}}</td>
                    <td>
                        <a href="{{ route('admin.posts.show', $post->id)}}" class="btn btn-info">Show Details</a>
                        <a href="{{ route('admin.posts.edit', $post->id)}}" class="btn btn-warning">Edit Post</a>
                    </td>
                    </tr>
                @empty
                    <h2>Nessun Post presente</h2>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection