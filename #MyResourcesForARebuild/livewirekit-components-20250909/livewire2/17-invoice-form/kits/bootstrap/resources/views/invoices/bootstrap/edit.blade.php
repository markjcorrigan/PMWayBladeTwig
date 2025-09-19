@extends('layouts.bootstrap')

@section('content')
    @livewire('invoice-form', ['invoice' => $invoice, 'designTemplate' => 'bootstrap'])
@endsection
