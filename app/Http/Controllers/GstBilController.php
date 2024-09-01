<?php

namespace App\Http\Controllers;

use App\Models\GstBill;
use App\Models\Party;
use Illuminate\Http\Request;

class GstBilController extends Controller
{
   public function addBill (){
    $data['parties'] = Party::where('party_type', 'client')->orderBy('full_name')->get();

    return view('gstBiling.add-gstBil', $data);
   }

   public function manageBill (){
        // get all data form DB and pass  the data;
    $data = GstBill::with('party')->get();
    return view('gstBiling.manageBils', compact('data'));
   }
   public function printBill ($id){
      $data['bill'] = GstBill::where('id', $id)->with('party')->first();
      return view('gstBiling.print-gstBil', $data);
     }

   public function createInvoice(){
      return view('gstBiling.createInvoice');
   }

   public function createGstBill(Request $request){
    
      $request->validate([
         'party_id' => 'required|exists:parties,id',
         'invoice_date' => 'required|date',
         'invoice_no' => 'required|string|max:255',
         'item_description' => 'required|max:250',
         'total_amount' => 'numeric',
         'cgst_rate' => 'nullable|min:0|max:100',
         'cgst_amount' => 'numeric|min:0',
         'sgst_rate' => 'nullable|min:0|max:100',
         'sgst_amount' => 'numeric|min:0',
         'igst_rate' => 'nullable|min:0|max:100',
         'igst_amount' => 'numeric|min:0',
         'tax_amount' => 'numeric|min:0',
         'net_amount' => 'required|numeric|min:0',
      ]);
      $params = $request->all();
      // remove token before insert DB data :
      unset($params['_token']);
      GstBill::create($params);

      return redirect()->route('manage-gstBill')->withStatus("Bill created succesfully");
   }
}
