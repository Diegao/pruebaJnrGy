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
        Schema::create('bitacora', function (Blueprint $table) {
            $table->comment('		
');
            $table->integer('id')->primary();
            $table->unsignedInteger('servicios_id')->index('fk_bitacora_servicios1_idx');
            $table->unsignedInteger('user_id')->index('fk_bitacora_user1_idx');
            $table->dateTime('fecha');
            $table->string('estado', 45)->nullable();
            $table->string('titulo', 45)->nullable();
            $table->string('comentario', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bitacora');
    }
};
