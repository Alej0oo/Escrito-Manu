<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\Validator;

class TareaController extends Controller
{
    public function CrearTarea(Request $request){

        $tarea = new Tarea();

        $tarea -> titulo = $request -> titulo;
        $tarea -> contenido = $request -> contenido;
        $tarea -> estado = $request -> estado;
        $tarea -> autor = $request -> autor;

        $tarea -> save();
        return $tarea;

    }

    public function EliminarTarea($id){

        $tarea = Tarea::find($id);
        $tarea -> deleted_at = now();
        $tarea -> save();
        return "Se elimino la tarea";

    }

    public function ListarTareas(){

        $tareas = Tarea::all();

        return $tareas;

    }

    public function ListarUnaTarea($id){

        $tarea = Tarea::find($id);

        return $tarea;

    }

    public function ModificarTarea($id, Request $request){

        $tarea = Tarea::find($id);

        $validator = Validator::make($request->all(), [

            'titulo' => 'string',
            'contenido' => 'string',
            'estado' => 'string',
            'autor' => 'string'

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

    }

    public function BuscarTareaPorAutor($autor, Request $request){
        return Tarea::where('autor', '=', $autor)->get();
    }
}