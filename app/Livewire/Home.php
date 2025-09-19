<?php


namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\SiteSettings;

class Home extends Component
{
    public $title = 'Home Page';


    public $siteSettings;

    public $showCollapse = false;

    public function toggleCollapse()
    {
        $this->showCollapse = !$this->showCollapse;
    }

    public function mount()
    {
        $this->siteSettings = SiteSettings::first(); // or SiteSettings::all() depending on your needs
    }

    #[Layout('components.layouts.app.frontend', ['title' => 'Home'])]
    public function render()
    {
        return view('livewire.home')
            ->layoutData(['siteSettings' => $this->siteSettings]);
    }

}


