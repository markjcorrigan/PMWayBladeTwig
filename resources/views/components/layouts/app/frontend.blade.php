<!DOCTYPE html>
{{-- Livewire Layout --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>





<body class="min-h-screen">


    <flux:header container class="border-b flex justify-between items-center shadow-b bg-gray-900 min-h-[60px]">
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="nav-link" style="height: 40px; width: 40px;">
                <img src="{{ asset('images/house.png') }}" alt="Home Icon">
            </a>
        </div>
        <div class="flex items-center gap-2 ml-auto">



            @auth
            <flux:navbar class=" ">
                <flux:navbar.item variant="primary" class="custom-button custom-link hover:text-white"
                    href="{{ route('home') }}" :current="request()->routeIs('home')">
                    Home
                </flux:navbar.item>
            </flux:navbar>

            <flux:navbar class=" ">
                {{--
                <flux:navbar.item variant="primary" class="custom-button custom-link" href="{{ route('writefull') }}"
                    :current="request()->routeIs('writefull')"> Writefull
                </flux:navbar.item>
                --}}

            </flux:navbar>
            <flux:navbar class=" ">
                <flux:navbar.item variant="primary" class="custom-button custom-link" href="{{ route('dashboard') }}"
                    :current="request()->routeIs('dashboard')">
                    Dashboard
                </flux:navbar.item>
            </flux:navbar>

            @endauth
            <nav class="flex items-center justify-end gap-4">
                <div class="relative">
                    <flux:dropdown>
                        <flux:button variant="primary" class="custom-button hover:text-white"
                            icon:trailing="chevron-down"> Menu</flux:button>
                        <flux:menu class="!bg-gray-900">
                            @guest
                                <flux:navbar.item class="text-white" style="color: white !important"
                                                  href="{{ route('pmway') }}" :current="request()->routeIs('pmway')"> PMWay
                                </flux:navbar.item>
                            <flux:navbar.item class="text-white" style="color: white !important"
                                href="{{ route('portfolio') }}" :current="request()->routeIs('portfolio')"> Portfolio
                            </flux:navbar.item>
{{--                            <flux:navbar.item class="text-white" style="color: white !important"--}}
{{--                                href="{{ route('pmwayguest') }}" :current="request()->routeIs('pmwayguest')"> PMWay--}}
{{--                            </flux:navbar.item>--}}
                            <flux:navbar.item class="text-white" style="color: white !important"
                                href="{{ route('blog') }}" :current="request()->routeIs('blog')"> Blog
                            </flux:navbar.item>
                            <flux:navbar.item class="text-white" style="color: white !important"
                                href="{{ route('contact') }}" :current="request()->routeIs('contact')"> Contact
                            </flux:navbar.item>
                            @endguest
                            @auth
                            <flux:navbar.item class="text-white" style="color: white !important"
                                href="{{ route('pmway') }}" :current="request()->routeIs('pmway')"> PMWay
                            </flux:navbar.item>
                            <flux:navbar.item class="text-white" style="color: white !important"
                                href="{{ route('blog') }}" :current="request()->routeIs('blog')"> Blog
                            </flux:navbar.item>
                            <flux:navbar.item class="text-white" style="color: white !important"
                                href="{{ route('writestuff') }}" :current="request()->routeIs('blog')"> Nuvo Blog
                            </flux:navbar.item>
                            @endauth
                            <flux:menu.separator />
                        </flux:menu>
                    </flux:dropdown>
                </div>
            </nav>
            <flux:spacer />
            @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @guest

                @if (Route::has('register'))
                <flux:button href="{{ route('login') }}" variant="primary"
                    class="custom-button custom-link bg-dark-500 hover:bg-dark-700 text-white dark:bg-dark-900 dark:hover:bg-dark-800 dark:text-white">
                    {{ __('global.log_in') }} </flux:button>
                <flux:button href="{{ route('register') }}" variant="primary"
                    class="custom-button custom-link bg-dark-500 hover:bg-dark-700 text-white dark:bg-dark-900 dark:hover:bg-dark-800 dark:text-white">
                    {{ __('global.register') }} </flux:button>
                @endif
                @endguest
            </nav>
            @endif
            @auth
            @if (Session::has('admin_user_id'))
            <div class="py-2 flex items-center justify-center dark:text-white rounded mr-4">
                <form id="stop-impersonating" class="flex flex-col items-center gap-3"
                    action="{{ route('impersonate.destroy') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <flux:button type="submit" size="sm" variant="danger" form="stop-impersonating"
                        class="!w-full !flex !flex-row cursor-pointer">
                        <div class="flex items-center gap-2">
                            <flux:icon.loader-circle class="animate-spin mr-2" />
                            {{ __('users.stop_impersonating') }}
                        </div>
                    </flux:button>
                </form>
            </div>
            @endif
            <flux:dropdown position="top" align="end">
                <flux:profile class="cursor-pointer" :initials="auth()->user()->initials()" />
                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white">
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>
                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>
                    @can('access dashboard')
                    <flux:menu.separator />
                    <flux:menu.radio.group>
                        <flux:menu.item href="{{ route('admin.index') }}" icon="shield">
                            {{ __('global.admin_dashboard') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    @endcan
                    <flux:menu.separator />
                    <flux:menu.radio.group>
                        <flux:menu.item href="/settings/profile" icon="cog">
                            {{ __('settings.title') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>
                    <flux:menu.separator />
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('global.log_out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
            @endauth
        </div>
    </flux:header>




    <!-- Mobile Menu -->
    {{--    <flux:sidebar stashable sticky--}}
    {{--        class="lg:hidden border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">--}}
    {{--        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />--}}

    {{--        <a href="{{ route('dashboard') }}" class="ml-1 flex items-center space-x-2">--}}
    {{--            <x-app-logo class="size-8" href="#"></x-app-logo>--}}
    {{--        </a>--}}
    {{--        @auth--}}
    {{--        <flux:navlist variant="outline">--}}
    {{--            <flux:navlist.group heading="Platform">--}}
    {{--                <flux:navlist.item icon="layout-grid" href="{{ route('dashboard') }}"--}}
    {{--                    :current="request()->routeIs('dashboard')">--}}
    {{--                    Dashboard--}}
    {{--                </flux:navlist.item>--}}
    {{--            </flux:navlist.group>--}}
    {{--        </flux:navlist>--}}
    {{--        @endauth--}}

    {{--        <flux:spacer />--}}

    {{--    </flux:sidebar>--}}



    {{--<div style="position: relative; min-height: 100vh; display: flex; flex-direction: column;">--}}
    {{-- <flux:main;--}} {{-- <flux:main container
            style="padding-bottom: 50px; padding-top: 60px; flex-grow: 1;">--}}
    {{-- <div>--}}
    {{-- {{ $slot }}--}}
    {{-- </div>--}}
    {{-- </flux:main>--}}
    {{-- <flux:footer class="bg-dark-900" style="width: 100%; margin: 0; padding: 0;">--}}
    {{-- @include('partials.footer')--}}
    {{-- <x-footer />--}}
    {{-- </flux:footer>--}}
    {{--</div>--}}




    <div style="position: relative; min-height: 100vh; display: flex; flex-direction: column;">
        <flux:main; <flux:main container style="padding-bottom: 50px; padding-top: 60px; flex-grow: 1;">
            <div>

                {{ $slot }}
            </div>
            </flux:main>
            <div style="height: 100px;"></div> <!-- Add a spacer element -->
            <flux:footer class="bg-dark-900" style="width: 100%; margin: 0; padding: 0;">
                {{-- @include('partials.footer')--}}
                <x-footer />
            </flux:footer>
    </div>





    @fluxScripts


</body>

</html>
