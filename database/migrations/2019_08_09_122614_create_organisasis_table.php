<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_organisasi');
            $table->string('sejak');
            $table->string('ketua_organisasi');
            $table->string('kontak');
            $table->string('foto_organisasi');
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
        Schema::dropIfExists('organisasis');
    }
}
