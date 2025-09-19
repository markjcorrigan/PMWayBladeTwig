@extends('layouts.bootstrap')

@section('content')
    <a href="{{ route('posts.create') }}?design=bootstrap" class="btn btn-primary">Create</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Post text</th>
            <th scope="col">Status</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->title }}</th>
                <td>{{ $post->post_text }}</td>
                <td>
                    @if (isset($post->published_at))
                        Published at {{ $post->published_at->format('Y-m-d H:m') }}
                    @else
                        <span class="badge badge-info">draft</span>
                    @endif
                </td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
