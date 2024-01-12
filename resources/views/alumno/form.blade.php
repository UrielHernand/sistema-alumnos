formulario que será para crear y editar
   <label for="nombre">Nombre</label>
   <input type="text" name="nombre" id="nombre" value= "{{$alumno->nombre}}">
   <br>
  
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno" value= "{{$alumno->apellidoPaterno}}">

    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{$alumno->apellidoMaterno}}">

    <br>
    
    <label for="correo">Email</label>
    <input type="correo" name="correo" id="correo" value="{{$alumno->correo}}">
   
    <br>
    <label for="foto">Foto</label>
    <img src="{{asset('storage').'/'.$alumno->foto}}" alt="">
    <input type="file" name="foto" id="foto" value="{{old('foto')}}">
    <br>
    <input type="submit" value="Enviar">