<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Home');
            $table->string('gambar1');
            $table->string('nama1');
            $table->string('deskripsi1');
            $table->string('gambar2');
            $table->string('nama2');
            $table->string('deskripsi2');
            $table->string('gambar3');
            $table->string('nama3');
            $table->string('deskripsi3');
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
        Schema::dropIfExists('homes');
    }
}
