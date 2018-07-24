<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Venda extends Model
  {
    public $table = "venda";
    protected $data = ['id', 'distancia', 'frete'];
  }

?>
