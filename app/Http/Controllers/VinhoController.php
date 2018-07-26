<?php
  namespace App\Http\Controllers;

  use App\Vinho;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class VinhoController extends Controller
  {
    public function createVinho(Request $request){

      $vinho = Vinho::create($request->all());

      return response()->json($vinho, 201)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function updateVinho(Request $request, $id){
      $vinho = Vinho::find($id);
      $vinho->nome = $request->input('nome');
      $vinho->tipo = $request->input('tipo');
      $vinho->peso = $request->input('peso');
      $vinho->save();

      return response()->json($vinho)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function deleteVinho($id){
      $vinho = Vinho::find($id);
      $vinho->delete();

      return response()->json('Removed successfully')
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function index(){
      $vinho = Vinho::all();
      $vinho = (object) array('response' => $vinho);
      return response()->json($vinho)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
  }

?>
