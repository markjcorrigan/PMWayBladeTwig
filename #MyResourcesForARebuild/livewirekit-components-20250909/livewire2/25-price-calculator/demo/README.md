## Livewire Kit: Checkout Price Calculator

### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


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