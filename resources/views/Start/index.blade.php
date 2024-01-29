@extends('layouts.app')
@section('content')
<div class="container">
  <h1 class="display-9">
    {{ auth()->user()->name }}
    
  </h1>

    
    <div class="card mb-3" style="max-width: 840px;">
      <p class="lead text-center text-primary ">Servicios Escolares</p>
        <div class="row g-0">
          <div class="col-md-5">
            <img src="{{asset('storage').'/'. 'uploads/k6zCfkfzpxaF4RMsMCf8uX22cj1AHtLeXddVmHEg.png'}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-5">
            <div class="card-body">
              <h5 class="card-title">Alumnos</h5>
              <p class="card-text"> Agregar ,editar y dar de baja</p>
              <p class="card-text"><small class="text-muted">Servicios Escolares</small></p>
                <a href="{{url('/alumno')}}" class="btn btn-primary btn-lg">Alumnos</a>    
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3"  style="max-width: 840px;">

        <div class="row g-0" >
            <div class="col-md-5">
                <img src="{{asset('storage').'/'. 'uploads/k6zCfkfzpxaF4RMsMCf8uX22cj1AHtLeXddVmHEg.png'}}" class="img-fluid rounded-start" alt="Maestros">
            </div>

            <div class="col-md-5">
                <div class="card-body">
                    <h5 class="card-title">Maestros</h5>
                    <p class="card-text"> Agregar ,editar y dar de baja</p>
                    <p class="card-text"><small class="text-muted">Servicios Escolares</small></p>
                    <a href="{{url('/maestro')}}" class="btn btn-primary btn-lg">Maestros</a>
                </div>
            </div>

        </div>

      </div>
    




</div>
@endsection
