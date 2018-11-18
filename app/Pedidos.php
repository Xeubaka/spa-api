<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Pedidos extends Model
  {
    public $table = "tb_pedidos";
    protected $fillable = ['id_pedido', 'id_cliente', 'vl_frete', 'nm_status'];
  }

?>
