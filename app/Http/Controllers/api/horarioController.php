<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\horario;

class horarioController extends Controller
{
    public function getHorariosIdLibretina($id){
        $horario = horario::where('libretina_id', $id)->get();
        return response()->json($horario);
    }
    
    public function addHorario(Request $request, $id){
        $data['color'] = $request->color;
        $data['titulo'] = $request->titulo;
        $data['fecha_inicio'] = $request->fechainicio;
        $data['fecha_fin'] = $request->fechafin;
        $data['hora_inicio'] = $request->horainicio;
        $data['hora_fin'] = $request->horafin;
        $data['tipo'] = 'horario';
        $data['libretina_id'] = $id;
        horario::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }

    public function deleteHorario($id){
        $res = horario::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
    }

    

    public function getHorariosIdLibrretinaFecha($id, $fecha){
        $horario = horario::where('libretina_id', $id)->where('fecha_inicio', '<=', $fecha)->where('fecha_fin', '>=', $fecha)->orderBy('hora_inicio', 'asc')->get();
        return response()->json($horario);
    }
}
