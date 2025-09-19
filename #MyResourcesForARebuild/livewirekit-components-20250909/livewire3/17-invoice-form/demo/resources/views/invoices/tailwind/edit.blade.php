@extends('layouts.tailwind')

@section('content')
    <livewire:invoice-form :invoice="$invoice" />
@endsection
