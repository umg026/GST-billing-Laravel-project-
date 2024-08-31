<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{
   public function index() 
   {
      return view('dashboard');



      // Insert Operations: 
      // $party = new Party;
      // $party->full_name = "umang prajapati";
      // // $party->save();

      // // ======== SELECT ALL data from DB =================
      //  $parties = Party::all();
      //  dd($parties) ;
      // return "Database operations";
   }

   public function contact () 
   {
    return view('contact');
}
}
