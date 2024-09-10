<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class AppController extends Controller
{

   public function __construct()
   {
       $this->middleware('auth');
   }
   public function index() 
   {
      return redirect()->route('home');
   }

   public function contact () 
   {
    return view('contact');
}
}
