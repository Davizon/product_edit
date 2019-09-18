<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->string('best_for');
            $table->string('brand');
            $table->string('closure_type');
            $table->string('collar');
            $table->string('color');
            $table->string('features');
            $table->string('gender');
            $table->string('length');
            $table->string('material');
            $table->string('occasion');
            $table->string('pattern');
            $table->string('product_type');
            $table->string('shoe_feel');
            $table->string('size');
            $table->string('size_Range');
            $table->string('sleeve');
            $table->string('style_Fit');
            $table->string('surface');
            $table->string('tecnology');
            $table->string('zip_closure');
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
        Schema::dropIfExists('options');
    }
}
