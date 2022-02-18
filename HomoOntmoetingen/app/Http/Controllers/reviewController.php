<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class reviewController extends Controller
{
    public function show()
    {

        $reviews = review::get();


        return view('review')->with(['reviews' => $reviews]);
    }
}
