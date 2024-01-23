
@extends('layouts.app')

@section('content')
<div class="container">

    <button type="button" class="btn btn-primary"><a style="text-decoration:none"  href="{{url('/')}}" class="text-light">Regresar</a></button>
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert" id="alertIndex">
        <strong>{{ Session::get('mensaje') }}</strong>
       
    </div>
     <script>
        setTimeout(function () {
           var  $alerta =  document.getElementById('alertIndex');
          
               $alerta.style.display = 'none';
          
        }, 2000);
    </script>
    @endif


<button type="button" class="btn btn-primary"><a style="text-decoration:none"  href="{{url('alumno/create')}}" class="text-light">Agregar Alumno</a></button>
<hr>

  <h2 class="fw-bolder">Lista de alumnos</h2>
<table class="table " >
    <caption>Lista de alumnos</caption>
    <thead class="table-light ">
        <tr class=" bg-success text-white">
            <th scope="col">Id</th>
            <th scope="col">Foto</th> 
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
  
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{$alumno->id}}</td>
            <td>
                <img src="{{asset('storage').'/'.$alumno->foto}}" alt="" width="100">
            
            </td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidoPaterno}}</td>
            <td>{{$alumno->apellidoMaterno}}</td>
            <td>{{$alumno->correo}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="margin: 2px">
                    <button type="button" class="btn btn-warning">
                        <a style="text-decoration:none" href="{{url('/alumno/'.$alumno->id.'/edit')}}" class="text-light">
                            Editar 
                        </a>
                    </button>
                   
                    <form action="{{url('/alumno/' .$alumno->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" onclick="return confirm('¿Borrar?');" class="btn btn-danger">
                            Borrar    
                            
                        </button>
                    </form>
                </div>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
{!!$alumnos->links()!!}
</div>
@endsection

