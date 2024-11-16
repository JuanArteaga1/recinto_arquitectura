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
    public function principal(){
        return view('personas.recinto');
    }
    public function update(Request $request, $id){
        $personas =  Persona::where('id',$id)->update([
            'nombre_completo'=> $request->nombre_completo,
            'telefono'=> $request->telefono,
            'correo_electronico' => $request->correo_electronico,
            'contraseña' => $request->contraseña,

        ]);
        if($personas){
            return redirect(route('personas.index'))->with('success','persona actualizado con exito');
        }
        
    }
    
    public function store(Request $request){
        try {
            $personas = new Persona();
            $personas->nombre_completo=$request->nombre_completo;
            $personas->telefono=$request->telefono;
            $personas->correo_electronico=$request->correo_electronico;
            $personas->contraseña=$request->contraseña;
            $personas->save();
            return redirect(route('personas.create'))->with('success', 'persona registrada con exito');

        } catch (\Exception $exception) {
            return $exception->getMessage();


            //throw $th;
        }
    }
    public function delete($id){
        try{
            $personas =  Persona::where('id',$id)->delete();
            if($personas){
                return redirect(route('personas.index'))->with('success','eliminado con exito');
            }


        }catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

}
