<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function category(){
        return view('admin.category');
    }
    public function information(){
        return view('admin.infomation');
    }
    public function review(){
        return view('admin.review');
    }
}
