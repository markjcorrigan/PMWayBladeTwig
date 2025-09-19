<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostForm extends Component
{
    use WithFileUploads;

    public Post $post;

    public $image;

    protected array $rules = [
        'post.title' => ['required', 'max:100'],
        'image' => ['required', 'image']
    ];

    public string $designTemplate = 'tailwind';

    public function mount(Post $post)
    {
        $this->post = $post;

        if ($this->post->exists) {
            $this->image = $this->post->getFirstMediaUrl('post_image');
        }
    }

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.post-form');
    }

    public function storePost()
    {
        $this->validate();

        $this->post->save();

        $this->post->clearMediaCollection('post_image');
        $this->post->addMedia($this->image->getRealPath())->toMediaCollection('post_image');

        return redirect()->route('posts.index');
    }
}
