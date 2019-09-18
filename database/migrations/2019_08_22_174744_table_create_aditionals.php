<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCreateAditionals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aditionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->text('extra_1');
            $table->text('extra_2');
            $table->text('extra_3');
            $table->text('extra_4');
            $table->text('extra_5');
            $table->text('extra_6');
            $table->text('extra_7');
            $table->text('extra_8');
            $table->text('extra_9');
            $table->text('extra_10');
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
        Schema::dropIfExists('aditionals');
    }
}
