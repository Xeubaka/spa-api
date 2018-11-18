<?php
  namespace App;
  use Illuminate\Database\Eloquent\Model;

  class Produtos extends Model
  {
    public $table = 'tb_produtos';
    protected $fillable = ['id_produto', 'id_pedido', 'id_vinho', 'nm_qnt', 'dt_updated_at'];
  }

?>
