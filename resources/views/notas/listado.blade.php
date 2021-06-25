@extends('app')


@section('content')

<!--div class="container">
    <div class="row">
    <div class="col-md-12">
        <h1>
            LISTADO DE NOTAS
        </h1>
    </div>
    </div>
</div-->

<!--a href="{{route('create')}}">Nueva Nota</a-->

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Listado de Notas</h4>
        <h6 class="card-subtitle"><a href="{{route('create')}}">Nueva Nota</a></h6>
        <div class="table-responsive m-t-40">
            <table id="example23"
                class="display nowrap table table-hover table-striped table-bordered"
                cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Tipo Documento</th>
                        <th>Area</th>
                        <th>Hoja Ruta</th>
                        <th>Fecha Asig. CITE</th>
                        <th>Nro. CITE</th>
                        <th>Autor</th>
                        <th>Nombre Destinatario</th>
                        <th>Cargo</th>
                        <th>Institucion</th>
                        <th>ReferenciEa</th>
                        <th>Fecha Rec</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Tipo Documento</th>
                        <th>Area</th>
                        <th>Hoja Ruta</th>
                        <th>Fecha Asig. CITE</th>
                        <th>Nro. CITE</th>
                        <th>Autor</th>
                        <th>Nombre Destinatario</th>
                        <th>Cargo</th>
                        <th>Institucion</th>
                        <th>ReferenciEa</th>
                        <th>Fecha Rec</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($notas as $nota)
                        <tr>
                            <td>{{$nota->id_documento}}</td>
                            <td>{{$nota->id_area}}</td>
                            <td>{{$nota->cod_hr}}-{{$nota->nro_hr}}-{{$nota->reg_hr}}</td>
                            <td>{{$nota->fecha_cite}}</td>
                            <td>MEFP/VPCF/DGSGIF/{{$nota->nro_cite}} {{$nota->gestion}}</td>
                            <td>{{$nota->autor}}</td>
                            <td>{{$nota->nombre_des}}</td>
                            <td>{{$nota->cargo_des}}</td>
                            <td>{{$nota->inst_des}}</td>
                            <td>{{$nota->referencia}}</td>
                            <td>{{$nota->fecha_rec}}</td>
                        </tr>       
                    @endforeach
                                        
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop
