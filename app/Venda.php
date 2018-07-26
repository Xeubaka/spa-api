<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Venda extends Model
  {
    public $table = "venda";
    protected $fillable = ['id', 'distancia', 'frete'];
  }

?>
