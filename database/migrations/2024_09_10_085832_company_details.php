<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->integer("party_id")->nullable();
            $table->text("company_name")->nullable();
            $table->text("email")->nullable();
            $table->text("website")->nullable();
            $table->text("mobile_no")->nullable();
            $table->text("state")->nullable();
            $table->text("country")->nullable();
            $table->text("pan_no")->nullable();
            $table->tinyInteger("is_deleted")->default(0);
            $table->string("invoice_no")->unique();
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
