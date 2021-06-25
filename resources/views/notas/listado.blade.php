@extends('app')


@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat quod excepturi cum. Iste maiores voluptas minus ducimus sed, doloremque aspernatur veritatis illum laboriosam beatae. Libero vel vitae rerum saepe quisquam.
        </p>
    </div>
    </div>
</div>

<ul>
    @foreach ($notas as $nota)
        <li>{{$nota->}}</li>        
    @endforeach
</ul>
    
@stop
