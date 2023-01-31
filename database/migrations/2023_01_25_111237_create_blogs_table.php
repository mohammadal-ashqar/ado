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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("visits")->unsigned()->default(0);
            $table->string('auther');
            $table->string('image');
            $table->string('writer_en');
            $table->string('writer_ar');
            $table->string('title_ar');
            $table->string('title_en');
            $table->longText('content_en');
            $table->longText('content_ar');
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
        Schema::dropIfExists('blogs');
    }
};
