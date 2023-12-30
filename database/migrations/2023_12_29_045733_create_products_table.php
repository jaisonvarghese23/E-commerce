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

        Schema::create('catagories', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->timestamps();
        });
        //
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('catagory_id')->nullable();
            $table->foreign('catagory_id')->references('id')->on('catagories');
            $table->string('image')->nullable();
            $table->boolean('status')->comment('1:Active,0:Inactive')->default(1);
            $table->boolean('is_favourite')->comment('1:favourite,0:not_favourite')->default(0);
            $table->double('price',15,2);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catagories');

        Schema::dropIfExists('products');
    }
};
