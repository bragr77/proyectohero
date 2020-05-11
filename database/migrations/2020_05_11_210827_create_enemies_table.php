<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnemiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enemies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('hp');
            $table->integer('atq');
            $table->integer('def');
            $table->integer('coins');
            $table->integer('xp');
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
        Schema::dropIfExists('enemies');
    }
}
