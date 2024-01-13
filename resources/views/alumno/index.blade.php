
@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible "   role="alert">
    <strong>{{Session::get('mensaje')}}</strong>
</div>

@endif
 <button type=="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
</button>
<a href="{{url('alumno/create')}}">Agregar Alumno</a>
    
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
           
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

