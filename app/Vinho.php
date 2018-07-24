<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Vinho extends Model
  {
    public $table = "vinho";
    protected $data = ['id', 'nome', 'tipo', 'peso'];

  }

?>
