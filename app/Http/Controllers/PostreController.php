<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postre;

class PostreController extends Controller
{
    //

    public function listar()
    {

        $postres = Postre::all();

        return view('listado.lista_postre', ['postres' => $postres]);

    }

    public function form_registro(){
        return view("Registros.Registro_postres"); 
    }

    public function registrar(Request $request){
        $postre=new Postre();
        $postre->nombre=$request->input('nombre_postre');
        $postre->decripcion=$request->input('descipcion_postre');
        $postre->precio=$request->input('precio_postre');
        $postre->save();
        return redirect()->route('listado_postre');
    }

    public function show($id){
        $postre=Postre::Where('id_postre',"=",$id)->first();
        return view("detalle.detalle_postre")
        ->with(compact('postre'));
    }
   
    public function eliminar($id){
      $postre=Postre::findOrFail($id);
      $postre->delete();
      return redirect()->route('listado_postre');
    }
    #--------------------------------------

    public function getActualizar($id)
    {
        $postre = Postre::where('id_postre', "=", $id)->first();
        return view("actualizar.formulario_actualizar")->with(compact('postre'));
    }

    public function actualizar(Request $request)
    {

        $postre = Postre::findOrFail($request->input('id_postre'));
        $postre->nombre = $request->input('nombre_postre');
        $postre->precio = $request->input('precio_postre');
        $postre->decripcion = $request->input('descripcion_postre');

        $postre->save();

        return redirect()->route('listado_postre');
  
    }
}
