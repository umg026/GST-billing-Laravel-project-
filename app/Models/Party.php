<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
   protected $table = "parties";
 
   // primary key
   protected $primaryKey = "id";
   protected $fillabe = array("full_name");




}
