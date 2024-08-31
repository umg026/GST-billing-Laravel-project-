<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartiesTable extends Migration
{
    // Run this command for create tables : php artisan make:migration table_name;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->enum("party_type",['vendor','client','employee'])->nullable();
            $table->string("full_name",100)->nullable();
            $table->string("phone_number",15)->nullable();
            $table->text("address")->nullable();
            $table->string("account_holder_name")->nullable();
            $table->string("account_no")->nullable();
            $table->string("bankname")->nullable();
            $table->string("isfc_code")->nullable();
            $table->string("state")->nullable();
            $table->string("zip_code")->nullable();
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
        //
    }
}


// A migration class contains two methods: up and down. The up method is used to add new tables, columns, or indexes to your database, while the down method should reverse the operations performed by the up method.