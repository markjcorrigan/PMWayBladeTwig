@extends('layouts.bootstrap')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">User</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>
                        {{ $project->title }}
                    </td>
                    <td>
                        {{ $project->user->name }}
                    </td>
                    <td>
                        <a href="{{ route('projects.show', [$project, 'design' => 'bootstrap']) }}" class="btn btn-sm btn-primary">SHOW</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
