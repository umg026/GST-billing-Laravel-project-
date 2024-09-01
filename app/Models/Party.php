<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    
    protected $table = "parties";
 
    // Primary key
    protected $primaryKey = "id";
    
    // Fillable fields
   protected $fillable = array(
        "party_type",
        "full_name",
        "phone_number",
        "address",
        "account_holder_name",
        "account_no",
        "bankname",
        "isfc_code",
        "state",
        "zip_code",
        "branch_address",
    );
}
