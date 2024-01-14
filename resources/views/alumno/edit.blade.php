@extends('layouts.app')

@section('content')
<div class="container-sm">

     <div class="row">
        <div class="col-md-6">
            <form  action="{{url('/alumno/' .$alumno->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{method_field('PATCH')}}
                @include('alumno.form',['modo'=>'Editar'])
            </form>
        </div>

         <div class="col-md-6">
            <img src="{{asset('storage').'/'. 'uploads/k6zCfkfzpxaF4RMsMCf8uX22cj1AHtLeXddVmHEg.png'}}" alt="" width="600" height="80%">
            
         </div>
     </div>



</div>
@endsection

