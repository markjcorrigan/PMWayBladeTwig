<script src="https://cdn.tailwindcss.com"></script>
<title>Blog</title>
<x-blog-loading-preloader />
<section class="breadcrumb_area" data-bg-image="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg') }}"
    data-bg-color="#140C1C">
    <div class="container">
        @php
        $firstPost = App\Models\BlogPost::where('approved', 1)->oldest()->first();
        $firstPostId = $firstPost ? $firstPost->id : null;
        @endphp

        <div class="row justify-content-end">
            <div class="col-auto">
                <div class="d-flex justify-content-end align-items-center">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section" id="blog-section">

    <style>
        .btn.tj-btn-primary {
            position: relative;
        }

        .btn.tj-btn-primary::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            /* Changed from 2px to 1px */
            bottom: 0;
            left: 50%;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn.tj-btn-primary:hover::after {
            width: 100%;
            left: 0;
        }

        .custom-breadcrumbs a {
            color: white !important;
        }

        .custom-breadcrumbs a:hover {
            color: #ccc !important;
            /* Change to your desired hover color */
        }


        .custom-breadcrumbs a[href*="{{ Request::url() }}"] {
            text-decoration: underline;
        }

        .custom-breadcrumbs .active {
            text-decoration: underline;
            text-decoration-color: white;
            text-underline-offset: 4px;
            text-decoration-thickness: 2px;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="grid grid-cols-12">
                <div class="col-start-1 col-span-1 ">
                    <flux:breadcrumbs>
                        <div class="custom-breadcrumbs">
                            <flux:breadcrumbs>
                                <div class="custom-breadcrumbs">
                                    <flux:breadcrumbs>
                                        <flux:breadcrumbs.item class="{{ Request::is('/') ? 'active' : '' }}" href="/"
                                            separator="slash">Home
                                        </flux:breadcrumbs.item>
                                        <flux:breadcrumbs.item class="{{ Request::is('blog') ? 'active' : '' }}"
                                            href="/blog" separator="slash">Blog
                                        </flux:breadcrumbs.item>
                                        <flux:breadcrumbs.item
                                            class="{{ Request::is('post/details/*') ? 'active' : '' }}"
                                            href="{{ url('/post/details/' . $firstPostId) }}" separator="slash">Posts
                                        </flux:breadcrumbs.item>
                                    </flux:breadcrumbs>
                                </div>
                            </flux:breadcrumbs>
                        </div>
                    </flux:breadcrumbs>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-header text-center">
                    <br><br>

                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">6 latest posts</h2>
                    <br><br>
                    <span class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                    </span>
                    {{-- <span class="header-button ms-3">--}}
                        {{-- <a href="{{ url('/') }}" class="btn tj-btn-primary">Home</a>--}}
                        {{-- </span>&nbsp;&nbsp;&nbsp;--}}
                    {{-- <i class="far fa-long-arrow-right"></i>--}}
                    {{-- <span class="header-button ms-3">--}}
                        {{-- <a href="{{ route('first.post') }}" class="btn tj-btn-primary">Blog Details</a>--}}
                        {{-- </span>&nbsp;&nbsp;&nbsp;--}}
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        @auth
                        <span class="header-button ms-3">
                            <a href="{{ route('user.add.post') }}" class="btn tj-btn-primary">Share Your Ideas</a>
                        </span>&nbsp;&nbsp;&nbsp;
                        {{-- <a href="{{ route('user.add.post') }}"><u>share your ideas</u></a>--}}
                        @endauth
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- @php--}}
            {{-- $posts = App\Models\BlogPost::Latest()->limit(3)->get();--}}
            {{-- @endphp--}}
            @php
            $posts = App\Models\BlogPost::where('approved', 1)->latest()->limit(6)->get();
            @endphp

            @unless (count($posts) == 0)
            @foreach ($posts as $post)
            @php
            $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get();
            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                    <div class="blog-thumb">
                        <a href="/post/details/{{ $post->id }}">
                            <img src="{{asset($post->photo)}}" alt="" />
                        </a>
                    </div>

                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul class="ul-reset">
                                <li>
                                    <i class="fa-light fa-calendar-days"></i> {{ $post->created_at->format('D M, Y')}}
                                </li>
                                <li><i class="fa-light fa-comments"></i> <a href="#">Comment
                                        ({{ count($comments) }})</a></li>
                            </ul>
                        </div>
                        <h3 class="blog-title"><a href="/post/details/{{ $post->id }}">{{ Str::limit($post->post_title,
                                40) }}</a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No Post found!! 😌😌</p>
            @endunless
        </div>
    </div>
</section>