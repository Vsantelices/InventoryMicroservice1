<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_transaction', function (Blueprint $table) {
            $table->id('Transactionid');
            $table->string('Item')->nullable();
            $table->string('Transactiontype')->nullable();
            $table->string('Quantity')->nullable();
            $table->string('Transactionsource')->nullable();
            $table->datetime('Transactiondate')->nullable();
            $table->string('Created')->nullable();
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
        Schema::dropIfExists('master_transaction');
    }
}
