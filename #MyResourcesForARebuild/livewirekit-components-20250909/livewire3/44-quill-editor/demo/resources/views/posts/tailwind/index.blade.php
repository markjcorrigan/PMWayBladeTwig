@extends('layouts.tailwind')

@section('content')
    <a href="{{ route('posts.create') }}" class="rounded-md bg-indigo-500 px-3 py-2 text-white hover:bg-indigo-600">Create</a>

    <table class="mt-4 min-w-full border divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="bg-gray-50 px-6 py-3">
                    <span class="text-left text-xs font-medium uppercase leading-4 tracking-wider text-gray-500">Post title</span>
                </th>
                <th class="w-24 bg-gray-50 px-6 py-3"></th>
            </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            @foreach($posts as $post)
                <tr class="bg-white">
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                        <a href="{{ route('posts.edit', $post) }}" class="rounded-md bg-indigo-500 px-3 py-2 text-white hover:bg-indigo-600">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
