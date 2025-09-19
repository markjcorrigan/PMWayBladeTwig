## Livewire Kit: Chatroom

### How to use

- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data for your testing)
- That's it: launch the main URL
- By default it uses User with ID 1, but you can customize it by launching main URL with `?user_id=2` or any other existing User ID from `users` DB table
- You will see Tailwind CSS version, for Bootstrap visit `/bootstrap` URL


### Files of the Component

- app/Http/Livewire/Chat.php
- app/Models/Message.php
- app/Models/User.php
- resources/views/livewire/tailwind/chat.blade.php
- resources/views/livewire/bootstrap/chat.blade.php
