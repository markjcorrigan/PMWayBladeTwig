## Livewire Kit: Checkout Price Calculator

This is a set of three components: product list, cart counter, and checkout sidebar calculator. It calculates VAT taxes based on the country, and adds shipping fee, all in live-mode, on any change of the cart.


### Files of the Component

- composer.json (to install "mpociot/vat-calculator")
- app/Http/Livewire/Cartcounter.php
- app/Http/Livewire/CartProducts.php
- app/Http/Livewire/Products.php
- app/Models/Cart.php
- app/Models/Country.php
- app/Models/Product.php
- database/seeders/CountriesSeeder.php
- resources/views/livewire/tailwind/cart-products.blade.php
- resources/views/livewire/tailwind/cartcounter.blade.php
- resources/views/livewire/tailwind/products.blade.php
- resources/views/livewire/bootstrap/cart-products.blade.php
- resources/views/livewire/bootstrap/cartcounter.blade.php
- resources/views/livewire/bootstrap/products.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files from `app/Http/Livewire`, `app/Models` and `resources/views/livewire` folders into your own project
- Run migrations for `countries` table, and `php artisan db:seed --class=CountriesSeeder` for the list of world's countries
- Run `composer require mpociot/vat-calculator` 
- In Blade file(s), wherever you need to use these components, call them with commands: `@livewire('products')` for the list, `@livewire('cart-products')` on the sidebar and `@livewire('cartcounter')` on top
- Check how it looks and make the changes necessary


Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 