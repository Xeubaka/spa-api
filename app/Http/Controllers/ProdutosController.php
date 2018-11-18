<?php
  namespace App\Http\Controllers;

  use App\Produtos;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class ProdutosController extends Controller
  {
    public function createProdutos(Request $request){

      $Produtos = Produtos::create($request->all());

      return response()->json($Produtos, 201)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function updateProdutos(Request $request, $id){
      $Produtos = Produtos::find($id);
      $Produtos->id_produto = $request->input('id_produto');
      $Produtos->id_pedido = $request->input('id_pedido');
      $Produtos->id_vinho = $request->input('id_vinho');
      $Produtos->nm_qnt = $request->input('nm_qnt');
      $Produtos->dt_updated_at = $request->input('dt_updated_at');
      $Produtos->save();

      return response()->json($Produtos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function findProdutos($id){

      $Produtos = Produtos::find($id);

      return response()->json($Produtos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function deleteProdutos($id){
      $Produtos = Produtos::find($id);
      $Produtos->delete();

      return response()->json('Removed successfully')
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function index(){
      $Produtos = Produtos::all();
      $Produtos = (object) array('response' => $Produtos);
      return response()->json($Produtos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
    public function lastId(){
      $Produtos = app('db')->select('SELECT `id_pedido` FROM `tb_Produtos` ORDER BY `tb_Produtos`.`id_pedido` DESC limit 1');
      return response()->json($Produtos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
  }

?>
