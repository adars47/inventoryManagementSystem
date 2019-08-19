<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->Integer('product_id');
            $table->Integer('assigned_to')->nullable();
            $table->Integer('assigned_at')->nullable();
            $table->Integer('del_flag');
            $table->Integer('deleted_by')->nullable();
            $table->Integer('return_date')->nullable();
            $table->Integer('belongs_to')->nullable();
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
        Schema::dropIfExists('items');
    }
}
