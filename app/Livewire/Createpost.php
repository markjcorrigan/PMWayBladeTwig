<?php

namespace App\Livewire;



use Illuminate\Support\Facades\Log;

use App\Models\BlogPost;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Jobs\SendNewPostEmail;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Validator;
use Mews\Purifier\Facades\Purifier;




class Createpost extends Component
{
    use WithFileUploads;
    // public $post;
    public $post_title;
    public $post_description;
    public $post_tags;
    public $post_photo;
    public $image;



    public function mount(BlogPost $post)
    {
        // $this->post = $post;
        $this->post_title = $post->post_title;
        $this->post_description = $post->post_description ?? ''; // Set a default value if $post->body is null
        // $this->body = $post->body;
        $this->post_tags = $post->post_tags;
    }



    public function uploadFile(Request $request)
    {
        Log::info('Upload file request received');
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->file('file');
        $filePath = $file->store('uploads', 'public');
        /*  $filePath = $file->store('uploads', 'public'); Saves the file to the uploads directory within the public disk.
        The public disk is defined in the config/filesystems.php file, and it's typically set to store files in the storage/app/public directory.
        So, the file will be saved to: storage/app/public/uploads */


        $url = asset('storage/' . $filePath);

        return response()->json(['url' => $url]);
    }





    public function create()
    {
        $this->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_tags' => 'required|string',
            'post_photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);

        $post = new BlogPost();
        $post->post_title = $this->post_title;
        $post->post_description = Purifier::clean($this->post_description);
        $post->post_tags = $this->post_tags;
        $post->post_slug = strtolower(str_replace(' ', '_', $this->post_title));
        $post->user_id = auth()->id();

        if ($this->post_photo) {
            $directory = public_path('uploads/');
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true);
            }
            $originalExtension = $this->post_photo->getClientOriginalExtension();
            $imageName = 'post_' . hexdec(uniqid()) . '.' . $originalExtension;
            $manager = new ImageManager(new Driver());
            $img = $manager->read($this->post_photo->getRealPath());
            $img = $img->resize(409, 368);
            if ($originalExtension == 'png' || $originalExtension == 'gif' || $originalExtension == 'svg') {
                $img = $img->toJpeg(80);
                $imageName = 'post_' . hexdec(uniqid()) . '.jpg';
            }
            $img->save($directory . '/' . $imageName);
            $post->photo = 'uploads/' . $imageName;
        }

        $post->save();

        dispatch(new SendNewPostEmail(['sendTo' => auth()->user()->email, 'name' => auth()->user()->name, 'post_title' => $post->post_title]));

        session()->flash('success', 'Blog Post successfully created');
        return $this->redirect("/profile/" . auth()->user()->name, navigate: true);
    }




    public function save()
    {
        $this->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_tags' => 'required|string',
            'post_photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);



        $post = BlogPost::find($this->post->id);
        $post->post_title = $this->post_title;
        $post->post_description = Purifier::clean($this->post_description);

        $post->post_tags = $this->post_tags;

        if ($this->photo) {
            $directory = public_path('uploads/');
            if (!File::exists($directory)) {
                File::makeDirectory($directory, 0777, true);
            }

            $originalExtension = $this->photo->getClientOriginalExtension();
            $imageName = 'post_' . hexdec(uniqid()) . '.' . $originalExtension;
            $manager = new ImageManager(new Driver());
            $img = $manager->read($this->post_photo->getRealPath());
            $img = $img->resize(409, 368);

            if ($originalExtension == 'png' || $originalExtension == 'gif' || $originalExtension == 'svg') {
                $img = $img->toJpeg(80);
                $imageName = 'post_' . hexdec(uniqid()) . '.jpg';
            }

            $img->save($directory . '/' . $imageName);
            $post->photo = 'uploads/' . $imageName;
        }

        $post->save();
        session()->flash('success', 'Post successfully updated.');
        return redirect()->route('post.show', $post->id);
    }



    public function render()
    {
        return view('livewire.createpost');
    }
}
