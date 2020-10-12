<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKependudukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kependudukans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('born');
            $table->string('gender');
            $table->string('nik')->nullable();
            $table->string('status');
            $table->string('job');
            $table->string('education');
            $table->string('address');
            $table->foreignId('keluarga_id')->default(0)->references('id')->on('keluargas')->onDelete('cascade');
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
        Schema::dropIfExists('kependudukans');
    }
}
