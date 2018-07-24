<?php
/*
CREATE TABLE `spa`.`vendas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `distancia` INT(20) NOT NULL,
  `frete` INT(20) NOT NULL,
  PRIMARY KEY  (`id`)
);
*/
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTableVenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venda', function (Blueprint $table) {
            $table->collation = 'utf8_unicode_ci';
            $table->charset = 'utf8';
            $table->increments('id');
            $table->integer('distancia');
            $table->integer('frete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venda');
    }
}
