<?php

namespace App\Http\Controllers;

use App\Jobs\SendNewPostEmail;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BlogPostController extends Controller
{


    public function search($term)
    {
        //Basic Way of Searching, not so good
        return Post::where('title', 'LIKE', '%' . $term . '%')->orWhere('body', 'LIKE', '%' . $term . '%')->with('user:id,name,avatar')->get();
        // Better way with Laravel Scout
        $posts = BlogPost::search($term)->get();
        $posts->load('user:id,name,avatar');
        return $posts;
    }

    public function actuallyUpdate(BlogPost $post, Request $request)
    {
        $incomingFields = $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
        ]);

        $incomingFields['post_title'] = strip_tags($incomingFields['post_title']);
        $incomingFields['post_description'] = strip_tags($incomingFields['post_description']);

        $post->update($incomingFields);

        return back()->with('success', 'Post successfully updated');
    }



    public function showEditForm(BlogPost $post)
    {
        return view('edit-post', ['post' => $post]);
    }



    public function delete(BlogPost $post)
    {
        // if (auth()->user()->cannot('delete', $post)) {
        //     return 'You do not have the permissions to delete this post';

        // }

        $post->delete();
        return redirect('/profile/' . auth()->user()->name)->with('success', 'Post successfully deleted');
    }



    public function deleteApi(BlogPost $post)
    {
        $post->delete();
        return 'true';
    }


    public function showCreateForm()
    {
        if (!auth()->check()) {
            return redirect('/');
        }
        return view('create-post');
    }



    public function storeNewPost(Request $request)
    {
        $incomingFields = $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_tags' => 'required|string',

        ]);

        $incomingFields['post_title'] = strip_tags($incomingFields['post_title']);
        $incomingFields['post_description'] = strip_tags($incomingFields['post_description']);
        $incomingFields['user_id'] = auth()->id();

        $newPost = BlogPost::create($incomingFields);

        dispatch(new SendNewPostEmail(['sendTo' => auth()->user()->email, 'name' => auth()->user()->name, 'post_title' => $newPost->post_title]));

        return redirect("/post/{$newPost->id}")->with('success', 'New Post successfully created');

    }


    public function storeNewPostApi(Request $request)
    {
        $incomingFields = $request->validate([
            'post_title' => 'required',
            'post_description' => 'required',
            'post_tags' => 'required|string',
        ]);

        $post = new BlogPost();
        $post->post_title = strip_tags($incomingFields['post_title']);
        $post->post_description = strip_tags($incomingFields['post_description']);
        $post->post_tags = strip_tags($incomingFields['post_tags']);
        $post->post_slug = strtolower(str_replace(' ', '_', $incomingFields['title']));
        $post->user_id = auth()->id();
        $post->photo = ''; // Set photo here

        $post->save();

        dispatch(new SendNewPostEmail(['sendTo' => auth()->user()->email, 'name' => auth()->user()->name, 'title' => $post->post_title]));

        return response()->json(['id' => $post->id, 'message' => 'Post successfully created'], 201);
    }




    // public function storeNewPostApi(Request $request)
    // {
    //     $incomingFields = $request->validate([
    //         'title' => 'required',
    //         'body' => 'required',
    //          'post_tags' => 'required|string',
    //     ]);

    //     $incomingFields['title'] = strip_tags($incomingFields['title']);
    //     $incomingFields['body'] = strip_tags($incomingFields['body']);
    //     $incomingFields['user_id'] = auth()->id();

    //     $newPost = Post::create($incomingFields);

    //     dispatch(new SendNewPostEmail(['sendTo'=> auth()->user()->email,'name' => auth()->user()->name, 'title' =>$newPost->title ]));

    //     return $newPost->id;

    // }



    public function viewSinglePost(BlogPost $post)
    {
        $post['body'] = strip_tags(Str::markdown($post->body), '<p><ul><ol><li><strong><h3><h1><i><br>');

        $allowedTags = '<p><ul><ol><li><strong><h3><h1><i><br>';
        $post['body'] = strip_tags($post->body, $allowedTags);

        return view('singlepost', ['post' => $post]);
    }


}
