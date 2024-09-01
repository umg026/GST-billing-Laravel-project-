<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartyController extends Controller
{
  public function addParty()
  {
    return view('party.add-party');
  }

  public function manageParty()
  {
    // get all data form DB and pass  the data;
    $data = Party::all();
    return view('party.manageParty', compact("data"));
  }

  // function to store DB form data
  public function createParty(Request $request)
  {

    // Validation
    $request->validate([
      "party_type" => "required",
      "full_name" => "required|string|min:2|max:20",
      "phone_number" => "required|numeric|min:10",
      "address" => "required",
      "account_holder_name" => "required|string",
      "account_no" => "required|numeric",
      "bankname" => "required|string",
      "isfc_code" => "required",
      "state" => "required|string",
      "zip_code" => "required",
      "branch_address" => "required",
    ]);

    $params = $request->all();
    // remove token before insert DB data :
    unset($params['_token']);
    Party::create($params);

    return redirect()->route('add-party')->withStatus("Party created succesfully");
  }

  public function editParty($party_id)
  {
    $data['party'] = Party::find($party_id);

    return view('party.edit-party', $data);
  }

  public function updateParty($id,Request $request)
  {
   
    // Validation
    $request->validate([
      "party_type" => "required",
      "full_name" => "required|string|min:2|max:20",
      "phone_number" => "required|numeric|min:10",
      "address" => "required",
      "account_holder_name" => "required|string",
      "account_no" => "required|numeric",
      "bankname" => "required|string",
      "isfc_code" => "required",
      "state" => "required|string",
      "zip_code" => "required",
      "branch_address" => "required",
    ]);

    $params = $request->all();
    // remove token before insert DB data :
    unset($params['_token']);
    unset($params['_method']);

    Party::where('id', $id)->update($params);
    return redirect()->route('manage-party')->withStatus("party updated succesfully");

  }

  ## function for delete data from database 
  public function deleteParty(Party $party){
    $party->delete();
    return redirect()->route('manage-party')->withStatus("party deleted succesfully");

  }
}
