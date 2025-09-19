<?php

namespace App\Livewire;

use App\Models\Rating;
use Livewire\Component;
use Livewire\Attributes\Locked;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Rate extends Component
{
    #[Locked]
    public int $postId;
    public ?int $rating = NULL;
    public Collection $ratings;
    public int|string $currentRating = '-';

    public function mount(): void
    {
        $this->ratings = Rating::where('post_id', $this->postId)->get();

        if ($this->ratings->count()) {
            $this->currentRating = round($this->ratings->sum('rating') / $this->ratings->count(), 2) . ' / 5 (' . $this->ratings->count() . ' votes)';
        }
    }

    public function render(): View
    {
        return view('livewire.rate');
    }

    public function rate($rating): void
    {
        if (in_array($rating, [1,2,3,4,5])) {
            Rating::create(['post_id' => $this->postId, 'rating' => $rating]);
            $this->rating = $rating;
            $this->currentRating = round(($this->ratings->sum('rating') + $rating) / ($this->ratings->count() + 1), 2) . ' / 5 (' . ($this->ratings->count() + 1) . ' votes)';
        }
    }
}
