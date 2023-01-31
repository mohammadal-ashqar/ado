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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('auther');
            $table->string('image');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('jop_ar');
            $table->string('jop_en');
            $table->string('facebook');
            $table->string('instegram');
            $table->string('behance');
            $table->string('twiter');
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
        Schema::dropIfExists('teams');
    }
};
