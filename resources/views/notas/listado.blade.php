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
                                    {{-- <th><h6 class="font-weight-bold">Cargo</h6></th>
                                    <th><h6 class="font-weight-bold">Institucion</h6></th> --}}
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
                                    {{-- <th><h6 class="font-weight-bold">Cargo</h6></th>
                                    <th><h6 class="font-weight-bold">Institucion</h6></th> --}}
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
                                        <td>
                                            <h6>
                                                @if ( $nota->id_documento === 1 || $nota->id_documento === 2 || $nota->id_documento === 3 || $nota->id_documento === 4)  
                                                    {{ $nota->hojaruta->codigo }}-{{ $nota->hojaruta->numero }}-{{ $nota->hojaruta->registro }}
                                                @endif
                                            {{-- @php
                                                // $hojaruta = App\HojaRuta::all();
                                                // dd($hojaruta);
                                                $hojaruta = App\Nota::find($nota->id);
                                                 dd($hojaruta->hojaruta);
                                            @endphp
                                            {{ $hojaruta->codigo }} --}}

                                                {{-- {{ $nota->cod_hr }}-{{ $nota->nro_hr }}-{{ $nota->reg_hr }} --}}
                                            </h6>
                                        </td>
                                        <td><h6>{{ date('d/m/Y', strtotime($nota->fecha_cite)) }}</h6></td>
                                        <td><h6>
                                            @if ( $nota->id_area === 1)
                                                MEFP/VPCF/DGSGIF/N°
                                            @else
                                                @if ( $nota->id_area === 2)
                                                    MEFP/VPCF/DGSGIF/UISS/N°
                                                @else
                                                    @if ( $nota->id_area === 3)
                                                        MEFP/VPCF/DGSGIF/USI/N°
                                                    @else
                                                        MEFP/VPCF/DGSGIF/UIT/N°
                                                    @endif
                                                @endif
                                            @endif
                                            {{$nota->nro_cite}}/{{$nota->gestion}}
                                        
                                        </h6></td>
                                        <td>
                                            <h6>
                                            @php
                                                $user = App\User::find($nota->id_user);

                                            @endphp
                                            {{ $user->name }}
                                            </h6>
                                        </td>
                                        <td><h6>{{ $nota->nombre_des }}</h6></td>
                                        {{-- <td><h6>{{ $nota->cargo_des }}</h6></td>
                                        <td><h6>{{ $nota->institucion_des }}</h6></td> --}}
                                        <td><h6>{{ $nota->referencia }}</h6></td>
                                        <td><h6>{{ date('d/m/Y', strtotime($nota->fecha_recepcion)) }}</h6></td>

                                        <td>
                                            <h6>
                                                {{-- <button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button> --}}
                                                <a href="{{route('modifica_nota',$nota)}}" class="btn btn-info">Editar</a>
                                                <a href="{{route('show_nota',$nota)}}" class="btn btn-info">Ver</a>
                                            </h6>
                                        </td>
                                        
                                    </tr>       
                                @endforeach
                                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="card-title">Listado de Notas</h3>
                    <br>
                    <h6 class="card-subtitle"><a href="{{route('create_nota')}}" class="btn btn-primary">Nueva Nota</a></h6>
                    <br>
                    <table id="dtnotas" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Documento</th>
                                <th>Area</th>
                                <th>Hoja Ruta</th>
                                <th>Fecha Asig CITE</th>
                                <th>Nro CITE</th>
                                <th>Autor</th>
                                <th>Destinatario</th>
                                <th>Cargo</th>
                                <th>Institución</th>
                                <th>Referencia</th>
                                <th>Fecha Recepcion</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
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
                                <td><h6>
                                    @if ( $nota->id_area === 1)
                                        MEFP/VPCF/DGSGIF/N°
                                    @else
                                        @if ( $nota->id_area === 2)
                                            MEFP/VPCF/DGSGIF/UISS/N°
                                        @else
                                            @if ( $nota->id_area === 3)
                                                MEFP/VPCF/DGSGIF/USI/N°
                                            @else
                                                MEFP/VPCF/DGSGIF/UIT/N°
                                            @endif
                                        @endif
                                    @endif
                                    {{$nota->nro_cite}}/{{$nota->gestion}}
                                
                                </h6></td>
                                <td>
                                    <h6>
                                    @php
                                        $user = App\User::find($nota->id_user);

                                    @endphp
                                    {{ $user->name }}
                                    </h6>
                                </td>
                                <td><h6>{{ $nota->nombre_des }}</h6></td>
                                <td><h6>{{ $nota->cargo_des }}</h6></td>
                                <td><h6>{{ $nota->institucion_des }}</h6></td>
                                <td><h6>{{ $nota->referencia }}</h6></td>
                                <td><h6>{{ date('d/m/Y', strtotime($nota->fecha_recepcion)) }}</h6></td>

                                <td>
                                    <h6>
                                        <button class="jsgrid-button jsgrid-edit-button" type="button" title="Edit"></button>
                                        <a href="{{route('modifica_nota',$nota)}}">Editar nota</a>
                                    </h6>
                                    <a href="" class="btn btn-info">Ver</a>

                                </td>
                                
                            </tr>       
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>



@stop

@section('scripts')
    <script>
    $(document).ready( function () {
        $('#dtnotas').DataTable();
    } );

    </script>
@endsection