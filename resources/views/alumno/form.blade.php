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
<input type="text" name="nombre" id="nombre" class="form-control" value="{{isset($alumno->nombre)? $alumno->nombre : old('nombre')}}">

<label for="apellidoPaterno">Apellido Paterno</label>
<input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" value="{{isset($alumno->apellidoPaterno)? $alumno->apellidoPaterno : old('apellidoPaterno')}}">

<label for="apellidoMaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" value="{{isset($alumno->apellidoMaterno) ? $alumno->apellidoMaterno: old('apellidoMaterno')}}">
<hr>
<div class="input-group mb-3">
   <hr>
  <input type="correo" name="correo" class="form-control" id="correo" value="{{isset($alumno->correo)? $alumno->correo : old('correo')}}" placeholder="correo" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">@example.com</span>
  </div>
</div>

<label for="foto">Foto</label>
@if(isset($alumno->foto))
  <img src="{{asset('storage').'/'.$alumno->foto}}" alt="" width="100" class="img-fluid mb-3">
@endif
<div class="custom-file mb-3">
  <input type="file" name="foto" id="foto" class="custom-file-input">
  
</div>

<button type="button" class="btn btn-secondary"><a style="text-decoration:none" href="{{url('alumno')}}" class="text-light">Regresar</a></button>
<input type="submit" class="btn btn-primary" value="{{$modo}}">