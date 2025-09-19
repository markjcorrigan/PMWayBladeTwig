## Livewire Kit: Chatroom

This is a component to show the example of a chatroom which uses `wire:poll` to refresh the data every two seconds. 


### Files of the Component

- app/Http/Livewire/Chat.php
- app/Models/Message.php
- app/Models/User.php
- resources/views/livewire/chat.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Chat.php` and `resources/views/livewire/chat.blade.php` into your own project
- In Blade file(s), wherever you need to use this component, call it with `@livewire('chat', ['userId' => auth()->id()])`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 