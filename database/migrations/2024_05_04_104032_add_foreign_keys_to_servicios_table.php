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
        Schema::table('servicios', function (Blueprint $table) {
            $table->foreign(['estado_servicios_id'], 'fk_servicios_estado_servicios1')->references(['id'])->on('estado_servicios')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['cliente_id'], 'fk_soporte_servicios_soporte_clientes1')->references(['id'])->on('clientes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['equipo_id'], 'fk_soporte_servicios_soporte_equipos1')->references(['id'])->on('equipos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
//            $table->foreign(['usuario_id'], 'fk_soporte_servicios_user1')->references(['id'])->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios', function (Blueprint $table) {
//            $table->dropForeign('fk_servicios_estado_servicios1');
//            $table->dropForeign('fk_soporte_servicios_soporte_clientes1');
//            $table->dropForeign('fk_soporte_servicios_soporte_equipos1');
//            $table->dropForeign('fk_soporte_servicios_user1');
        });
    }
};
