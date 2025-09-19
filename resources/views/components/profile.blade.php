<x-layout :doctitle="$doctitle">
  @php

  $approvedCount = \App\Models\BlogPost::approvedCount();

  @endphp

  <div class="col-lg-10 offset-lg-1 py-3 py-md-5">
    <h4 class="display-4 lead text-muted">Remember Writing?</h4>
    <div wire:ignore>
      <p class="lead text-muted">Are you sick of short tweets and impersonal &ldquo;shared&rdquo; posts that
        are reminiscent of the late 90&rsquo;s email forwards? We believe getting back to actually writing is
        the key to enjoying the internet again. Our users have authored {{ $approvedCount }} posts.</p>
      <p class="lead text-muted">Your list of approved posts is below.</p>
    </div>

    <div class="container py-md-5 container">
      <h2>
        <img class="avatar-small" src="{{$sharedData['avatar']}}" /> {{$sharedData['name']}}
        @auth
        @if(!$sharedData['currentlyFollowing'] AND auth()->user()->name != $sharedData['name'])
        <livewire:addfollow :name="$sharedData['name']" />
        @endif

        @if($sharedData['currentlyFollowing'])
        <livewire:removefollow :name="$sharedData['name']" />
        @endif

        @if(auth()->user()->name == $sharedData['name'])
        <a wire:navigate href="/manage-avatar" class="btn btn-secondary btn-sm">Manage Avatar</a>
        @endif
        @endauth
      </h2>

      <div class="profile-nav nav nav-tabs pt-2 mb-4">
        <a wire:navigate href="/profile/{{$sharedData['name']}}"
          class="profile-nav-link nav-item nav-link {{ Request::segment(3) == "" ? " active" : "" }}">Posts:
          {{$sharedData['postCount']}} | {{ \App\Models\BlogPost::approvedByUser($sharedData['name'])->count() }}
        </a>
        <a wire:navigate href="/profile/{{$sharedData['name']}}/followers"
          class="profile-nav-link nav-item nav-link {{ Request::segment(3) == " followers" ? "active" : ""
          }}">Followers:
          {{$sharedData['followerCount']}}</a>
        <a wire:navigate href="/profile/{{$sharedData['name']}}/following"
          class="profile-nav-link nav-item nav-link {{ Request::segment(3) == " following" ? "active" : ""
          }}">Following:
          {{$sharedData['followingCount']}}</a>
      </div>

      <div class="profile-slot-content">
        {{$slot}}


      </div>
    </div>

  </div>
</x-layout>