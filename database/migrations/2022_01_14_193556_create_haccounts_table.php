<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haccounts', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name');
            $table->string('startdate');
            $table->string('amount');
            $table->string('domain');
            $table->string('email');
            $table->string('renewal_date');
            $table->string('due_amount');
            $table->string('payment_status');
            $table->string('service_width');
            $table->string('notes');
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
        Schema::dropIfExists('haccounts');
    }
}
