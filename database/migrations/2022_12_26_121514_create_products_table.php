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
                       
        $table->id('Product_id');
        $table->string('email', 60);
        $table->string('title', 100);
        $table->string('summary', 200);
        $table->string('Description', 200);
        $table->string('quality');
        $table->json('category');
        $table->date('expiry');
        $table->string('img',100)->nullable();
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
