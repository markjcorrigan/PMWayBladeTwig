@extends('layouts.bootstrap')

@section('content')
    <table class="table mt-4">
        <thead>
        <tr>
            <th class="col">
                Title
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach($posts as $post)
            <tr class="bg-white">
                <td>
                    <a href="{{ route('posts.show', $post) }}?design=bootstrap">{{ $post->title }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
