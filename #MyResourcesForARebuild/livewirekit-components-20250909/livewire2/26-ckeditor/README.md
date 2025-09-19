## Livewire Kit: Form with CKEditor

This is a component that shows how to include a WYSIWYG CKEditor into the Livewire-powered form.


### Files of the Component

- app/Http/Livewire/ProductCreate.php
- app/Models/Product.php
- resources/views/bootstrap.blade.php
- resources/views/tailwind.blade.php
- resources/views/livewire/bootstrap/product-create.blade.php
- resources/views/livewire/tailwind/product-create.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/ProductCreate.php` and `resources/views/livewire/product-create.blade.php` into your own project
- In the main Blade file, in JavaScript section, copy the relevant CKEditor initialization code from `resources/views/bootstrap.blade.php` or `resources/views/tailwind.blade.php`
- In Blade file(s), wherever you need to use this component, call it with `@livewire('product-create')`
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 