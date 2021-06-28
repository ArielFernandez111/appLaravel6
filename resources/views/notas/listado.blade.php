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

<!--a href="{{route('create_nota')}}">Nueva Nota</a-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Listado de Notas</h3>
                    <br>
                    <h6 class="card-subtitle"><a href="{{route('create_nota')}}" class="btn btn-primary">Nueva Nota</a></h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23"
                            class="display nowrap table table-hover table-striped table-bordered "
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th><h6 class="font-weight-bold">Documento</h6></th>
                                    <th><h6 class="font-weight-bold">Area</h6></th>
                                    <th><h6 class="font-weight-bold">Hoja Ruta</h6></th>
                                    <th><h6 class="font-weight-bold">Fecha Asig. CITE</h6></th>
                                    <th><h6 class="font-weight-bold">Nro. CITE</h6></th>
                                    <th><h6 class="font-weight-bold">Autor</h6></th>
                                    <th><h6 class="font-weight-bold">Destinatario</h6></th>
                                    <th><h6 class="font-weight-bold">Cargo</h6></th>
                                    <th><h6 class="font-weight-bold">Institucion</h6></th>
                                    <th><h6 class="font-weight-bold">Referencia</h6></th>
                                    <th><h6 class="font-weight-bold">Fecha Recepcion</h6></th>
                                    <th><h6 class="font-weight-bold">Accion</h6></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th><h6 class="font-weight-bold">Documento</h6></th>
                                    <th><h6 class="font-weight-bold">Area</h6></th>
                                    <th><h6 class="font-weight-bold">Hoja Ruta</h6></th>
                                    <th><h6 class="font-weight-bold">Fecha Asig. CITE</h6></th>
                                    <th><h6 class="font-weight-bold">Nro. CITE</h6></th>
                                    <th><h6 class="font-weight-bold">Autor</h6></th>
                                    <th><h6 class="font-weight-bold">Destinatario</h6></th>
                                    <th><h6 class="font-weight-bold">Cargo</h6></th>
                                    <th><h6 class="font-weight-bold">Institucion</h6></th>
                                    <th><h6 class="font-weight-bold">Referencia</h6></th>
                                    <th><h6 class="font-weight-bold">Fecha Recepcion</h6></th>
                                    <th><h6 class="font-weight-bold">Accion</h6></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($notas as $nota)
                                    <tr>
                                        <td><h6>
                                            @php
                                                $documento = App\Documento::find($nota->id_documento);

                                            @endphp
                                            {{ $documento->nombre }}
                                            </h6>
                                        </td>
                                        <td>
                                            <h6>
                                            @php
                                                $area = App\Area::find($nota->id_area);

                                            @endphp
                                            {{ $area->nombre }}
                                            </h6>
                                        </td>
                                        <td><h6>{{ $nota->cod_hr }}-{{ $nota->nro_hr }}-{{ $nota->reg_hr }}</h6></td>
                                        <td><h6>{{ date('d/m/Y', strtotime($nota->fecha_cite)) }}</h6></td>
                                        <td><h6>MEFP/VPCF/DGSGIF/{{$nota->nro_cite}} {{$nota->gestion}}</h6></td>
                                        <td><h6>{{ $nota->autor }}</h6></td>
                                        <td><h6>{{ $nota->nombre_des }}</h6></td>
                                        <td><h6>{{ $nota->cargo_des }}</h6></td>
                                        <td><h6>{{ $nota->inst_des }}</h6></td>
                                        <td><h6>{{ $nota->referencia }}</h6></td>
                                        <td><h6>{{ date('d/m/Y', strtotime($nota->fecha_rec)) }}</h6></td>

                                        <td><h6><button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button><a href="{{route('modifica_nota',$nota)}}">Editar nota</a></h6></td>
                                        
                                    </tr>       
                                @endforeach
                                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop
