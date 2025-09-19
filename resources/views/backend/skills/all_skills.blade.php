@extends('admin.admin_dashboard')
@section('admin')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">My Skills</h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Icon</th>
        <th>Technology Name</th>
        <th>Experience Level</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($allSkills as $key => $skill)
            <tr>
                <td>{{ $key+1 }}</td>
                <td> <img src="{{ asset($skill->icon) }}" alt=""> </td>
                <td>{{ Str::title($skill->technology_name) }}</td>
                <td>{{ $skill->exp_level }}</td>
                <td>
                    <a href="{{ route('edit.skill', [$skill->id]) }}"  class="btn btn-inverse-light" style="margin-right: 10px;">Edit</a>
                    <a href="{{ route('delete.skill', [$skill->id]) }}" id="delete"  class="btn btn-inverse-danger">Delete</a>
                </td>
           </tr>
        @endforeach

    </tbody>
  </table>
</div>
</div>
</div>
    </div>
</div>

@endsection

