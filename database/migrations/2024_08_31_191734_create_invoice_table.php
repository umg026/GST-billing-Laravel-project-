<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->integer("party_ids")->nullable();
            $table->date("invoice_date")->nullable();
            $table->string("invoice_no")->unique();
            $table->string("item_description")->nullable();
            $table->float("total_amount",10,2)->default(0);
            $table->float("declaration",10,2)->default(0);
            $table->string("account_holder_name")->nullable();
            $table->string("account_no")->nullable();
            $table->string("bankname")->nullable();
            $table->string("isfc_code")->nullable();
            $table->text("branch_address")->nullable();
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
        Schema::dropIfExists('invoice');
    }
}
