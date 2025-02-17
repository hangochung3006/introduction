<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Detail extends Controller
{
    public function detail($slug){
        return view("pages.detail");
    }
}
