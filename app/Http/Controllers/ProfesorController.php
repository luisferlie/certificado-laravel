<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfesorRequest;
use App\Http\Requests\UpdateProfesorRequest;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesores=Profesor::paginate(10);
        return view('profesores.profesores-list',["profesores"=>$profesores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfesorRequest $request)
    {

         $valores=$request->input();
         $profesor=new Profesor($valores);
         $profesor->save();
         $profesores=Profesor::all();
         session()->flash('status',"se ha creado  el profesor $profesor->nombre");
         session()->flash('message','profesor añadido');
          //crea variable de session  de un solo uso
         return view('profesores.profesores-list',['profesores'=>$profesores]);
    }


    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $profesor=Profesor::find($id);

        return view('profesores.profesorEdit',["profesor" =>  $profesor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfesorRequest $request, int $id)
    {
        $profesor=Profesor::find($id);
        $valores=$request->input();
        $profesor->update($valores);
        $profesores= Profesor::all();
        session()->flash('actualizar','se ha modificado a un profesor');

        return view('profesores.profesores-list',['profesores'=>$profesores]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $profesor=Profesor::find($id);
        $profesor->delete();
        //$profesores = Profesor::all();
        session()->flash('borrar','se ha eliminado a un profesor');
        // return view ("profesores.profesores-list",["profesores"=>$profesores]);
        return back();
    }
}
