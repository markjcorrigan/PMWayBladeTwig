<?php

namespace App\Http\Controllers\backend;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
use App\Mail\BlogPostNotification;


class BlogPostController extends Controller
{

    public function AddPost()
    {
        //        Gate::authorize('is-super-admin');
        return view('backend.blog.add_post');
    } // End method

public function StorePost(Request $request)
{
    $validatedData = $request->validate([
        'post_title' => 'required|string|max:255',
        'post_tags' => 'required|string',
        'post_description' => 'required|string',
        'photo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);

    try {
        $file = $request->file('photo');
        $imageName = 'post_' . hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
        $manager = new ImageManager(new Driver());
        $img = $manager->read($file);
        $img = $img->resize(409, 368);
        $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/' . $imageName));
        $imagePath = 'uploads/blog/' . $imageName;

        $post = new BlogPost();
        $post->user_id = Auth::user()->id;
        $post->post_title = $validatedData['post_title'];
        $post->post_slug = strtolower(str_replace(' ', '-', $validatedData['post_title']));
        $post->photo = $imagePath;
        $post->post_tags = $validatedData['post_tags'];
        $post->post_description = $validatedData['post_description'];
        $post->save();

        $notification = [
            'message' => 'Posted Successfully!',
            'alert-type' => 'success'
        ];

        return redirect()->route('all.post')->with($notification);
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Failed to create post.']);
    }
}



    //    public function showFirstPost()
//    {
//        $firstPost = BlogPost::all()->first();
////dd($firstPost);
//        if ($firstPost) {
//            return redirect()->to('/post/details/' . $firstPost->post_slug);
//        } else {
//            return response()->view('errors.no-blogs-found');
//        }
//    }


    public function showEditForm(BlogPost $post)
    {
        return view('edit-post', ['post' => $post]);
    }


    public function AllPost()
    {
        //        Gate::authorize('is-super-admin');
        $posts = BlogPost::with('user')->Latest()->get();
        return view('backend.blog.all_posts', compact('posts'));
    }

public function blogsByAuthor()
{
    $posts = BlogPost::join('users', 'blog_posts.user_id', '=', 'users.id')
                     ->orderBy('users.name', 'asc')
                     ->select('blog_posts.*')
                     ->get();
    return view('backend.blog.blogsbyauthor', compact('posts'));
}



    public function EditPost($id)
    {
        //        Gate::authorize('is-super-admin');
        $post = BlogPost::findOrFail($id);
        return view('backend.blog.edit_post', compact('post'));
    } // End method



    public function UpdatePost(Request $request, $id)
    {
        $post = BlogPost::find($id);
        $validatedData = $request->validate([
            'post_title' => 'required|string|max:255',
            'post_tags' => 'required|string',
            'post_description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        try {
            if ($request->hasFile('photo')) {
                // Delete the old photo
                if ($post->photo) {
                    unlink(public_path($post->photo));
                }

                // Upload the new photo
                $file = $request->file('photo');
                $imageName = 'post_' . hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                $manager = new ImageManager(new Driver());
                $img = $manager->read($file);
                $img = $img->resize(409, 368);
                $img = $img->toJpeg(80)->save(base_path('public/uploads/blog/' . $imageName));
                $imagePath = 'uploads/blog/' . $imageName;
                $post->photo = $imagePath;
            }

            $post->user_id = Auth::user()->id;
            $post->post_title = $validatedData['post_title'];
            $post->post_slug = strtolower(str_replace(' ', '-', $validatedData['post_title']));
            $post->post_tags = $validatedData['post_tags'];
            $post->post_description = $validatedData['post_description'];
            $post->save();

            $notification = [
                'message' => 'BlogPost Updated Successfully!',
                'alert-type' => 'info'
            ];

            return redirect()->route('all.post')->with($notification);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to update post.']);
        }
    }






    //    public function approve(BlogPost $blogPost)
//    {
//        $blogPost->update(['approved' => true]);
//
//        return redirect()->route('all-post')->with('success', 'Blog post approved successfully');
//    }

    public function updatePostStatus(Request $request)
    {
        $post = BlogPost::find($request->post_id);
        $post->approved = $request->approved;
        $post->save();

        // Forget the cache for approved posts
        Cache::forget('approved_posts');

        return response()->json(['status' => 200, 'message' => 'Post status updated successfully']);
    }

    public function showCreateForm()
    {
        if (!auth()->check()) {
            return redirect('/');
        }
        return view('create-post');
    }

    public function viewSinglePost(BlogPost $post)
    {
        // $post['post_description'] = strip_tags(Str::markdown($post->body), '<p><ul><ol><li><strong><h3><h1><i><br>');

        // $allowedTags = '<p><ul><ol><li><strong><h3><h1><i><br>';
        // $post['body'] = strip_tags($post->body, $allowedTags);

        return view('single-post', ['post' => $post]);
    }

    public function delete(BlogPost $post)
{
    $post->delete();
    session()->flash('success', 'Post successfully deleted.');
    return redirect('/profile/' . auth()->user()->name);
}



public function DeletePost($id)
{
    $oldPostPhoto = BlogPost::find($id);
    if ($oldPostPhoto->photo && file_exists(public_path($oldPostPhoto->photo))) {
        unlink(public_path($oldPostPhoto->photo));
    }
    BlogPost::destroy($id);
    $notification = [
        'message' => 'BlogPost Deleted Successfully!',
        'alert-type' => 'info'
    ];
    return redirect()->back()->with($notification);
}



}
