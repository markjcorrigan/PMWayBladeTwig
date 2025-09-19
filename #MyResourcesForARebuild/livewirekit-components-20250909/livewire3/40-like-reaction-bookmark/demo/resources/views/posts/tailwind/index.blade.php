@extends('layouts.tailwind')

@section('content')
    <table class="table min-w-full">
        <thead>
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">
                    Title
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                        <a class="hover:underline" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5" colspan="3">
                        No posts found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
