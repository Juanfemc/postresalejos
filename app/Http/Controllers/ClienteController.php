<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //

    public function listar()
    {

        $clientes = Cliente::all();

        return view('listado.lista_cliente', ['clientes' => $clientes]);

    }

    public function form_registro(){
        return view("Registros.Registro_cliente");
    }

    public function registrar(Request $request){
        $cliente=new Cliente();
        $cliente->nombre=$request->input('nombre_cliente');
        $cliente->telefono=$request->input('telefono_cliente');
        $cliente->correo=$request->input('correo_cliente');
        $cliente->save();
        return redirect()->route('listado_cliente');
    }
    #-------------------comienso--------------------
    public function show($id){
        $cliente=Cliente::Where('id_cliente',"=",$id)->first();
        return view("detalle.detalle_cliente")
        ->with(compact('cliente'));
    }

    public function eliminar(Request $request){
      $id= $request->input('id_eli');
      $cliente=Cliente::findOrFail($id);
      $cliente->delete();
      return redirect()->route('listado_cliente');
    }
    #--------------------------------------

    public function getActualizar($id)
    {
        $cliente = Cliente::where('id_cliente', "=", $id)->first();
        return view("actualizar.formulario_actualizarc")->with(compact('cliente'));
    }

    public function actualizar(Request $request)
    {

        $cliente = Cliente::findOrFail($request->input('id_cliente'));
        $cliente->nombre = $request->input('nombre_cliente');
        $cliente->telefono = $request->input('telefono_cliente');
        $cliente->correo = $request->input('correo_cliente');

        $cliente->save();

        return redirect()->route('listado_cliente');

    }

}
