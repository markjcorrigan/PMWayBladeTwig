<?php

// Document Controller
namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function search($term)
    {
        $results = Document::search($term)->paginate(10);
        return $results;
    }



    public function uploads()
    {
        $documents = Document::all();
        $documents = Document::paginate(10);

        return view('documents.uploads', compact('documents'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf,docx,doc,pptx,txt|max:204800', // 200MB
        ]);


        $file = $request->file('document');
        $filePath = $file->store('documents', 'public');
        $fileName = $file->getClientOriginalName();
        $shortName = substr(preg_replace('/[\(\[].*?[\)\]]/', '', str_replace(' ', '', $fileName)), 0, 30);

        Document::create([
            'name' => $fileName,
            'shortname' => $shortName,
            'path' => $filePath,
        ]);
        $documents = Document::paginate(10);


        return redirect()->route('uploads')->with('success', 'File uploaded successfully!');

    }



    public function downloadById($id) {
        $document = Document::find($id);
        if (!$document) {
            abort(404);
        }
        return Storage::download($document->path);
    }

    public function downloadByShortName($shortname)
    {
        $document = Document::where('shortname', $shortname)->first();
        if (!$document) {
            abort(404);
        }

        if (!Storage::disk('public')->exists($document->path)) {
            abort(404);
        }

        return Storage::disk('public')->download($document->path);
    }



    public function documents(Request $request)
    {
        $query = $request->input('query');
        $documents = Document::where('name', 'like', '%' . $query . '%')
            ->orWhere('path', 'like', '%' . $query . '%')
            ->get();

        if (!$query) {
            $documents = Document::all();
        }

        return view('documents', compact('documents', 'query'));
    }

    public function destroy($id)
    {
        $document = Document::find($id);
        if ($document) {
            $filename = basename($document->path);
            Storage::disk('public')->delete('Documents/' . $filename);
            $document->delete();
            return redirect()->route('uploads')->with('success', 'Document deleted successfully!');
        }
        return redirect()->route('uploads')->with('error', 'Document not found!');
    }




    public function edit($id)
    {
        $document = Document::find($id);
        if ($document) {
            return view('documents.edit', compact('document'));
        }
        return back()->with('error', 'Document not found!');
    }



    public function update(Request $request, $id)
    {
        $document = Document::find($id);
        if ($document) {
            $request->validate([
                'name' => 'required',
                'shortname' => 'required',
            ]);

            $oldFilename = basename($document->path);
            $newFilename = $request->name . '.' . pathinfo($oldFilename, PATHINFO_EXTENSION);

            Storage::disk('public')->move('Documents/' . $oldFilename, 'Documents/' . $newFilename);
            $document->path = 'Documents/' . $newFilename;
            $document->name = $request->name;
            $document->shortname = $request->shortname;

            $document->save();
            return redirect()->route('uploads')->with('success', 'Document updated successfully!');
        }
        return redirect()->route('uploads')->with('error', 'Document not found!');
    }

}
