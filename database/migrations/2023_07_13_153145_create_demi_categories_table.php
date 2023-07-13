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
        Schema::create('demi_categories', function (Blueprint $table) {

            //Columns
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id_categorie');
            $table->timestamps();

            //Foreigns
            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demi_categories');
    }
};
