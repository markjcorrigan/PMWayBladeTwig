## Livewire Kit: Reusable Parent-Child Dropdowns

This is a component to add two dependable parent-child dropdowns into any Laravel form. 


### Files of the Component

- app/Http/Livewire/ParentChild.php
- resources/views/livewire/parent-child.blade.php


### How to use

- Make sure you have Livewire installed and enabled with `@livewireStyles` and `@livewireScripts`. For more info, read the [official docs](https://laravel-livewire.com/docs/2.x/quickstart) 
- Copy files `app/Http/Livewire/ParentChild.php` and `resources/views/livewire/parent-child.blade.php` into your own project
- In Blade file(s), wherever you need to use this component, call it with `@livewire('parent-child', $parameters])`, example of parameter list is below
- Check how it looks and make the changes necessary


### Example of Calling Component: Parameters List

```
@livewire('parent-child', [
    'parentModelName' => 'App\\Models\\Country',
    'parentLabel' => 'Country From',
    'parentInputName' => 'country_from',
    'childModelName' => 'App\\Models\\City',
    'childLabel' => 'City From',
    'childInputName' => 'city_from',
    'relationshipFieldName' => 'country_id',
])
```

Need help or extra features? Email me directly and let's discuss: povilas@laraveldaily.com 