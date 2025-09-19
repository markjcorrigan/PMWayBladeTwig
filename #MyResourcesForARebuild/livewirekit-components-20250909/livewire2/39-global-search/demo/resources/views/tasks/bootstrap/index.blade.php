@extends('layouts.bootstrap')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Project</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>
                        {{ $task->title }}
                    </td>
                    <td>
                        {{ $task->project->title }}
                    </td>
                    <td>
                        <a href="{{ route('tasks.show', [$task, 'design' => 'bootstrap']) }}" class="btn btn-sm btn-primary">SHOW</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
