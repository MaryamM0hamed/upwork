<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id');
            $table->double('price',10,2);
            $table->double('freelancer_fees',10,2);
            $table->double('final_price',10,2);
            $table->string('transaction_id');
            // $table->string("currency");
            $table->enum('payment_method',['Paypal','Stripe','Hyperpay'])->default('Paypal');
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
        Schema::dropIfExists('payments');
    }
};
