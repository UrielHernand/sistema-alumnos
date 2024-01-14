


 <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1> {{$modo}} Alumno </h1>
                </div>
            </div>
        </div>
        
        
   
  </div>
  @if(count($errors) > 0)
  <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
 
  </div>
  <script>
    
    setTimeout(function() {
      var errorAlert = document.getElementById('errorAlert');
      if (errorAlert) {
        errorAlert.style.display = 'none';
      }
    }, 4000);
  </script>
@endif

<div class="form-group">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre" class="form-control" value="{{isset($alumno->nombre)? $alumno->nombre : old('nombre')}}">
</div>


<div class="form-group">
  <label for="apellidoPaterno">Apellido Paterno</label>
  <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" value="{{isset($alumno->apellidoPaterno)? $alumno->apellidoPaterno : old('apellidoPaterno')}}">
</div>


<div class="form-group">
  <label for="apellidoMaterno">Apellido Materno</label>
  <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control" value="{{isset($alumno->apellidoMaterno) ? $alumno->apellidoMaterno: old('apellidoMaterno')}}">
</div>


<div class="form-group">
  <label for="correo">Correo</label>
  <div class="input-group">
    <input type="email" name="correo" class="form-control" id="correo" value="{{isset($alumno->correo)? $alumno->correo : old('correo')}}" placeholder="correo" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>
  </div>
</div>

<div class="form-group">
  <label for="foto">Foto</label>
  @if(isset($alumno->foto))
    <div class="mb-3">
      <img src="{{asset('storage').'/'.$alumno->foto}}" alt="Foto del Alumno" width="100" class="img-fluid">
    </div>
  @endif
  <div class="custom-file">
    <input type="file" name="foto" id="foto" class="custom-file-input">
    <label class="custom-file-label" for="foto">Seleccionar archivo</label>
  </div>
</div>


<div class="mt-4">
  <a href="{{url('alumno')}}" class="btn btn-secondary">Regresar</a>
  <button type="submit" class="btn btn-primary">{{$modo}}</button>
</div>