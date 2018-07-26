<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Pedido extends Model
  {
    public $table = 'pedido';
    protected $fillable = ['id', 'id_venda', 'id_vinho'];
  }

?>
