<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmslogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smslogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('response');
            $table->string('state');
            $table->string('destination_number');
            $table->string('destination_rut');
            $table->string('destination_name');
            $table->string('message');
            $table->integer('user_id');
            $table->integer('list_id')->default('0');
            $table->integer('campaign_id')->default('0');            
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
        Schema::dropIfExists('smslogs');
    }
}
