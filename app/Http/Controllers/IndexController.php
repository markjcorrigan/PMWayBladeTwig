<?php

namespace App\Http\Controllers;


use TwigBridge\Facade\Twig;
use Illuminate\Http\Request;


use App\Models\User;
//use App\Models\Category;
//use App\Models\Brand;
//use App\Models\Slider;
//use App\Models\Product;
//use App\Models\MultiImg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\BlogPost;

//use App\Models\SubCategory;
//use App\Models\SubSubCategory;

class IndexController extends Controller
{


    public function pmway()
    {
        $user = Auth::user();
        return view('Home.pmway', compact('user'));
    }

    public function pin()
    {
        $user = Auth::user();
        return view('Home.pin', compact('user'));
    }

    public function cmmi()
    {
        $user = Auth::user();
        return view('Home.cmmi', compact('user'));
    }

    public function cmmidevdash()
    {
        $user = Auth::user();
        return view('Home.cmmidevdash', compact('user'));
    }

    public function about()
    {
        $user = Auth::user();
        return view('Home.about', compact('user'));
    }

    public function scrumrca()
    {
        $user = Auth::user();
        return view('Home.scrumrca', compact('user'));
    }

    public function gamestats()
    {
        $user = Auth::user();
        return view('Home.gamestats', compact('user'));
    }

    public function team()
    {
        $user = Auth::user();
        return view('Home.team', compact('user'));
    }

    public function removetheredbeads()
    {
        $user = Auth::user();
        return view('Home.removetheredbeads', compact('user'));
    }

    public function agile()
    {
        $user = Auth::user();
        return view('Home.agile', compact('user'));
    }

    public function scrumdashboards()
    {
        $user = Auth::user();
        return view('Home.scrumdashboards', compact('user'));
    }

    public function itilfourpractices()
    {
        $user = Auth::user();
        return view('Home.itilfourpractices', compact('user'));
    }

    public function coffee()
    {
        $user = Auth::user();
        return view('Home.coffee', compact('user'));
    }

    public function freedoms()
    {
        $user = Auth::user();
        return view('Home.freedoms', compact('user'));
    }

    public function thegame()
    {
        $user = Auth::user();
        return view('Home.thegame', compact('user'));
    }

    public function hamandeggs()
    {
        $user = Auth::user();
        return view('Home.hamandeggs', compact('user'));
    }

    public function baseline()
    {
        $user = Auth::user();
        return view('Home.baseline', compact('user'));
    }

    public function waterfallvsagile()
    {
        $user = Auth::user();
        return view('Home.waterfallvsagile', compact('user'));
    }

    public function vmodel()
    {
        $user = Auth::user();
        return view('Home.vmodel', compact('user'));
    }

    public function scrumvaluemodel()
    {
        $user = Auth::user();
        return view('Home.scrumvaluemodel', compact('user'));
    }

    public function dml()
    {
        $user = Auth::user();
        return view('Home.dml', compact('user'));
    }

    public function scrumroleclarity()
    {
        $user = Auth::user();
        return view('Home.scrumroleclarity', compact('user'));
    }

    public function sevenrulesofscrum()
    {
        $user = Auth::user();
        return view('Home.sevenrulesofscrum', compact('user'));
    }

    public function realstory()
    {
        $user = Auth::user();
        return view('Home.realstory', compact('user'));
    }

    public function agileisdead()
    {
        $user = Auth::user();
        return view('Home.agileisdead', compact('user'));
    }

    public function productincrement()
    {
        $user = Auth::user();
        return view('Home.productincrement', compact('user'));
    }

    public function workingsoftware()
    {
        $user = Auth::user();
        return view('Home.workingsoftware', compact('user'));
    }

    public function burndown()
    {
        $user = Auth::user();
        return view('Home.burndown', compact('user'));
    }

    public function accelerate()
    {
        $user = Auth::user();
        return view('Home.accelerate', compact('user'));
    }

    public function safeisunsafe()
    {
        $user = Auth::user();
        return view('Home.safeisunsafe', compact('user'));
    }

    public function af()
    {
        $user = Auth::user();
        return view('Home.af', compact('user'));
    }

    public function release()
    {
        $user = Auth::user();
        return view('Home.release', compact('user'));
    }

    public function itiloverview()
    {
        $user = Auth::user();
        return view('Home.itiloverview', compact('user'));
    }

    public function itilss()
    {
        $user = Auth::user();
        return view('Home.itilss', compact('user'));
    }

    public function itilsd()
    {
        $user = Auth::user();
        return view('Home.itilsd', compact('user'));
    }

    public function itilst()
    {
        $user = Auth::user();
        return view('Home.itilst', compact('user'));
    }

    public function itilso()
    {
        $user = Auth::user();
        return view('Home.itilso', compact('user'));
    }

    public function itilcsi()
    {
        $user = Auth::user();
        return view('Home.itilcsi', compact('user'));
    }

    public function procrastination()
    {
        $user = Auth::user();
        return view('Home.procrastination', compact('user'));
    }

    public function recharge()
    {
        $user = Auth::user();
        return view('Home.recharge', compact('user'));
    }

    public function measurement()
    {
        $user = Auth::user();
        return view('Home.measurement', compact('user'));
    }

    public function laws()
    {
        $user = Auth::user();
        return view('Home.laws', compact('user'));
    }

    public function monkey()
    {
        $user = Auth::user();
        return view('Home.monkey', compact('user'));
    }



///////////////////the PMBok dashboard pages
    public function homePage($page)
    {
        $user = Auth::user();
        if (!view()->exists('Home.' . $page)) {
            abort(404);
        }
        return view('Home.' . $page, compact('user'));
    }


///
/*
 *
Route:

Route::get('/download-pdf/{filename}', [IndexController::class, 'downloadPdf'])->name('download.pdf');


Usage:

<a href="{{ route('download.pdf', 'example.pdf') }}">Download example.pdf</a>


In this example, replace 'example.pdf' with the actual filename of the PDF you want to download.

How it works:

1. When you click on the link, Laravel will route the request to the downloadPdf method in your IndexController.
2. The downloadPdf method will look for the file with the specified filename in the pmway\resources\views\Home\resources directory.
3. If the file exists, Laravel will send the file to the browser as a download.
4. If the file doesn't exist, Laravel will return a 404 error.

Make sure to replace 'example.pdf' with the actual filename of the PDF you want to download, and make sure the file exists in the specifid directory.
 */

    public function downloadPdf($filename)
    {
//        dd('Download method called with filename: ' . $filename);

        $path = resource_path('views/Home/resources/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];

        return response()->download($path, $filename, $headers);
    }

}

