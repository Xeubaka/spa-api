<?php
/*
CREATE TABLE `spa`.`pedido` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_venda` INT(10),
  `id_vinho` INT(10),
  PRIMARY KEY (`id`)
);
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTablePedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->integer('id_venda');
            $table->integer('id_vinho');
            $table->integer('qnt');
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
        Schema::dropIfExists('pedido');
    }
}
