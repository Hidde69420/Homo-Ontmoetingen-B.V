<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnzeHomos;

class onzeHomosController extends Controller
{
    public function show()
    {

        $Gays = OnzeHomos::get();


        return view('onzehomos')->with(['Gays' => $Gays]);
    }
 
}
