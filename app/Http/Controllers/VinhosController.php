<?php
  namespace App\Http\Controllers;

  use App\Vinhos;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;

  class VinhosController extends Controller
  {
    public function createVinhos(Request $request){

      $Vinhos = Vinhos::create($request->all());

      return response()->json($Vinhos, 201)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function updateVinhos(Request $request, $id){
      $Vinhos = Vinhos::find($id);
      $Vinhos->id_vinho = $request->input('id_vinho');
      $Vinhos->nm_vinho = $request->input('nm_vinho');
      $Vinhos->id_tipo = $request->input('id_tipo');
      $Vinhos->nm_peso = $request->input('nm_peso');
      $Vinhos->nm_qnt = $request->input('nm_qnt');
      $Vinhos->dt_created_at = $request->input('dt_created_at');
      $Vinhos->save();

      return response()->json($Vinhos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function findVinhos($id){

      $Vinhos = Vinhos::find($id);

      return response()->json($Vinhos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function deleteVinhos($id){
      $Vinhos = Vinhos::find($id);
      $Vinhos->delete();

      return response()->json('Removed successfully')
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function index(){
      $Vinhos = Vinhos::all();
      $Vinhos = (object) array('response' => $Vinhos);
      return response()->json($Vinhos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }

    public function lastId(){
      $Vinhos = app('db')->select('SELECT `id_vinho` FROM `tb_vinhos` ORDER BY `tb_vinhos`.`id_vinho` DESC limit 1');;
      return response()->json($Vinhos)
        ->header('Access-Control-Allow-Origin', '*')
      ;
    }
  }

?>
