## Livewire Kit: Sortable Drag-Drop Table

This is a component that shows how to include a Livewire Sortable component into a table.


### Files of the Component

- app/Http/Livewire/Products.php
- app/Models/Product.php
- resources/views/bootstrap.blade.php
- resources/views/tailwind.blade.php
- resources/views/livewire/bootstrap/products.blade.php
- resources/views/livewire/tailwind/products.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/Products.php` and `resources/views/livewire/products.blade.php` into your own project
- In the main Blade file (in our case, `bootstrap.blade.php` or `tailwind.blade.php`), in JavaScript section, don't forget to add Livewire Sortable JavaScript from CDN. 
- In Blade file(s), wherever you need to use this component, call it with `@livewire('products')`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 