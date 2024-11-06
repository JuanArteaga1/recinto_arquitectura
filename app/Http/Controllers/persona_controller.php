<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;
use function PHPUnit\Framework\assertDirectoryIsReadable;

class persona_controller extends Controller
{
    public function index(){
        $personas = Persona::all();
        return view('personas.index', ['personas_tabla' => $personas]);
    }
    public function create(){
        return view('personas.create');
    }
    public function editar($id){
        $personas = Persona::where('id',$id)->first();
        return view('personas.edit',['persona' => $personas]);
    }
    public function store(Request $request){
        try {
            $personas = new Persona();
            $personas->nombre_completo=$request->nombre_completo;
            $personas->telefono=$request->telefono;
            $personas->correo_electronico=$request->correo_electronico;
            $personas->save();
            return redirect(route('persona.create'))->with('success', 'persona registrada con exito');

        } catch (\Exception $exception) {
            return $exception->getMessage();

            
            //throw $th;
        }
    }
    
}
