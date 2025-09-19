@extends('layouts.bootstrap')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">User</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        <a href="{{ route('users.show', [$user, 'design' => 'bootstrap']) }}" class="btn btn-sm btn-primary">SHOW</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
