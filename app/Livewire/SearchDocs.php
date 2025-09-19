<?php

// LW Search Controller
namespace App\Livewire;


use App\Http\Controllers\DocumentController;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Document;

class SearchDocs extends Component
{
    public $searchTerm = '';
    public $results = [];

    public function editDocument($id)
    {
        return redirect()->to('/documents/' . $id . '/edit');
    }

    public function updatedSearchTerm()
    {
        if ($this->searchTerm !== '') {
            $this->results = Document::where('name', 'like', '%' . $this->searchTerm . '%')
                ->orWhere('shortname', 'like', '%' . $this->searchTerm . '%')
                ->get();
//            dd($this->results); // add this line
        } else {
            $this->results = [];
        }
    }





    public function deleteDocument($id)
    {
        $documentController = new DocumentController();
        $documentController->destroy($id);
        // You can also add some logic to refresh the search results after deletion
    }


    public function render()
    {
        $documents = Document::all(); // or use pagination: Document::paginate(10);
        return view('livewire.search-docs', ['documents' => $documents]);
    }


}
