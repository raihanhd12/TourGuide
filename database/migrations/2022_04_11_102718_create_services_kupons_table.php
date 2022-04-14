<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesKuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_kupons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Kupon');
            $table->string('nilai');
            $table->date('tanggalmulai');
            $table->date('tanggalberakhir');
            $table->string('kode');
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
        Schema::dropIfExists('services_kupons');
    }
}
