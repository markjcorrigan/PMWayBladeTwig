@extends('layouts.tailwind')

@section('content')
    <a href="{{ route('invoices.create') }}" class="px-3 py-2 text-white bg-indigo-500 hover:bg-indigo-600">Create</a>

    <table class="mt-4 min-w-full divide-y divide-gray-200 border">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50">
                <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Customer name</span>
            </th>
            <th class="px-6 py-3 bg-gray-50">
                <span
                    class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</span>
            </th>
            <th class="px-6 py-3 bg-gray-50">
                <span
                    class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Created at</span>
            </th>
            <th class="px-6 py-3 bg-gray-50">
                <span
                    class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Total</span>
            </th>
            <th class="px-6 py-3 bg-gray-50"></th>
        </tr>
        </thead>

        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
        @foreach($invoices as $invoice)
            <tr class="bg-white">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ $invoice->customer_name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ $invoice->customer_email }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ $invoice->created_at }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    &dollar;{{ number_format($invoice->total, 2) }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    <a href="{{ route('invoices.edit', $invoice) }}" class="px-3 py-2 text-white bg-indigo-500 hover:bg-indigo-600">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
