@extends('layouts.tailwind')

@section('content')
    <a href="{{ route('posts.create') }}" class="px-3 py-2 text-white bg-indigo-500 hover:bg-indigo-600">Create</a>

    <table class="mt-4 min-w-full border divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50">
                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Title</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Post text</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Status</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Created at</span>
                </th>
                <th class="px-6 py-3 bg-gray-50">
                    <span class="text-xs font-medium tracking-wider leading-4 text-left text-gray-500 uppercase">Updated at</span>
                </th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            @foreach($posts as $post)
                <tr class="bg-white">
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ $post->post_text }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-center text-gray-900 whitespace-no-wrap">
                        @if (isset($post->published_at))
                            Published at {{ $post->published_at->format('Y-m-d H:m') }}
                        @else
                            <span class="px-2 py-1 text-blue-600 bg-blue-200 rounded-2xl">draft</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ $post->created_at }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ $post->updated_at }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
