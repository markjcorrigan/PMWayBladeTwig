<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SubmitController extends Controller
{
    public function __invoke(Request $request)
    {
        dd(Carbon::parse($request->time)->format('Y-m-d H:i:s'));
    }
}
