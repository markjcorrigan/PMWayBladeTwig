@extends('layouts.tailwind')

@section('content')
    <livewire:bookmark-count :post="$post" />
    <h1 class="text-lg font-bold">{{ $post->title }}</h1>

    <article class="my-4 text-justify leading-relaxed">{{ $post->body }}</article>

    <div class="border border-gray-200 border-l-0 border-r-0 py-1">
        <livewire:reactions :post="$post" />
    </div>
@endsection
