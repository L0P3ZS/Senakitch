<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            // $table->foreignId('idAprendiz')->references('id')->on('aprendiz');
            $table->string('name')->unique();
            // $table->string('slug')->unique();
            // $table->string('details')->nullable();
            $table->double('price');
            $table->double('shipping_cost');
            // $table->text('description');
            $table->integer('category_id');
            $table->string('image_path');
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
        Schema::dropIfExists('products');
    }
};
