
@extends('layouts.app')
@section('title','Alumno')
@section('content')
<div class="container-lg">
    
<div class="row">
    <div class="col-md-6">
        <form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data" class="text-black ">
            @csrf
            @include('alumno.form',['modo'=>'Crear'])
        </form>
    </div>

     <div class="col-md-6">
        <img src="{{asset('storage').'/'. 'uploads/k6zCfkfzpxaF4RMsMCf8uX22cj1AHtLeXddVmHEg.png'}}" alt="" width="600" height="80%">
        
     </div>
 </div>
</div>
@endsection
