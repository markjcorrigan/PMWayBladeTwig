@extends('layouts.bootstrap')

@section('content')
    <livewire:post-form :post="$post" designTemplate="bootstrap" />
@endsection
