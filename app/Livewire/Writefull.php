<?php
namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Blogpost;

class Writefull extends Component
{
    public function mount(): void
    {
        // 
    }

    // public function __invoke()
    // {
    //     // Handle the request
    // }


    #[Layout('components.layouts.app')]
    public function render(): View
    {
        return view('livewire.writefull', [
            'posts' => Blogpost::where('approved', 1)
                ->latest()
                ->paginate(10),
        ]);
    }
}

