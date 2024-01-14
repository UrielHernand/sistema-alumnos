<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; //para poder borrar la foto

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
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellidoPaterno'=>'required|string|max:100',
            'apellidoMaterno'=>'required|string|max:100',
            'correo'=>'required|email',
            'foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requwerida'
        ];

        $this->validate($request,$campos,$mensaje);

        //recobir datos del alumno
        $datosAlumno = request()->except('_token');
        if($request->hasFile('foto')){
            $datosAlumno['foto']=$request->file('foto')->store('uploads','public');
        }
        Alumno::insert($datosAlumno);

        /* return response()->json($datosAlumno); */
        return redirect('alumno')->with('mensaje','Alumno agregado con éxito');
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
    public function edit($id)
    {
        //
        $alumno = Alumno::findOrFail($id);

        return view('alumno.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $campos=[
            'nombre'=>'required|string|max:100',
            'apellidoPaterno'=>'required|string|max:100',
            'apellidoMaterno'=>'required|string|max:100',
            'correo'=>'required|email',
  
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'foto.required'=>'La foto es requerida'
           
        ];
        
        if($request->hasFile('foto')){
            $campos=['foto'=>'required|max:10000|mimes:jpeg,png,jpg'];

            $mensaje=[
                'foto.required'=>'La foto es requerida'
            ];

         
        };

        $this->validate($request,$campos,$mensaje);


        $datosAlumno = request()->except(['_token','_method']);
        if($request->hasFile('foto')){
            $alumno = Alumno::findOrFail($id);
            Storage::delete('public/' .$alumno->foto);
            $datosAlumno['foto']=$request->file('foto')->store('uploads','public');
        }

        Alumno::where('id','=',$id)->update($datosAlumno);
        
        $alumno = Alumno::findOrFail($id);

       /*  return view('alumno.edit', compact('alumno'));   */
        return redirect('alumno')->with('mensaje','Alumno editado con éxito');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $alumno = Alumno::findOrFail($id);
        if(Storage::delete('public/' .$alumno->foto)){
            Alumno::destroy($id);

        }
  
        return redirect('alumno')->with('  ','Alumno borrado con éxito');
    }
}
