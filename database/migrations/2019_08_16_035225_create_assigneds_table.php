<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigneds', function (Blueprint $table) {
            $table->bigIncrements('assignment_id');
            $table->timestamps();
            $table->Integer('item_id');
            $table->Integer('user_id'); 
            $table->date('assigned_at'); 
            $table->date('return_date')->nullable(); 
            $table->string('status')->default('assigned');  
            $table->Integer('del_flag');
            $table->Integer('deleted_by')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assigneds');
    }
}
