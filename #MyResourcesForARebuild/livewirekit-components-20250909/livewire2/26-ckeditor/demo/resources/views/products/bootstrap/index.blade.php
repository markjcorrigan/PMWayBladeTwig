@extends('layouts.bootstrap')

@section('content')
    <a href="{{ route('products.create') }}?design=bootstrap" class="btn btn-primary">Create</a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th class="col">
                    Product name
                </th>
                <th class="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr class="bg-white">
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        <a href="{{ route('products.edit', $product) }}?design=bootstrap" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection