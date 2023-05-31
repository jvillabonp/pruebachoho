<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('prefijo');
            $table->string('num_pedido');
            $table->string('perfil');
            $table->string('familia');
            $table->string('grupo');
            $table->string('subgrupo');
            $table->string('id_producto');
            $table->longText('descripcion');
            $table->string('subtotal');
            $table->string('iva');
            $table->string('total');
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
        Schema::dropIfExists('detalle_pedidos');
    }
}
