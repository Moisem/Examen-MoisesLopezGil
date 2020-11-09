<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->increments('num_detalle');
            $table->integer('numero_factura')->unsigned();;
            $table->integer('producto_id')->unsigned();
            $table->integer('cantidad');
            $table->foreign('numero_factura')->references('numero')->on('factura');
            $table->foreign('producto_id')->references('id')->on('producto');
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
        Schema::dropIfExists('detalle_factura');
    }
}
