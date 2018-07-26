<?php
  namespace App\Http\Controllers;

  use App\Pedido;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class PedidoController extends Controller
  {
    public function createPedido(Request $request){

      $pedido = Pedido::create($request->all());

      return response()->json($pedido, 201)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function updatePedido(Request $request, $id){
      $pedido = Pedido::find($id);
      $pedido->nome = $request->input('nome');
      $pedido->tipo = $request->input('tipo');
      $pedido->peso = $request->input('peso');
      $pedido->save();

      return response()->json($pedido)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function deletePedido($id){
      $pedido = Pedido::find($id);
      $pedido->delete();

      return response()->json('Removed successfully')
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function index(){
      $pedido = Pedido::all();
      $pedido = (object) array('response' => $pedido);
      return response()->json($pedido)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
  }

?>
