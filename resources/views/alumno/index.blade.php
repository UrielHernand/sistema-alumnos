
Mostrar lista de Alumnos.
    
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
            <td>{{$alumno->foto}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidoPaterno}}</td>
            <td>{{$alumno->apellidoMaterno}}</td>
            <td>{{$alumno->correo}}</td>
            <td>Editar |

                
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


