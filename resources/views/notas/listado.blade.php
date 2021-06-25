@extends('app')


@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <h1>
            LISTADO DE NOTAS
        </h1>
    </div>
    </div>
</div>

<a href="{{route('create')}}">Nueva Nota</a>

@if (session('status'))
<ul>
    @foreach ($notas as $nota)
        <li>{{$nota->nombre_des}}</li>        
    @endforeach
</ul>
@endif




@stop
