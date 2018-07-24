<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Pedido extends Model
  {
    public $table = 'pedido';
    protected $data = ['id', 'id_venda', 'id_vinho'];
  }

?>
