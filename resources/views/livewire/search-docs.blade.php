<div x-data="{ isOpen: false }">
{{-- LW Search view --}}
<button x-on:click="isOpen = true; setTimeout(() => document.querySelector('#live-search-field').focus(), 50)"
        style="background: none; border: none; padding: 0; margin: 0; outline: none; cursor: pointer"
        class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip" data-placement="bottom">
    <i class="fas fa-search"></i>
</button>

{{-- Search overlay --}}
<div class="search-overlay" x-bind:class="isOpen ? 'search-overlay--visible' : ''">
    <div class="search-overlay-top shadow-sm">
        <div class="container container--narrow mx-auto" style="max-width: 500px;">
            <label for="live-search-field" class="search-overlay-icon"><i class="fas fa-search"></i></label>
            <input x-on:keydown="document.querySelector('.circle-loader').classList.add('circle-loader--visible'); if (document.querySelector('#no-results')) {document.querySelector('#no-results').style.display = 'none'}"
                   wire:model.live.debounce.750ms="searchTerm" autocomplete="off" type="text" id="live-search-field" class="live-search-field" placeholder="What are you interested in?">
            <span wire:click="$set('searchTerm', '')" x-on:click="isOpen = false" class="close-live-search" style="margin-left: 10px;"><i class="fas fa-times-circle"></i></span>


        </div>
    </div>
    <div class="search-overlay-bottom">
        <div class="container container--narrow py-3 mx-auto" style="max-width: 800px;">
            <div class="circle-loader"></div>
            <div class="live-search-results live-search-results--visible text-center">


                @if (count($results) > 0)
                    <table class="table table-striped table-bordered" style="width: 100%; border-collapse: collapse; background-color: #f9f9f9; border: 1px solid #ddd;">
                        <thead style="background-color: #f0f0f0;">
                        <tr>
                            <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Short Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Path</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Created At</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Updated At</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $doc)
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $doc->id }}</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $doc->name }}</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $doc->shortname }}</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $doc->path }}</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $doc->created_at }}</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">{{ $doc->updated_at }}</td>
                                <td style="padding: 10px; border: 1px solid #ddd;">
                                    <button wire:click="editDocument({{ $doc->id }})" style="background-color: #007bff; color: #fff; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Edit</button>
                                    &nbsp;
                                    <button wire:click="deleteDocument({{ $doc->id }})" style="background-color: #dc3545; color: #fff; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Delete</button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif




            </div>
        </div>
    </div>
</div>

{{-- Table on landing page --}}
<div x-show="!isOpen" class="container container--narrow py-3 mx-auto" style="max-width: 800px;">
    <table class="table table-striped table-bordered shadow-sm mx-auto" style="width: 100%; border-collapse: collapse;">
        <!-- table content -->
    </table>
</div>
</div>




{{--<div>--}}
{{--    <input type="text" class="bg-white" wire:model="searchTerm">--}}
{{--    @if (count($results) > 0)--}}
{{--        @foreach($results as $doc)--}}
{{--            <li>{{ $doc->name }}</li>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--</div>--}}





{{--<div x-data="{ isOpen: false }">--}}
{{--    --}}{{-- LW Search view --}}
{{--    <button x-on:click="isOpen = true; setTimeout(() => document.querySelector('#live-search-field').focus(), 50)"--}}
{{--            style="background: none; border: none; padding: 0; margin: 0; outline: none; cursor: pointer"--}}
{{--            class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip" data-placement="bottom"><i--}}
{{--            class="fas fa-search"></i></button>--}}


{{--    <div class="search-overlay" x-bind:class="isOpen ? 'search-overlay--visible' : ''">--}}
{{--        <div class="search-overlay-top shadow-sm">--}}
{{--            <div class="container container--narrow">--}}
{{--                <label for="live-search-field" class="search-overlay-icon"><i class="fas fa-search"></i></label>--}}
{{--                <input--}}
{{--                    x-on:keydown="document.querySelector('.circle-loader').classList.add('circle-loader--visible'); if (document.querySelector('#no-results')) {document.querySelector('#no-results').style.display = 'none'}"--}}
{{--                    wire:model.live.debounce.750ms="searchTerm" autocomplete="off" type="text" id="live-search-field"--}}
{{--                    class="live-search-field" placeholder="What are you interested in?">--}}
{{--                <span x-on:click="isOpen = false" class="close-live-search"><i class="fas fa-times-circle"></i></span>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="search-overlay-bottom">--}}
{{--            <div class="container container--narrow py-3">--}}
{{--                <div class="circle-loader"></div>--}}
{{--                <div class="live-search-results live-search-results--visible">--}}

{{--                    @if (count($results) == 0 && $searchTerm !== "")--}}
{{--                        <p id="no-results" class="alert alert-danger text-center shadow-sm">Sorry, we could not find any results for--}}
{{--                            that search.</p>--}}
{{--                    @endif--}}

{{--                    @if (count($results) > 0)--}}
{{--                        <div class="list-group shadow-sm">--}}
{{--                            <div class="list-group-item active"><strong>Search Results</strong>--}}

{{--                                ({{count($results)}} {{count($results) > 1 ? "results" : "result"}} found)--}}

{{--                            </div>--}}

{{--                            @foreach($results as $name)--}}
{{--                                <a x-on:click.prevent="isOpen = false; Livewire.navigate('/docusearch/{{$doc->id}}')" href="/post/{{$doc->id}}"--}}
{{--                                   class="list-group-item list-group-item-action">--}}
{{--                                    <img class="avatar-tiny" src="{{$doc->user->avatar}}"> <strong>{{$doc->post_title}}</strong>--}}
{{--                                    <span class="text-muted small">by {{$doc->user->name}} on--}}
{{--                {{$name->created_at->format('n/j/Y')}}</span>--}}
{{--                                </a>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
