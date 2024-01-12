<form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
    <br>
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno" value="{{old('apellidoPaterno')}}">

    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{old('apellidoMaterno')}}">

    <br>
    
    <label for="correo">Email</label>
    <input type="correo" name="correo" id="correo" value="{{old('correo')}}">
   
    <br>
    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto" value="{{old('foto')}}">
    <br>
    <input type="submit" value="Enviar">


</form>