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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('auther');
            $table->bigInteger("visits")->unsigned()->default(0);
            $table->string('iconName');
            $table->string('image');
            $table->string('name_ar');
            $table->text('context_ar');
            $table->text('content_ar');
            $table->json('list_ar');
            $table->string('name_en');
            $table->text('context_en');
            $table->text('content_en');
            $table->json('list_en');
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
        Schema::dropIfExists('services');
    }
};
