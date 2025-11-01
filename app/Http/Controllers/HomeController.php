<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

     public function index()
     {
          // return "Allah Malik";
        return view('Home.pages.Index');
    }
    public function resume()
    {
        return view('Home.pages.Resume');
    }
    public function contact()
    {
        return view('Home.pages.Contact');
    }

    public function projects()
    {
        return view('Home.pages.Projects');
    }
}
