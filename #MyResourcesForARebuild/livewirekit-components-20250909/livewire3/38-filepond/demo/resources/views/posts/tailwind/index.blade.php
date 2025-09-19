@extends('layouts.tailwind')

@section('content')
    <a href="{{ route('posts.create') }}" class="px-3 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">Create post</a>

    <table class="mt-4 min-w-full border divide-y divide-gray-200">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50">
                <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Title</span>
            </th>
            <th class="px-6 py-3 bg-gray-50">
                <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Image</span>
            </th>
            <th class="px-6 py-3 bg-gray-50"></th>
        </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
        @foreach($posts as $post)
            <tr class="bg-white">
                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    {{ $post->title }}
                </td>
                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    <img src="{{ $post->getFirstMediaUrl('post_image', 'thumbnail') }}" alt="{{ $post->title }}">
                </td>
                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    <a href="{{ route('posts.edit', $post) }}" class="px-3 py-2 text-white bg-indigo-500 rounded hover:bg-indigo-600">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
