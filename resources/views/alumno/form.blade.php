formulario que será para crear y editar

<h1>{{$modo}} alumno</h1>
@if(count($errors)>0)

   @foreach($errors->all() as $error)
   <div class="alert alert-danger" role="alert">
   {{$error}}
   </div>
   @endforeach
@endif
   <label for="nombre">Nombre</label>
   <input type="text" name="nombre" id="nombre" value= "{{isset($alumno->nombre)? $alumno->nombre : old('nombre')}}">
   <br>
  
    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" id="apellidoPaterno" value= "{{isset($alumno->apellidoPaterno)? $alumno->apellidoPaterno : old('apellidoPaterno')}}">

    <br>
    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{isset($alumno->apellidoMaterno) ? $alumno->apellidoMaterno: old('apellidoMaterno')}}">

    <br>
    
    <label for="correo">Email</label>
    <input type="correo" name="correo" id="correo" value="{{isset($alumno->correo)? $alumno->correo : old('correo')}}">
   
    <br>
    <label for="foto">Foto</label>

      @if(isset($alumno->foto))
    <img src="{{asset('storage').'/'.$alumno->foto}}" alt="" width="100">
      @endif
    <input type="file" name="foto" id="foto" value="">

    <br>
    <a href="{{url('alumno/')}}">Regresar</a>
      <br>


    <input type="submit" value="{{$modo}}">