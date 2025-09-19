@extends('layouts.bootstrap')

@section('content')
    @livewire('product-form', [$product, 'designTemplate' => 'bootstrap'])
@endsection