<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\libretina;
use App\Models\horario;
use App\Models\nota;

class libretinaController extends Controller
{
    public function getAll(){
        $libretinas = libretina::all();
        return response()->json($libretinas);
    }
    public function getOne($id){
        $libretina = libretina::find($id);
        return response()->json($libretina);
    }
    public function create(Request $request){
        $data['nombre'] = $request->nombre;
        $data['apellido'] = $request->apellido;
        $data['url_foto'] = $request->url_foto;
        libretina::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function delete($id){
        $nota = nota::where('libretina_id',$id)->delete();
        $horario = horario::where('libretina_id', $id)->delete();
        $res = libretina::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
}
