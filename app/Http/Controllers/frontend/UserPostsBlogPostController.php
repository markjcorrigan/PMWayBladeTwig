<?php

namespace App\Http\Controllers\frontend;

use App\Mail\BlogPostNotification;
use App\Models\BlogPost;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;



class UserPostsBlogPostController extends Controller
{

    public function UserAddPost(){
//        Gate::authorize('is-super-admin');
        return view('frontend.blog.add_post');
    } // End method

    public function UserStorePost(Request $request){
//        if (!Gate::allows('is-super-admin')) {
//            abort(403, 'Unauthorized action.');
//        }

        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_tags' => 'required|string',
            'post_description' => 'required|string',
            'post_photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // 409 x 368
        $file = $request->file('post_photo');
        $imageName = 'post_'.hexdec(uniqid()).'.'.$file->getClientOriginalExtension();// work453rdfg-45.png
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        $img = $img->resize(409,368);
        $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/'.$imageName));
        $imagePath = 'uploads/blog/'.$imageName;

        $post = new BlogPost();
        $post->user_id = Auth::user()->id;
        $post->post_title = $validatedData['post_title'];
        $post->post_slug = strtolower(str_replace(' ', '-', $validatedData['post_title']));
        $post->photo = $imagePath;
        $post->post_tags = $validatedData['post_tags'];
        $post->post_description = $validatedData['post_description'];
//        dd(Auth::user()->name); // Add this line before saving the post
        $post->save();

        $notification = [
            'message' => 'BlogPost Posted Successfully. Waiting on approval!',
            'alert-type' => 'success'
        ];
        Mail::to('markjc@mweb.co.za')->send(new BlogPostNotification($post));

        return redirect()->route('blog')->with($notification);
    } // End method

    public function usersearch(Request $request)
    {
        $query = $request->input('search');
        if ($query) {
            $posts = BlogPost::where('approved', 1)
                ->where(function ($q) use ($query) {
                    $q->where('post_title', 'LIKE', '%' . $query . '%')
                        ->orWhere('post_tags', 'LIKE', '%' . $query . '%')
                        ->orWhere('post_description', 'LIKE', '%' . $query . '%')
                        ->orWhere('post_slug', 'LIKE', '%' . $query . '%');
                })
                ->latest()
                ->paginate(6);
        } else {
            $posts = BlogPost::where('approved', 1)->latest()->paginate(6);
        }
        $rposts = BlogPost::where('approved', 1)->latest()->limit(5)->get();
        return view('frontend.blog.searchresults', compact('posts', 'rposts', 'query'));
    }



    public function firstPost()
    {
        $firstPost = \App\Models\BlogPost::all()->first();
        if ($firstPost) {
            return redirect()->to('/post/details/' . $firstPost->post_slug);
        } else {
            return response()->view('errors.no-blogs-found');
        }
    }





}
