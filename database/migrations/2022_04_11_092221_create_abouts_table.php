<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();            
            $table->string('title')->default('About');
            $table->string('pekerjaan');
            $table->string('nama');
            $table->string('namapanggilan');
            $table->string('alamat');
            $table->date('ttl');
            $table->tinyInteger('umur');
            $table->string('jk');
            $table->string('agama');
            $table->string('hobi');
            $table->string('citacita');
            $table->integer('nim');
            $table->string('email');
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
        Schema::dropIfExists('abouts');
    }
}
