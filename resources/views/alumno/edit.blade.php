formulario de edicidón de formulario

<form  action="{{url('/alumno/' .$alumno->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('alumno.form',['modo'=>'Editar'])
</form>

