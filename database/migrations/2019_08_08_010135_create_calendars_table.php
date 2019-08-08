<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('pembuat');
            $table->date('tanggalAwal');
            $table->date('tanggalAkhir');
            $table->string('jamAwal');
            $table->string('menitAwal');
            $table->string('jamAkhir')->nullable();
            $table->string('menitAkhir')->nullable();
            $table->string('tempat')->nullable();
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('calendars');
    }
}
