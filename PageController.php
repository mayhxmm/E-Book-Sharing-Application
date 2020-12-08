<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function master() {
        return view('subview.master');
    }
    public function about() { 
        return view('subview.about'); 
       } 
    public function list() {
        return view('subview.list');
    }

    
}
