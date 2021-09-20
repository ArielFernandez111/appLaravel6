@extends('app')


@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@endsection

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
{{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  </div> --}}

<div class="container-fluid">
    {{-- <div class="row">
        <div class="col-12"> --}}
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Listado de Notas</h2>
                    <ul class="nav nav-pills mt-4 justify-content-end mb-4">
                        <li class=" nav-item"><h6 class="card-subtitle"><a href="{{ route('create_nota') }}" class="btn btn-primary ">Nueva Nota</a></h6>
                        </li>
                    </ul>
                    {{-- <br>{{ dd($notas) }} --}}
                    {{-- The last part of the route URI is <b>{{ dd(route('listado_nota_in', 1)->) }}</b> --}}
                    <br>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        @foreach ($documentos as $documento)
                            <li class="nav-item">
                                <a href="{{ route('listado_nota_in', $documento->id ) }}" class="nav-link {{ Request::segment(3) == $documento->id ? 'active' : '' }} " id="pills-{{ $documento->nombre }}-tab" role="tab" aria-controls="pills-home" aria-selected="true">{{ $documento->nombre }}</a>
                            </li>
                        @endforeach
                      </ul>
                    {{-- <div class="table-responsive m-t-40"> --}}
                        <table id="dtnotas"
                            class="display nowrap table table-hover table-striped table-bordered "
                            cellspacing="0" width="100%">
                        {{-- <table id="dtnotas" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%"> --}}
                            <thead>
                                <tr>
                                    <th><h6 class="font-weight-bold" style="width: 15%;">Documento</h6></th>
                                    <th><h6 class="font-weight-bold"style="width: 10%;">Area</h6></th>
                                    <th><h6 class="font-weight-bold"style="width: 15%;">Hoja Ruta</h6></th>
                                    {{-- <th><h6 class="font-weight-bold"style="width: 80px;">Fecha CITE</h6></th> --}}
                                    <th><h6 class="font-weight-bold" style="width: 25%;">Nro. CITE</h6></th>
                                    <th><h6 class="font-weight-bold" style="width: 10%;">Autor</h6></th>
                                    {{-- <th><h6 class="font-weight-bold"style="width: 130px;">Destinatario</h6></th> --}}
                                    {{-- <th><h6 class="font-weight-bold">Cargo</h6></th>
                                    <th><h6 class="font-weight-bold">Institucion</h6></th> --}}
                                    {{-- <th><h6 class="font-weight-bold">Referencia</h6></th> --}}
                                    <th><h6 class="font-weight-bold"style="width: 15%">Fecha Recepcion</h6></th>
                                    <th><h6 class="font-weight-bold"style="width: 5%;">Modificar</h6></th>
                                    <th><h6 class="font-weight-bold"style="width: 5%;">Ver mas</h6></th>
                                </tr>
                            </thead>
                            {{-- <tfoot>
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
                            </tfoot> --}}
                            <tbody>
                                @foreach ($notas as $nota)
                                    <tr>
                                        <td style="width: 15%;"><h6>
                                            @php
                                                $documento = App\Documento::find($nota->id_documento);

                                            @endphp
                                            {{ $documento->nombre }}
                                            </h6>
                                        </td>
                                        <td style="width: 10%;">
                                            <h6>
                                            @php
                                                $area = App\Area::find($nota->id_area);

                                            @endphp
                                            {{ $area->sigla }}
                                            </h6>
                                        </td>
                                        <td style="width: 15%;">
                                            <h6>
                                                {{-- @if ( $nota->id_documento === 1 || $nota->id_documento === 2 || $nota->id_documento === 3 || $nota->id_documento === 4)  
                                                    {{ $nota->hojaruta->codigo }}-{{ $nota->hojaruta->numero }}-{{ $nota->hojaruta->registro }}
                                                @endif --}}
                                                @if ($nota->hojaruta)
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
                                        {{-- <td style="width: 80px;"><h6>{{ date('d/m/Y', strtotime($nota->fecha_cite)) }}</h6></td> --}}
                                        <td style="width: 25%;"><h6>
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
                                        <td style="width: 10%;">
                                            <h6>
                                            {{-- @php
                                                $user = App\User::find($nota->id_user);

                                            @endphp
                                            {{ $user->username }} --}}
                                            {{ $nota->usu_cre }}
                                            </h6>
                                        </td>
                                        {{-- <td style="width: 130px;"><h6>{{ $nota->nombre_des }}</h6></td> --}}
                                        {{-- <td><h6>{{ $nota->cargo_des }}</h6></td>
                                        <td><h6>{{ $nota->institucion_des }}</h6></td> --}}
                                        <td style="width: 15%;"><h6>{{ $nota->fecha_recepcion }}</h6></td>
                                        {{-- <td><h6>{{ date('d/m/Y', strtotime($nota->fecha_recepcion)) }}</h6></td> --}}

                                        {{-- <td>
                                            <h6>
                                                <a href="{{route('modifica_nota',$nota)}}" class="btn btn-info">Editar</a>
                                                <a href="{{route('show_nota',$nota)}}" class="btn btn-info">Ver</a>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                  </svg>
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                                  </svg>
                                            </h6>
                                        </td> --}}

                                        <td style="width: 5%;">
                                            <h6>
                                                <a href="{{route('modifica_nota',$nota)}}" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                  </svg></a>
                                            </h6>
                                        </td  style="width: 5%;">
                                        
                                        <td>
                                            <h6>
                                                <a href="{{route('show_nota',$nota)}}" class="link-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                                  </svg></a>
                                                
                                                  
                                            </h6>
                                        </td>
                                    </tr>       
                                @endforeach
                                                    
                            </tbody>
                        </table>
                    {{-- </div> --}}
                </div>
            </div>
        {{-- </div>
    </div> --}}

    {{-- <div class="row">
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
    </div> --}}

    {{-- <div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="active">
                <a href="#tab-table1" data-toggle="tab">Table 1</a>
            </li>
            <li>
                <a href="#tab-table2" data-toggle="tab">Table 2</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-table1">
                <table id="myTable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="tab-pane" id="tab-table2">
                <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Extn.</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div> --}}

</div>



@stop

@section('scripts')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script>
    // $(document).ready( function () {
        $('#dtnotas').DataTable({
            // "ajax": "{{ route('datatable_nota') }}",
            // "columns": [
            //     {data: 'id'},
            //     {data: 'fecha_cite'},
            //     {data: 'nro_cite'},
            // ]
            responsive: true,
            //autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontró ningún registro",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No se encontraron registros",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
        });
    // } );
    // $(document).ready(function() {
    //     $('a[data-toggle="tab"]').on( 'shown.bs.tab', function (e) {
    //         $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
    //     } );
        
    //     $('table.table').DataTable( {
    //         ajax:           '../ajax/data/arrays.txt',
    //         scrollY:        200,
    //         scrollCollapse: true,
    //         paging:         false
    //     } );
    
    //     // Apply a search to the second table for the demo
    //     $('#myTable2').DataTable().search( 'New York' ).draw();
    // } );


    </script>
@endsection