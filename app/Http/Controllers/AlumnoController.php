<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Http\Requests\StoreAlumnoRequest;
use App\Http\Requests\UpdateAlumnoRequest;
use App\Models\Alumno;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=Alumno::paginate(5);
        return view('alumnos.list',["alumnos"=>$alumnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlumnoRequest $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'apellidos' => 'required|min:5',
          ]);
         $valores=$request->input();
         $alumno=new Alumno($valores);
         $alumno->save();
         $alumnos=Alumno::all();
         return view('alumnos.list',['alumnos'=>$alumnos]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        $page = Request::get("page");
    return view ("alumnos.list" , compact("alumno","page"));

    //    return view('alumnos.alumnoEdit',["alumno"=>$alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlumnoRequest $request, Alumno $alumno)
    {

        $page =$request->input('page');
        $datos_nuevos = $request->input();
        $alumno->updateOrFail ($datos_nuevos );
        return redirect ("alumnos?page= $page");

    }

    /**
     * Remove the specified resource from storage.
     */

public function destroy(Alumno $alumno)
{
    $alumnos = Alumno::paginate(5);
    $alumno->delete();

    return back();




}
}
