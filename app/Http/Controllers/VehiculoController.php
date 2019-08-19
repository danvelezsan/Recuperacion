<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Vehiculo;
use App\Persona;
use App\Marca;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        return view('registrar')->with('marcas', $marcas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message=([
            'cedula.unique' => 'Persona Ya Existente',
            'cedula.numeric' => 'Datos Incorrectos',
            'nombre.string' => 'Datos Incorrectos',
            'placa.string' => 'Datos Incorrectos',
            'marca.string' => 'Datos Incorrectos',
            'marca.exists' => 'Marca No Registrada',
        ]);

        $request->validate([
            'cedula' => 'required|unique:personas|numeric',
            'nombre' => 'required|string',
            'placa' => 'required|string',
            'marca' => 'required|exists:marcas,nombre',
        ],$message);

        $persona = new Persona([
            'cedula' => $request->get('cedula'),
            'nombre' => $request->get('nombre'),
        ]);
        $persona->save();
        $vehiculo = new Vehiculo([
            'placa' => $request->get('placa'),
            'marca' => $request->get('marca'),
            'dueno' => $request->get('cedula'),
        ]);
        $vehiculo->save();

        session()->flash('registrado', 'La persona y el vehiculo han sido registrados exitosamente');

        return redirect('/A765/listarVehiculos');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $vehiculos = Vehiculo::all();
        return view('listar')->with('vehiculos', $vehiculos);
    }

    public function stats()
    {
        $counts = array();
        $marcas = DB::table('marcas')->pluck('nombre');
        foreach ($marcas as $marca) {
            $counts[$marca] = DB::table('vehiculos')->where('marca', $marca)->count();
        }
        return view('estadisticas')->with('counts', $counts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
