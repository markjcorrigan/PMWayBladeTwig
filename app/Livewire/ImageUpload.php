<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    /**
     * @var \Livewire\TemporaryUploadedFile[]
     */
    public $image = [];



    public function save()
    {
        $this->validate([
            'image.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->image as $image) {
            $path = $image->getRealPath();
            $filename = $image->getClientOriginalName();
            Storage::disk('public')->put('images/' . $filename, file_get_contents($path));
        }

        $this->image = [];
    }



    public function render()
    {
        return view('livewire.image-upload', [
            'images' => collect(Storage::disk('public')->files('images'))
                ->map(function ($file) {
                    return asset('storage/' . $file);
                })
        ]);
    }



}
