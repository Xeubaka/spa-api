<?php
  namespace App\Http\Controllers;

  use App\Venda;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class VendaController extends Controller
  {
    public function createVinho(Request $request){

      $venda = Venda::create($request->all());

      return response()->json($venda)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Origin', 'GET, POST, PUT, DELETE')
      ;
    }

    public function updateVinho(Request $request, $id){
      $venda = Venda::find($id);
      $venda->nome = $request->input('nome');
      $venda->tipo = $request->input('tipo');
      $venda->peso = $request->input('peso');
      $venda->save();

      return response()->json($venda)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Origin', 'GET, POST, PUT, DELETE')
      ;
    }

    public function deleteVinho($id){
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
  }

?>
