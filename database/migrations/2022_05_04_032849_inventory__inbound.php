<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InventoryInbound extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_Inbound', function(Blueprint $table)
        {
            $table->id('inv_id');
            $table->integer('acom_order_id')->nullable();
            $table->integer('acom_line_id')->nullable();
            $table->string('inv_part_number')->nullable();
            $table->string('inv_description')->nullable();
            $table->integer('inv_quantity')->nullable();
            $table->datetime('date_inserted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Inventory_Inbound');
    }
}
