@extends('documents.documentlayout.default')

@section('header')
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    @section('title', 'All Documents')
    <x-documentsnav />


@endsection('header')

@section('maincontent')
    <main>
        <div class="container mx-auto p-4 mt-10">
            @if (session()->has('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ session()->get('error') }}
                </div>
            @endif
            <h1 class="text-3xl font-bold mb-4">All Documents</h1>

{{--                <i class="fa-duotone fa-truck" style="font-size: 30px !important; --fa-primary-color: #B1B1B1; --fa-secondary-color: #FFD700; --fa-primary-opacity: 1; --fa-secondary-opacity: 1;"></i>--}}
{{--                <h1 class="text-3xl font-bold underline">--}}
{{--                    Hello world!--}}
{{--                </h1>--}}
{{--                <x-cogsicon />--}}

                <br>
            <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data" class="mb-8">
                @csrf
                <input type="file" name="document" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <br><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
            </form>
            <table class="w-full table-auto border-collapse border border-gray-400">
                <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Name</th>
                    <th class="border border-gray-400 px-4 py-2">Short Name</th>
                    <th class="border border-gray-400 px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($documents as $document)
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">{{ $document->name }}</td>
                        <td class="border border-gray-400 px-4 py-2">{{ $document->shortname }}</td>
                        <td class="border border-gray-400 px-4 py-2 flex">
                            <a href="{{ route('downloadByShortName', $document->shortname) }}" class="flex-1 bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2 text-center">Download</a>
                            <a href="{{ route('documents.edit', $document->id) }}" class="flex-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2 text-center">Edit</a>
                            <form action="{{ route('documents.destroy', $document->id) }}" method="POST" class="flex-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-center">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $documents->links() }}
            @if (session()->has('success'))
                <p class="text-green-500 mt-4">{{ session('success') }}</p>
            @endif
        </div>
        <br><br><br><br>
        <br><br><br><br>
    </main>
@endsection('maincontent')


@section('footer')

{{--    <footer id="sticky-footer" class="py-4" style="background-color: #343a40; color: rgba(255, 255, 255, 0.5);">--}}
{{--        <div class="container mx-auto text-center">--}}
{{--            <p class="text-white">Project &amp; Process Management <span lang="en-za">Best Practice</span> <br>at CM Level 2 and above</p>--}}
{{--            <p>--}}
{{--                <a href="/gamestats" target="_blanik">--}}
{{--                    <img alt="Up Stat or Down Stat" class="img-fluid mx-auto d-block" src="/images/devopsimagemedium.png" onmouseover="this.src='/images/devops2.gif'" onmouseout="this.src='/images/devopsimagemedium.png'" title="How are your game stats? Click here for more">--}}
{{--                </a>--}}
{{--            </p>--}}
{{--            <p class="text-white">underpinned by ITIL</p>--}}
{{--            <br>--}}
{{--            <p class="small text-white">--}}
{{--                <span class="text-white">&copy;</span> 2009 PMWay<br>--}}
{{--                <small>People Process Technology Governance Execution</small>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </footer>--}}






        <x-footer />
@endsection('footer')

