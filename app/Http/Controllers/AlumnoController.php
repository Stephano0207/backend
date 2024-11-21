<?php

namespace App\Http\Controllers;

use App\Models\alumnos;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $alumnos= alumnos::all();
      return response()->json($alumnos,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $alumno= alumnos::create($request->all());;
        $alumno->save();
        return response()->json($alumno,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $alumno= alumnos::find($id);
       return response()->json($alumno,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno= alumnos::findOrFail( $id );
        $alumno->update($request->all());
        $alumno->save();
        return response()->json($alumno,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $alumno= alumnos::findOrFail( $id )->delete();
       return response()->json($alumno, 200);
    }
    // public function filtro(Request $request){
    //     // Obtener el valor del apellido desde la query string
    //     $descripcion = $request->query('descripcion');

    //     // Filtrar clientes cuyo apellido coincida con el valor ingresado
    //     $clientes = Producto::where('descripcion', 'LIKE', '%' . $descripcion . '%')->get();

    //     // Retornar los resultados en formato JSON
    //     return response()->json($clientes);
    // }
}
