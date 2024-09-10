<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Party;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function addCompany()
    {
        $data['parties'] = Party::where('party_type', 'client')->orderBy('full_name')->get();

        return view('company.add-company', $data);
    }

    public function manageCompany (){
        $data = Company::with('party')->get();
        return view('company.manageCompany', compact('data'));
    }

    public function createCompany(Request $request)
    {
  
      // Validation
      $request->validate([
        'party_id' => 'required|exists:parties,id',
        "company_name" => 'required|string',
        "email" => 'required||min:0',
        "website"=> 'nullable|min:0|max:100',
        "mobile_no"=> "required|numeric|min:10",
        "state"=> 'nullable|min:0|max:100',
        "country"=> 'nullable|min:0|max:100',
        "pan_no"=> 'required|min:0|max:100',
        "invoice_no" => 'required|min:0',
      ]);
  
      $params = $request->all();
      // remove token before insert DB data :
      unset($params['_token']);
      Company::create($params);
  
      return redirect()->route('add-company')->withStatus("Company created succesfully");
    }
}
