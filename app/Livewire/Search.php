<?php

// LW Search Controller
namespace App\Livewire;

//use App\Models\Post;
use Livewire\Component;
use App\Models\BlogPost;

class Search extends Component
{
    public $searchTerm = '';
    public $results;

    public function render()
    {

        if ($this->searchTerm == '') {
            $this->results = array();
        } else {
            $posts = BlogPost::search($this->searchTerm)->get();
            $this->results = $posts;
        }

        return view('livewire.search');
    }
}
