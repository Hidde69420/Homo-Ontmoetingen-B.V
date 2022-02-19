<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class reviewController extends Controller
{
    public function show()
    {

        $reviews = review::get();


        return view('review')->with(['reviews' => $reviews]);
    }

    public function sendReview(Request $request)
    {
        $reviews = review::get();
        
        DB::table('reviews')->insert([
            'name' => $request->name,
            'text' => $request->text,
            'rateing' => $request->rateing
        ]);
        $success = true;

        return view('review')->with(['success' => $success, 'reviews' => $reviews]);
    }
}
