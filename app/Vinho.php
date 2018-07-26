<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Vinho extends Model
  {
    public $table = "vinho";
    protected $fillable = ['id', 'nome', 'tipo', 'peso'];

  }

?>
