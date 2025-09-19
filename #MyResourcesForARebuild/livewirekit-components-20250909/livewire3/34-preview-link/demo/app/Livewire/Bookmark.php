<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use App\Models\Bookmark as BookmarkModel;
use Illuminate\Http\Client\ConnectionException;

class Bookmark extends Component
{
    #[Rule('required|url')]
    public string $link = '';
    #[Rule('required|string')]
    public string $title = '';
    public string $image = '';
    public string $description = '';
    public string $message = '';

    public string $designTemplate = 'tailwind';

    public function updatedLink(): void
    {
        $this->validateOnly('link');

        try {
            $response = Http::get($this->link);

            if ($response->status() == 200) {
                preg_match_all("/<title>(.+)<\/title>/siU", $response, $title);
                $this->title = $title[1][0];

                preg_match_all('/<\s*meta\s+property="og:image"\s+content="([^"]*)/i', $response, $image);
                $this->image = $image[1][0] ?? '/images/no_image.png';

                preg_match_all('/<\s*meta\s+name="description"\s+content="([^"]*)/i', $response, $description);
                $this->description = $description[1][0] ?? '';

                $this->reset('message');
            }
        } catch (ConnectionException $e) {
            $this->reset('title', 'image', 'description');

            $this->message = 'Could not get link data';
        }
    }

    public function render(): View
    {
        $bookmarks = BookmarkModel::latest('id')->take(5)->get();

        return view('livewire.' . $this->designTemplate . '.bookmark', compact('bookmarks'));
    }

    public function storeBookmark(): void
    {
        $this->validate();

        BookmarkModel::create([
            'title' => $this->title,
            'link' => $this->link,
        ]);

        $this->reset(['link', 'title', 'image', 'description', 'message']);
    }
}
