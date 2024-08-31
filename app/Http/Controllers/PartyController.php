<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
   public function addParty () {
     return view('party.add-party');
   }

   public function manageParty()
   {
    return view('party.manageParty');
   }
}
