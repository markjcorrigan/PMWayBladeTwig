@extends('layouts.bootstrap')

@section('content')
    <a href="{{ route('posts.create') }}?design=bootstrap" class="btn btn-primary">Create</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th class="col">
                    Post title
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
                        <a href="{{ route('posts.edit', $post) }}?design=bootstrap" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
