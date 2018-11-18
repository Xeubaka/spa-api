<?php
  namespace App\Http\Controllers;

  use App\Pedidos;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class PedidosController extends Controller
  {
    public function createPedidos(Request $request){

      $Pedidos = Pedidos::create($request->all());

      return response()->json($Pedidos, 201)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function updatePedidos(Request $request, $id){
      $Pedidos = Pedidos::find($id);
      $Pedidos->id_cliente = $request->input('id_cliente');
      $Pedidos->vl_frete = $request->input('vl_frete');
      $Pedidos->nm_status = $request->input('nm_status');
      $Pedidos->save();

      return response()->json($Pedidos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
    public function findPedidos($id){

      $Pedidos = Pedidos::find($id);

      return response()->json($Pedidos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function deletePedidos($id){
      $Pedidos = Pedidos::find($id);
      $Pedidos->delete();

      return response()->json('Removed successfully')
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function index(){
      $Pedidos = Pedidos::all();
      $Pedidos = (object) array('response' => $Pedidos);
      return response()->json($Pedidos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
    public function lastId(){
      $Pedidos = app('db')->select('SELECT `id_pedido` FROM `tb_pedidos` ORDER BY `tb_pedidos`.`id_pedido` DESC limit 1');;
      return response()->json($Pedidos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
  }

?>
