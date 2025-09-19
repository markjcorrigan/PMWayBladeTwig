<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Place favicon.ico in the root directory -->
    {{--   <link rel="apple-touch-icon" href=" {{asset('frontend/assets/img/favicon.png')}} " />--}}
    {{--   <link rel="shortcut icon" type="image/png" href="{{asset('frontend/assets/img/favicon.png')}}" />--}}

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome-pro.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon_gerold.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/backToTop.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer-theme-default.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/light-mode.css')}}"/>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    <style>
        .btn.tj-btn-primary {
            position: relative;
        }

        .btn.tj-btn-primary::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px; /* Changed from 2px to 1px */
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
            color: #ccc !important; /* Change to your desired hover color */
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

</head>

<body>
<x-blog-loading-preloader/>
x>
<main class="site-content" id="content">

    <!-- START: Breadcrumb Area -->
    <section class="breadcrumb_area" data-bg-image="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg') }}"
             data-bg-color="#140C1C">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <div class="breadcrumb_content d-inline-flex flex-column align-items-center w-100">
                        <h2 class="title wow fadeInUp" data-wow-delay=".3s">{{ $post->post_title }}</h2><br><br>
                        <div class="d-flex justify-content-end w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @php
        $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get();
    @endphp

        <!-- START: Blog Section -->
    <section class="full-width tj-post-details__area">
        <div class="container">

            @php
                $firstPost = App\Models\BlogPost::where('approved', 1)->oldest()->first();
                $firstPostId = $firstPost->id;
            @endphp
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
                <div>
                </div>
            </div>
            <h2></h2>
            <br><br>

            {{--        <span class="header-button">--}}
            {{--                    <a href="{{ url('/post/details/' . $firstPostId) }}" class="btn tj-btn-primary">List of Posts</a>--}}
            {{--                    </span>--}}

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tj-post-details__container">

                        <article class="tj-single__post">
                            <div class="tj-post__thumb">
                                {{--                      <img src="{{asset($post->photo)}}" alt="" style="width: 1000px; height:400px;" />--}}
                                <img src="{{asset($post->photo)}}" alt="" style="width: 100%; height:auto;"/>
                                {{--                      <a href="#" class="category">Tutorial</a>--}}
                            </div>

                            <div class="tj-post__content">
                                <div class="tj-post__meta entry-meta">
                                    <span><i class="fa-light fa-user"></i> <a href="#">By {{ $post->id }}</a></span>
                                    <span><i class="fa-light fa-calendar-days"></i> {{ $post->created_at->format('D M, Y') }}</span>
                                    {{--                       <span><i class="fa-light fa-comments"></i><a href="#">Comments ({{ count($comments) }})</a></span>--}}
                                    <span><i class="fa-light fa-comments"></i><a href="#"> ({{ count($comments ?? []) }})</a></span>

                                </div>
                                <h3 class="tj-post__title entry-title">{{ $post->post_title }} </h3>
                                <div class="tj-post__content">

                                    {!! $post->post_description !!}

                                </div>
                            </div>
                        </article>

                        @php
                            $tags = explode(',', $post->post_tags)
                        @endphp

                            <!-- post tags & social share -->
                        <div class="single-post_tag_share">
                            <!-- post tags -->
                            <div class="tj_tag">
                                <h4 class="tag__title">Tags:</h4>
                                <div class="tagcloud">
                                    @foreach ($tags as $tag)
                                        <a href="#"> {{ $tag }} </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="share_link">
                                <a href="#" target="_blank" class="facebook" title="Share this on Facebook"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="twitter" title="Share this on Twitter" target="_blank"><i
                                        class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="linkedin" title="Share this on Linkedin" target="_blank"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="pinterest" title="Pin this Post" target="_blank"><i
                                        class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>

                        <!-- comments area -->
                        <div class="tj-comments__container">
                            <div class="tj-comments__wrap">
                                <div class="tj-comment__title">
                                    <h3>{{ count($comments) }} Comments</h3>
                                </div>

                                <div class="tj-latest__comments">
                                    <ul>
                                        @unless (count($comments) < 1)
                                            @foreach ($comments as $comment)
                                                <li class="tj__comment">
                                                    <div class="tj-comment__wrap">
                                                        <div class="comment__avatar">
                                                            <img alt="" src="{{asset('uploads/no-img-avatar.png')}}"/>
                                                        </div>
                                                        <div class="comment__text">
                                                            <div class="avatar__name">
                                                                <h5><a href="#"> {{ $comment->user_name }} </a></h5>
                                                                <span>{{ $comment->created_at->format('M D, Y') }}</span>
                                                            </div>
                                                            <p>
                                                                {{ $comment->comment }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <p>No Comment(s) found!! 😌😌</p>
                                        @endunless
                                    </ul>
                                </div>
                            </div>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">
                                    <span class="tj-comment__title">Leave a Comment</span>
                                </h3>

                                <form method="POST" action="{{ route('store.comment') }}" class="tj-post-comment__form">
                                    @csrf
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form_group">
                                                <input placeholder="Enter Name" id="author" name="name" type="text"
                                                       aria-required="true"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form_group">
                                                <input placeholder="Enter Email" id="email" name="user_email"
                                                       type="email"
                                                       aria-required="true"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form_group">
                                  <textarea class="msg-box" placeholder="Enter Your Comments" id="comment"
                                            name="comment" cols="45" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <button class="tj-btn-primary submit" type="submit">Post Comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="tj_main_sidebar">
                        <!--Two ways of searching:  Livewire-->

                        <div class="sidebar_widget widget_search wow fadeInUp" data-wow-delay=".3s">
                            <div class="tj-widget__search form_group">
                                <p>List of search results:</p>
                                @livewire('lwsearch')
                            </div>
                        </div>
                        @php
                            $rposts = App\Models\BlogPost::where('approved', 1)->latest()->paginate(10);
                        @endphp
                            <!--Two ways of searching:  Traditional came with blog-->
                        <div class="sidebar_widget widget_search wow fadeInUp" data-wow-delay=".3s">
                            <p>Cards of search results:</p>
                            <div class="tj-widget__search form_group">

                                <form class="search-form" action="{{ route('usersearch') }}" method="get">
                                    <input type="search" id="search" name="search" placeholder="Search..."
                                           value="{{ request()->input('search') }}"/>
                                    <button class="search-btn" type="submit"><i
                                            class="fa-light fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                        </div>
                        <div id="recent-posts" class="sidebar_widget tj_recent_posts wow fadeInUp" data-wow-delay=".3s">
                            <div class="widget_title">
                                <h3 class="title">Recent posts</h3>
                            </div>
                            <ul>
                                {{ $rposts->fragment('recent-posts')->links() }}

                                <br>
                                @foreach ($rposts as $rpost)
                                    @php $comments = App\Models\Comment::where('post_id', $rpost->id)->where('status', 1)->get(); @endphp
                                    <li>
                                        <div class="recent-post_thumb">
                                            <a href="/post/details/{{ $rpost->id }}">
                                                <img src="{{ asset($rpost->photo) }}" alt=""/>
                                            </a>
                                        </div>
                                        <div class="recent-post_content">
                                            <div class="tj-post__meta entry-meta">
                                                <span><i class="fa-light fa-calendar-days"></i> {{ $rpost->created_at->format('M, Y') }} </span>
                                                <span><i class="fa-light fa-comments"></i><a href="#"> ({{ count($comments) }})</a></span>
                                            </div>
                                            <h4 class="recent-post_title">
                                                <a href="/post/details/{{ $rpost->id }}">{{ Str::limit($rpost->post_title, 30) }}</a>
                                            </h4>
                                        </div>
                                    </li>
                                @endforeach
                                {{ $rposts->fragment('recent-posts')->links() }}

                            </ul>
                        </div>
                        <div class="sidebar_widget widget_tag_cloud wow fadeInUp" data-wow-delay=".3s">
                            <div class="widget_title">
                                <h3 class="title">Popular tag</h3>
                            </div>
                            <div class="tagcloud">
                                @php $tags = explode(',', $post->post_tags) @endphp
                                @foreach ($tags as $tag)
                                    <a href="#"> {{ $tag }} </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @if (isset($posts))
                        <div class="row">
                            @if ($posts->isNotEmpty())
                                @foreach ($posts as $post)
                                    @php $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get(); @endphp
                                    <div class="col-lg-4 col-md-6">
                                        <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                                            <div class="blog-thumb">
                                                <a href="/post/details/{{ $post->id }}">
                                                    <img src="{{ asset($post->photo) }}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="blog-content">
                                                <div class="blog-meta">
                                                    <ul class="ul-reset">
                                                        <li>
                                                            <i class="fa-light fa-calendar-days"></i> {{ $post->created_at->format('D M, Y') }}
                                                        </li>
                                                        <li><i class="fa-light fa-comments"></i> <a href="#">Comment
                                                                ({{ count($comments ?? []) }})</a></li>
                                                    </ul>
                                                </div>
                                                <h3 class="blog-title"><a
                                                        href="/post/details/{{ $post->id }}">{{ Str::limit($post->post_title, 40) }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{--                           {{ $posts->links() }}--}}
                            @else
                                <p>No Post found!! </p>
                            @endif
                        </div>
                    @endif

                </div>
            </div>
        </div>

    </section>
    <!-- END: Blog Section -->


</main>

<!-- FOOTER AREA START -->
<x-footer/>
<!-- FOOTER AREA END -->

<!-- CSS here -->
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/backToTop.js')}}"></script>
<script src="{{asset('frontend/assets/js/smooth-scroll.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/gsap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/one-page-nav.js')}}"></script>
<script src="{{asset('frontend/assets/js/lightcase.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/imagesloaded-pkgd.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.pkgd.min.j')}}s"></script>
<script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/magnific-popup.js')}}"></script>
<script src="{{asset('frontend/assets/js/validate.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
</body>
</html>
