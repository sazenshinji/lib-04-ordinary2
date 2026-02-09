<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientProductTable extends Migration
{
    public function up()
    {
        Schema::create('ingredient_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete(); //製品ID
            $table->foreignId('ingredient_id')->constrained()->cascadeOnDelete(); //材料ID
            $table->timestamps();

            $table->unique(['product_id', 'ingredient_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingredient_product');
    }
}
