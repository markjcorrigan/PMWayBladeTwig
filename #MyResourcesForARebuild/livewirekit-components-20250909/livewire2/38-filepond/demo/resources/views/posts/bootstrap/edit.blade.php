@extends('layouts.bootstrap')

@section('content')
    @livewire('post-form', [$post, 'designTemplate' => 'bootstrap'])
@endsection
