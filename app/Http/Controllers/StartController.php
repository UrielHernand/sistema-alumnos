<?php

namespace App\Http\Controllers;

use App\Models\Start;
use Illuminate\Http\Request;

class StartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         //

         $Empleados =  [
            ['id'=>1, 'nombre'=>'Juan', 'apellido'=>'Perez', 'edad'=>25, 'sexo'=>'M'],
            ['id'=>2, 'nombre'=>'Maria', 'apellido'=>'Gomez', 'edad'=>30, 'sexo'=>'F'],
            ['id'=>3, 'nombre'=>'Pedro', 'apellido'=>'Rodriguez', 'edad'=>35, 'sexo'=>'M'],
            ['id'=>4, 'nombre'=>'Luis', 'apellido'=>'Alvarez', 'edad'=>40, 'sexo'=>'M'],
            ['id'=>5, 'nombre'=>'Ana', 'apellido'=>'Gimenez', 'edad'=>45, 'sexo'=>'F'],
            ['id'=>6, 'nombre'=>'Carlos', 'apellido'=>'Fernandez', 'edad'=>50, 'sexo'=>'M'],
            ['id'=>7, 'nombre'=>'Jose', 'apellido'=>'Gonzalez', 'edad'=>55, 'sexo'=>'M'],
            ['id'=>8, 'nombre'=>'Andrea', 'apellido'=>'Acosta', 'edad'=>60, 'sexo'=>'F'],
            ['id'=>9, 'nombre'=>'Lucia', 'apellido'=>'Gutierrez', 'edad'=>65, 'sexo'=>'F'],
            ['id'=>10, 'nombre'=>'Alberto', 'apellido'=>'Sanchez', 'edad'=>70, 'sexo'=>'M'],
            ['id'=>11, 'nombre'=>'Fernanda', 'apellido'=>'Pereyra', 'edad'=>75, 'sexo'=>'F'],
            ['id'=>12, 'nombre'=>'Jorge', 'apellido'=>'Juarez', 'edad'=>80, 'sexo'=>'M'],
            ['id'=>13, 'nombre'=>'Mariana', 'apellido'=>'Lopez', 'edad'=>85, 'sexo'=>'F'],
            ['id'=>14, 'nombre'=>'Ricardo', 'apellido'=>'Garcia', 'edad'=>90, 'sexo'=>'M'],
            ['id'=>15, 'nombre'=>'Susana', 'apellido'=>'Martinez', 'edad'=>95, 'sexo'=>'F'],
            ['id'=>16, 'nombre'=>'Ramiro', 'apellido'=>'Paz', 'edad'=>100, 'sexo'=>'M'],
            ['id'=>17, 'nombre'=>'Gabriela', 'apellido'=>'Quiroga', 'edad'=>105, 'sexo'=>'F'],
            
            
        ];

        echo count($Empleados);
        define('ALUMNO' , 'DevUri');
            $x=1;
            $y=2;

            function prueba() {
            $x=9;
            echo $x.'hel ';
          
            global $y;
            $y = $x + $y;
            echo $y .'000';
            }
            prueba();
            echo $x.'x ';
            echo $y.' ';
           
    

     /*     $name = 'Helllo my name is';
         echo $name */;
        $start = date('Y-M-D');
  
        


        return view('start.index', compact( 'start'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Start $start)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Start $start)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Start $start)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Start $start)
    {
        //
    }
}
