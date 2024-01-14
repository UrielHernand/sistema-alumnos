
@extends('layouts.app')

@section('content')
<div class="container">



@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible "   role="alert">
    <strong>{{Session::get('mensaje')}}</strong>
    <button type ="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
   </button>
</div>


@endif


<button type="button" class="btn btn-primary"><a style="text-decoration:none"  href="{{url('alumno/create')}}" class="text-light">Agregar Alumno</a></button>
<hr>

  <h2 class="fw-bolder">Lista de alumnos</h2>
<table class="table">
    <caption>Lista de alumnos</caption>
    <thead class="table-light">
        <tr >
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
                <a href="{{url('/alumno/'.$alumno->id.'/edit')}}">Editar</a>

                
                |

                
                <form action="{{url('/alumno/' .$alumno->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Desea eliminar el registro?')" value="Borrar">
                
                </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
{!!$alumnos->links()!!}

</div>
@endsection

