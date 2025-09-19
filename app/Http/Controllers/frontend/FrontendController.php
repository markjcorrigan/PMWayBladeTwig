<?php

namespace App\Http\Controllers\frontend;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\BlogPost;
use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

use Illuminate\Support\Facades\Storage;

use phpDocumentor\Reflection\Types\Void_;

class FrontendController extends Controller
{
//    public function homepage(){
//        return view('frontend.homepage');
//    } // End method


    public function blog()
    {
        $posts = BlogPost::where('approved', 1)->latest()->get();
        return view('frontend.blogpage', compact('posts'));
//        dd($posts); // Dump the posts to see what's being retrieved

    }


    //I added this to give users a full list of posts
    public function UserAllPost(){
        $posts = BlogPost::where('approved', 1)->latest()->get();
        return view('frontend.blog.all_posts', compact('posts'));
    } // End method


//    public function blog()
//    {
//        $posts = Cache::remember('approved_posts', 60, function () {
//            return BlogPost::where('approved', 1)->latest()->get();
//        });
//        return view('frontend.blogpage', compact('posts'));
//    }

//    public function blog(): View
//    {
//        return view('frontend.blogpage'); // or any other view you want to display
//    }

//    public function blog()
//    {
//        return view('frontend.blogpage');
//    }




    public function portfolio(): View
    {
        return view('frontend.portfoliopage'); // or any other view you want to display
    }

    public function pmwayguest(): View
    {
        return view('pmway');
    }

    public function pmwayauth(): View
    {
        return view('pmway');
    }



//Below from source code
    public function BlogDetails($id)
    {
        $post = BlogPost::where('id', $id)->first();
        if (!$post) {
            abort(404);
        }
//        $rposts = BlogPost::Latest()->limit(3)->get();
        $rposts = BlogPost::Latest()->get();
        $comments = Comment::where('post_id', $post->id)->where('status', 1)->get();
        return view('frontend.blog.post_details', compact('post', 'rposts', 'comments'));
    }


    public function StoreComment(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:blog_posts,id',
            'name' => 'required|string',
            'user_email' => 'required|email',
            'comment' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_name = $request->name;
        $comment->user_email = $request->user_email;
        $comment->comment = $request->comment;
        $comment->save();

        $notification = [
            'message' => 'Comment Posted! Waiting For Approval.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }



//    public function StoreComment(Request $request){
//
//        $comment = new Comment();
//        $comment->post_id = $request->post_id;
//        $comment->user_name = $request->name;
//        $comment->user_email = $request->user_email;
//        $comment->comment = $request->comment;
//        $comment->save();
//
//        $notification = [
//            'message' => 'Comment Posted! Waiting For Approval.',
//            'alert-type' => 'success'
//        ];
//
//        return redirect()->back()->with($notification);
//    } // End method

    public function StoreContactMessage(Request $request)
    {
        $message = new Contact();
        $message->first_name = $request->fname;
        $message->last_name = $request->lname;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->service_id = $request->service_id;
//        $message->description = $request->desription;  This came from the original code
        $message->description = $request->description;
        $message->save();

        $notification = [
            'message' => 'Your Message has been received! I will get back to you soon.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    } // End method


}
