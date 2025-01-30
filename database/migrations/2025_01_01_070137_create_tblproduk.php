<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tblproduk', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // product name
            $table->integer('price'); // price 
            $table->text('description'); // product description
            $table->string('image'); // image
            $table->boolean('recommend')->default(false); // recommended
            $table->integer('count')->default(0); // count checked product
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblproduk');
    }
};
