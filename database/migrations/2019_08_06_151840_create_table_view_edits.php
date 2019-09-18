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
            $table->unsignedInteger('vendor_id');
            $table->unsignedInteger('user_id');
            $table->string('sku');
            $table->text('category');
            $table->decimal('list_price');
            $table->decimal('price');
            $table->decimal('weight');
            $table->decimal('quantity');
            $table->decimal('min_quantity');
            $table->string('detailed_image');
            $table->text('name');
            $table->text('description');
            $table->text('meta_description');
            $table->text('page_title');
            $table->text('options');
            $table->text('short_description');
            $table->string('status');
            $table->integer('status_edit');
            $table->string('brand');
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
