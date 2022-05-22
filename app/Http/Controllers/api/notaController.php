<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\nota;
class notaController extends Controller
{
    public function getNotasIdLibretina($id){
        $notas = nota::where('libretina_id', $id)->get();
        return response()->json($notas);
    }
    public function addNota(Request $request){
        $data['titulo'] = $request->titulo;
        $data['descripcion'] = $request->descripcion;
        $data['fecha'] = $request->fecha;
        $data['tipo'] = 'nota';
        $data['libretina_id'] = $request->libretina_id;
        nota::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }
    public function deleteNota($id){
        $res = nota::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }
    public function getNotasIdLibrretinaFecha($id, $fecha){
        $notas = nota::where('libretina_id', $id)->where('fecha', $fecha)->get();
        return response()->json($notas);
    }
}
