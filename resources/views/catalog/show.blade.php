@extends('layouts.master')
@section('content')
ID: {{ $id }}

<div class="row">
<div class="col-sm-4">
{{--La imatge de la película --}}
<img src="{{$pelicula[$id] ['poster']}}" style="height:200px"/>
</div>
<div class="col-sm-8">
{{-- TODO: Datos de la película --}}
    <h2>{{--Titol de la película--}}</h2>
    <p>Año: {{--any--}}</p>
    <p>Director: {{--director--}}</p>
    <p><strong>Resumen: </strong> {{--synopsis--}}</p>
    <p><strong>Estado: </strong>{{--condicional per dirllogada--}}</p>
    <div class="butons">
        <div type="button" class="btn btn-danger">Devolver película</div>
        <div type="button" class="btn btn-warning">Editar película</div>


    </div>
   

</div>
</div>
@stop