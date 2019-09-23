<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableViewEdits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_edits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_code');
            $table->text('aditional_column_name');
            $table->text('aditional_column_value');
            $table->string('language');
            $table->text('category');
            $table->decimal('list_price');
            $table->decimal('price');
            $table->decimal('weight');
            $table->decimal('quantity');
            $table->string('detailed_image');
            $table->string('product_name');
            $table->text('description');
            $table->text('meta_keywords');
            $table->text('meta_description');
            $table->text('page_title');
            $table->text('options');
            $table->text('short_description');
            $table->string('status');
            $table->string('vendor');
            $table->string('brand');
            $table->string('features');
            $table->integer('status_edit');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('view_edits');
    }
}
