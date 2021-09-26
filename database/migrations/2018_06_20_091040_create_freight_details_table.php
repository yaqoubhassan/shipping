<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFreightDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freight_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('freight_id');
            $table->string('note', 200);
            $table->text('description')->nullable();
            $table->string('current_status');
            $table->date('date');
            $table->string('current_destination');
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
        Schema::dropIfExists('freight_details');
    }
}
