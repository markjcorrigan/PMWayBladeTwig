<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Manufacturer;
use App\Services\PriceService;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public array $selected = [
        'prices' => [],
        'categories' => [],
        'manufacturers' => []
    ];

    public function render(PriceService $priceService): View
    {
        $prices = $priceService->getPrices(
            [],
            $this->selected['categories'],
            $this->selected['manufacturers']
        );

        $categories = Category::withCount(['products' => function ($query) {
            $query->withFilters(
                $this->selected['prices'],
                [],
                $this->selected['manufacturers']
            );
        }])
            ->get();

        $manufacturers = Manufacturer::withCount(['products' => function ($query) {
            $query->withFilters(
                $this->selected['prices'],
                $this->selected['categories'],
                []
            );
        }])
            ->get();

        return view('livewire.sidebar', compact('prices', 'categories', 'manufacturers'));
    }

    public function updatedSelected(): void
    {
        $this->dispatch('updatedSidebar', $this->selected);
    }
}
