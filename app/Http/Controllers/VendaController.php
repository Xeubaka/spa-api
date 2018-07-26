<?php
  namespace App\Http\Controllers;

  use App\Venda;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class VendaController extends Controller
  {
    public function createVenda(Request $request){

      $venda = Venda::create($request->all());

      return response()->json($venda, 201)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function updateVenda(Request $request, $id){
      $venda = Venda::find($id);
      $venda->nome = $request->input('nome');
      $venda->tipo = $request->input('tipo');
      $venda->peso = $request->input('peso');
      $venda->save();

      return response()->json($venda)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function deleteVenda($id){
      $venda = Venda::find($id);
      $venda->delete();

      return response()->json('Removed successfully')
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function index(){
      $venda = Venda::all();
      $venda = (object) array('response' => $venda);
      return response()->json($venda)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
    public function lastId(){
      $venda = app('db')->select('SELECT `id` FROM `venda` ORDER BY `venda`.`id` DESC limit 1');
      return response()->json($venda)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
  }

?>
