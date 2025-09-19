@extends('layouts.bootstrap')

@section('content')
    @livewire('bookmark-count', [$post, 'designTemplate' => 'bootstrap'])
    <h4 class="text-lg font-bold">{{ $post->title }}</h4>

    <article class="my-4 text-justify">{{ $post->body }}</article>

    <div class="border border-gray-200 border-left-0 border-right-0 py-1">
        @livewire('reactions', [$post, 'designTemplate' => 'bootstrap'])
    </div>
@endsection
