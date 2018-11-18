<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Vinhos extends Model
  {
    public $table = "tb_vinhos";
    protected $fillable = ['id_vinho', 'nm_vinho', 'id_tipo', 'nm_peso', 'nm_qnt', 'dt_created_at'];
  }

?>
