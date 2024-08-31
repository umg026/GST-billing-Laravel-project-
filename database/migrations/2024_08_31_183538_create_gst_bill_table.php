<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGstBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gst_bill', function (Blueprint $table) {
            $table->id();
            $table->integer("party_id")->nullable();
            $table->date("invoice_date")->nullable();
            $table->string("invoice_no")->unique();
            $table->string("item_description")->nullable();
            $table->float("total_amount",10,2)->default(0);
            $table->float("cgst_rate",10,2)->default(0);
            $table->float("sgst_rate",10,2)->default(0);
            $table->float("igst_rate",10,2)->default(0);
            $table->float("tax_amount",10,2)->default(0);
            $table->float("net_amount",10,2)->default(0);
            $table->float("declaration",10,2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gst_bill');
    }
}
