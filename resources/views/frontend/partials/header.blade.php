@php
   $siteSettings = App\Models\SiteSettings::findOrFail(1);
@endphp
<header class="tj-header-area header-absolute">
    <div class="container">
       <div class="row">
          <div class="col-12 d-flex flex-wrap align-items-center">
             <div class="logo-box">
                <a href="/">
                   <img src="{{asset($siteSettings->logo)}}" alt="" />

                </a>
             </div>

             <div class="header-info-list d-none d-md-inline-block">
                 <ul class="ul-reset" style="list-style: none; padding: 0; margin: 0;">
                     <li style="display: inline-block; margin-right: 20px;"><a href="/">Landing Page</a></li>
                     <li style="display: inline-block;"><a href="/home">Home</a></li>
                 </ul>


             </div>
             <div class="header-menu">
                <nav>
                   <ul>

                      <li><a href="#services-section">Services</a></li>
                      <li><a href="#works-section">Works</a></li>
                      <li><a href="#resume-section">Resume</a></li>
                      <li><a href="#skills-section">Skills</a></li>
                       @auth
                       <li><a href="cv/index.php" class="navbar-link pointer-enter" title="My CV and Credentials Page">CV/Creds</a></li>
                       <li><a href="jobs/aci.php" target="_blank"  class="navbar-link pointer-enter" title="My Jobs Listing">Work</a></li>
                       @endauth
{{--                      <li><a href="#testimonials-section">Testimonials</a></li>--}}

                   </ul>
                </nav>
             </div>
{{--             <div class="header-button">--}}

{{--                 <a href="{{ url('/') }}" class="btn tj-btn-primary">--}}
{{--                 <a href="{{ url('/') }}" class="btn tj-btn-primary" >--}}
{{--                    Home--}}
{{--                 </a>--}}

{{--             </div>--}}
{{--             <div class="menu-bar d-lg-none">--}}
{{--                <button>--}}
{{--                   <span></span>--}}
{{--                   <span></span>--}}
{{--                   <span></span>--}}
{{--                   <span></span>--}}
{{--                </button>--}}
{{--             </div>--}}
{{--          </div>--}}
{{--       </div>--}}
{{--    </div>--}}
 </header>
{{-- <header class="tj-header-area header-2 header-sticky sticky-out">--}}
{{--    <div class="container">--}}
{{--       <div class="row">--}}
{{--          <div class="col-12 d-flex flex-wrap align-items-center">--}}
{{--             <div class="logo-box">--}}
{{--                <a href="index.html">--}}
{{--                   <img src="{{asset($siteSettings->logo)}}" alt="" />--}}
{{--                </a>--}}
{{--             </div>--}}

{{--              <!--NB below is the pop down menu for the page that I am removing-->--}}
{{--             <div class="header-info-list d-none d-md-inline-block">--}}
{{--                <ul class="ul-reset">--}}
{{--                   <li><a href="mailto:{{$siteSettings->email}}">{{$siteSettings->email}}</a></li>--}}
{{--                </ul>--}}
{{--             </div>--}}

{{--             <div class="header-menu">--}}
{{--                <nav>--}}
{{--                   <ul>--}}
{{--                       <li><a href="/">Landing Page</a></li>--}}
{{--                       <li><a href="/home">Home</a></li>--}}
{{--                       <li><a href="#services-section">Services</a></li>--}}
{{--                       <li><a href="#works-section">Works</a></li>--}}
{{--                       <li><a href="#resume-section">Resume</a></li>--}}
{{--                       <li><a href="#skills-section">Skills</a></li>--}}
{{--                       @auth--}}
{{--                           <li><a href="cv/index.php" class="navbar-link pointer-enter" title="My CV and Credentials Page">CV/Creds</a></li>--}}
{{--                           <li><a href="jobs/aci.php" target="_blank"  class="navbar-link pointer-enter" title="My Jobs Listing">Work</a></li>--}}
{{--                       @endauth--}}
{{--                   </ul>--}}
{{--                </nav>--}}
{{--             </div>--}}

{{--             <div class="header-button">--}}
{{--                <a href="/blog" class="btn tj-btn-primary">Back to Blog!</a>--}}
{{--             </div>--}}

{{--             <div class="menu-bar d-lg-none">--}}
{{--                <button>--}}
{{--                   <span></span>--}}
{{--                   <span></span>--}}
{{--                   <span></span>--}}
{{--                   <span></span>--}}
{{--                </button>--}}
{{--             </div>--}}
{{--          </div>--}}
{{--       </div>--}}
{{--    </div>--}}
{{-- </header>--}}
