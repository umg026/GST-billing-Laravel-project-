<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
   public function index() 
   {
      return view('welcome');
   }

   public function contact () 
   {
    $name = "umang";
    $number = "923823242";
    // pass a variable through controller -> view

    # Using Compact
    // return view("contact", compact("name", "number"));
   
    #using Asociate Array
    // return view("contact", array(
    //     'name' => $name,
    //     'number' => $number,
    // ));

    #using With method 
    return view('contact')->with('name', $name)->with('number', $number);
}
}
