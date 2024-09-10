<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "company";

    protected $primaryKey = "id";

    protected $fillable = array(
        "party_id",
        "company_name",
        "email",
        "website",
        "mobile_no",
        "state",
        "country",
        "pan_no",
        "is_deleted",
        "invoice_no",
    );
    public function party() {
        return $this->belongsTo(Party::class);
    }
}
