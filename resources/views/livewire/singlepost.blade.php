<div class="container py-md-5 container--narrow">
    <div class="d-flex justify-content-between">
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif


        <h2>{{$post->title}}</h2>
        <div class="d-inline-flex align-items-center">
            @can('update post', $post)
            <a wire:navigate href="/post/{{$post->id}}/edit" class="text-primary mr-2" data-toggle="tooltip"
                data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
            @endcan
            @can('delete post', $post)
            <livewire:deletepost :post="$post" />
            @endcan
        </div>

    </div>
    <p class="text-muted small mb-4">
        <a wire:navigate href="/profile/{{$post->user->name}}"><img class="avatar-tiny"
                src="{{$post->user->avatar}}" /></a>
        Posted by <a wire:navigate href="/profile/{{$post->user->name}}">{{$post->user->username}}</a> on
        {{$post->created_at->format('n/j/Y')}}
    </p>
    @if($post->photo)
    <img src="/{{ $post->photo }}" alt="Post Photo" class="img-fluid mb-4">

    @endif
    <div class="body-content">
        {!! $post->post_description !!}


    </div>
</div>


{{--<div class="container py-md-5 container--narrow">
    <div>
        <div class="d-flex justify-content-between align-items-center">
            <h2>{{$post->post_title}}</h2>
            <div>
                <!-- @can('edit post', $post)
                <a wire:navigate href="/post/{{$post->id}}/edit" class="text-primary mr-2" data-toggle="tooltip"
                    data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                @endcan
                @can('delete post', $post)
                <a wire:navigate href="/post/{{$post->id}}/delete"
                    onclick="return confirm('Are you sure you want to delete this post?')" class="text-danger"
                    data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                @endcan -->

                @can('update', $post)
                <span class="pt-2">
                    <a wire:navigate href="/post/{{$post->id}}/edit" class="text-primary mr-2" data-toggle="tooltip"
                        data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                    <livewire:deletepost :post="$post" />
                </span>
                @endcan

            </div>
        </div>
        <p class="text-muted small mb-4">
            @if($post->user)
            <a wire:navigate href="/profile/{{$post->user->name}}"><img class="avatar-tiny"
                    src="{{$post->user->avatar}}" /></a> Posted by <a wire:navigate
                href="/profile/{{$post->user->name}}">{{$post->user->name}}</a>
            @else
            Posted by Unknown User
            @endif
            on {{$post->created_at->format('n/j/Y')}}
        </p>
        <p>
            <!-- Slug: <a href="/post/{{$post->post_slug}}">{{$post->post_slug}}</a> -->
            Slug: {{$post->post_slug}}
        </p>
        <p>
            Tags:
            @if($post->post_tags)
            @foreach(explode(',', $post->post_tags) as $tag)
            <span class="badge badge-secondary">{{$tag}}</span>
            @endforeach
            @else
            No tags
            @endif
        </p>
        @if($post->photo)
        <img src="/{{ $post->photo }}" alt="Post Photo" class="img-fluid mb-4"
            style="max-width: 300px; max-height: 300px;">
        @endif
        <div class="body-content">
            {!! $post->post_description !!}
        </div>

    </div>
</div> --}}