@extends('layouts.bootstrap')

@section('content')
    <a href="{{ route('invoices.create') }}?design=bootstrap" class="btn btn-primary">Create</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">Customer name</th>
            <th scope="col">Email</th>
            <th scope="col">Created at</th>
            <th scope="col">Total</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoice)
            <tr>
                <th scope="row">{{ $invoice->customer_name }}</th>
                <td>{{ $invoice->customer_email }}</td>
                <td>{{ $invoice->created_at }}</td>
                <td>&dollar;{{ number_format($invoice->total, 2) }}</td>
                <td>
                    <a href="{{ route('invoices.edit', $invoice) }}?design=bootstrap" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
