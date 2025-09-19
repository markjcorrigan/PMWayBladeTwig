@extends('admin.admin_dashboard')
@section('admin')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">All Posts </h6>

                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>Serial No:</th>
                                <th>Post Photo</th>
                                <th>Author</th>
                                <th>Post Title</th>
                                <th>Action</th>
                                <th>Created At</th>
                                <th>Approved</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $post)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td> <img src="{{ asset($post->photo) }}" alt=""> </td>
                                {{-- <td>{{ Str::title($post->user->name) }}</td>--}}
                                <td>{{ Str::title($post->user?->name) }}</td>
                                <td>{{ Str::limit($post->post_title, 70) }}</td>
                                <td>
                                    <a href="{{ route('edit.post', [$post->id]) }}" class="btn btn-inverse-light"
                                        style="margin-right: 10px;">Edit</a>
                                    <a href="{{ route('delete.post', [$post->id]) }}" id="delete"
                                        class="btn btn-inverse-danger">Delete</a>
                                </td>
                                <td>

                                    {{ $post->created_at->format('Y-m-d H:i') }}


                                </td>
                                <td>
                                    <div class="form-check form-switch mb-2">
                                        <input type="checkbox" class="form-check-input status-button"
                                            data-post-id="{{ $post->id }}" {{ $post->approved ? 'checked' : '' }}>
                                    </div>
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

<script>
    $(document).on('change', '.status-button', function () {
        let post_id = $(this).data('post-id');
        let is_checked = $(this).is(':checked');
        console.log('post ID: ' + post_id);
        console.log('Status: ' + is_checked);

        // Send an ajax request to activate or deactivate a post
        $.ajax({
            url: "{{ route('update.post.status') }}", // This route should be different from the one that displays all posts
            method: "POST",
            data: { _token: "{{ csrf_token() }}", post_id: post_id, approved: is_checked ? 1 : 0 },
            dataType: "json",
            success: function (result) {
                console.log('AJAX request successful');
                console.log(result);
                if (result.status == 200) {
                    toastr.success('post status updated successfully!');
                }
            },
            error: function (xhr, status, error) {
                console.log('AJAX request failed');
                console.log(xhr.responseText);
            }
        });
    });


</script>

@endsection