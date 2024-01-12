<form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('alumno.form',['modo'=>'Crear'])
    
    


</form>