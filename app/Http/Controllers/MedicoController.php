<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    //Metodos GET, Manejo de Rutas

    //Prueba ver resgistros en nav
    public function list()
    {
        return Medico::orderBy('id', 'desc')->get();
    }
    //Manejo de ruta para ver los registros
    public function index()
    {
        return view('medico.index', ['medicos' => Medico::orderBy('id', 'desc')->get()]);
    }

    //Manejo de ruta para formulario
    public function create()
    {
        return view('medico.create');
    }

    //Muestra información de un solo registro
    public function show($id)
    {
        return view('medico.show', [
            'medico' => Medico::find($id)
        ]);
    }

    //Metodo POST, guarda en BD
    public function store(Request $request)
    {
        //Separa la cadena del nombre por espacios
        $name = preg_split("/[\s,]+/", $request->nombre);

        //Crea objeto y llena atributos
        $med = new Medico();
        $med->codigo = $request->codigo;
        $med->nombre = $name[0];
        $med->apellido1 = $name[1];
        $med->apellido2 = $name[2];
        $med->telefono = $request->telefono;
        $med->direccion = $request->direccion;
        $med->email = $request->email;

        $med->save();

        return redirect('/medicos');
    }
    //Formulario UPDATE
    public function edit($id)
    {
        return view('medico.edit', [
            'medico' => Medico::find($id)
        ]);
    }
    //Metodo UPDATE
    public function update(Request $request)
    {
        $name = preg_split("/[\s,]+/", $request->nombre);
        Medico::where('id', $request->id)->update([
            'nombre' => $name[0],
            'apellido1' => $name[1],
            'apellido2' => $name[2],
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'email' => $request->email
        ]);
        return redirect('/medicos');
    }
    public function delete($id)
    {
        Medico::destroy($id);
        return redirect('/medicos');
    }
}
