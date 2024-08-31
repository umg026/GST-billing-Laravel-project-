<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GstBilController extends Controller
{
   public function addBill (){
    return view('gstBiling.add-gstBil');
   }

   public function manageBill (){
    return view('gstBiling.manageBils');
   }

   public function printBill(){
      return view('gstBiling.print-gstBil');
   }
}
