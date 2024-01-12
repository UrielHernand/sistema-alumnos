<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['alumnos']=Alumno::paginate(5);
        return view('alumno.index' , $datos);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return  view('alumno.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recobir datos del alumno
        $datosAlumno = request()->except('_token');
        if($request->hasFile('foto')){
            $datosAlumno['foto']=$request->file('foto')->store('uploads','public');
        }
        Alumno::insert($datosAlumno);

        return response()->json($datosAlumno);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Alumno::destroy($id);
        return redirect('alumno');
    }
}
