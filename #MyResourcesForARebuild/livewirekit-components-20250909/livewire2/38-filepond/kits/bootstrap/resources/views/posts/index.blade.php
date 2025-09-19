@extends('layouts.bootstrap')

@section('content')
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create post</a>

    <table class="table mt-4">
        <thead>
        <tr>
            <th class="col">
                Title
            </th>
            <th class="col">
                Image
            </th>
            <th class="col"></th>
        </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr class="bg-white">
                <td>
                    {{ $post->title }}
                </td>
                <td>
                    <img src="{{ $post->getFirstMedia('post_image')->getUrl('thumbnail') }}" alt="{{ $post->title }}">
                </td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
