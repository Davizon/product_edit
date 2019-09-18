<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->string('category');
            $table->string('Subcategory_1');
            $table->string('Subcategory_2');
            $table->string('Subcategory_3');
            $table->string('Subcategory_4');
            $table->string('Subcategory_5');
            $table->string('Subcategory_6');
            $table->string('Subcategory_7');
            $table->string('Subcategory_8');
            $table->string('Subcategory_9');
            $table->string('Subcategory_10');

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
        Schema::dropIfExists('categories');
    }
}
