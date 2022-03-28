<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function product(){

        $p1 = "";
        $p2 = "";
        $p3 = "";
        $info1 = array("Asus ROG GT51CH Core i7 Gaming Brand PC", "Price : 216,000.00 BDT");
        $info2 = array("ASUS ROG Strix G35CZ Gaming Desktop PC", "Price : 130,000 BDT");
        $info3 = array("Asus Republic of Gamers GR8 Compact Gaming PC", "Price : 176,000 BDT");
         
        return view('product')
        ->with('p1', $p1)
        ->with('p2', $p2)
        ->with('p3', $p3)
        ->with('info1', $info1)
        ->with('info2', $info2)
        ->with('info3', $info3);
    }
    public function teams()
    {
        return view('teams');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

}
