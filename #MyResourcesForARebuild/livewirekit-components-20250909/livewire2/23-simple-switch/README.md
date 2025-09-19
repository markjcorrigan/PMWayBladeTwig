## Livewire Kit: Toggle Switch for Database Field

This is a component to add an on/off switch toggle input for any of your DB field of any model.


### Files of the Component

- app/Http/Livewire/ToggleButton.php
- resources/views/livewire/toggle-button.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/ToggleButton.php` and `resources/views/livewire/toggle-button.blade.php` into your own project
- In Blade file(s), wherever you need to use this component, call it with `@livewire('toggle-button', $parameters])`, example of parameter list is below
- Check how it looks and make the changes necessary


### Example of Calling Component: Parameters List

```
@livewire('toggle-button', [
    'model' => $user,    // This is your User model object
    'field' => 'active', // This is field name from DB: users.active
])
```

Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 