<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
   public function index() 
   {
      // Insert Operations: 
      $party = new Party;
      $party->full_name = "umang prajapati";
      // $party->save();

      // ======== SELECT ALL data from DB =================
       $parties = Party::all();
       dd($parties) ;
      return "Database operations";
      // return view('welcome');
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
