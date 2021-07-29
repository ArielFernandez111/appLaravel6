@extends('app')


@section('content')

{{-- <div class="modal-body">
    <h5>Popover in a modal</h5>
    <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p>
    <hr>
    <h5>Tooltips in a modal</h5>
    <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
</div> --}}

<div class="container-fluid">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="modal-body">
                        <h1>Detalle de Nota</h1>
                        {{-- <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a> triggers a popover on click.</p> --}}
                        <hr>
                        <h4>Tipo Documento</h4>
                        <p>
                            @php
                                $documento = App\Documento::find($nota->id_documento);

                            @endphp
                            {{ $documento->nombre }}
                        </p>
                        <h4>Área</h4>
                        <p>
                            @php
                                $area = App\Area::find($nota->id_area);

                            @endphp
                            {{ $area->nombre }}
                        </p>
                        
                            {{-- @if ( $nota->id_documento === 1 || $nota->id_documento === 2 || $nota->id_documento === 3 || $nota->id_documento === 4)  
                                {{ $nota->hojaruta->codigo }}-{{ $nota->hojaruta->numero }}-{{ $nota->hojaruta->registro }}
                            @endif --}}
                        @if ($nota->hojaruta)
                        <h4>Hoja de Ruta</h4>
                        <p>
                            {{ $nota->hojaruta->codigo }}-{{ $nota->hojaruta->numero }}-{{ $nota->hojaruta->registro }}
                        </p>
                        @endif
                        
                        <h4>Número CITE</h4>
                        <p>
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
                        </p>
                        <h4>Autor</h4>
                        <p>
                            @php
                                $user = App\User::find($nota->id_user);

                            @endphp
                            {{ $user->name }}
                        </p>
                        <h4>Nombre Destinatario</h4>
                        <p>
                            {{ $nota->nombre_des }}
                        </p>
                        <h4>Cargo Destinatario</h4>
                        <p>
                            {{ $nota->cargo_des }}
                        </p>
                        <h4>Institución Destinatario</h4>
                        <p>
                            {{ $nota->institucion_des }}
                        </p>
                        <h4>Referencia</h4>
                        <p>
                            {{ $nota->referencia }}
                        </p>
                        <h4>Fecha Recepción</h4>
                        <p>
                            {{ date('d/m/Y', strtotime($nota->fecha_recepcion)) }}
                        </p>
                        <h4>Fecha Entrega</h4>
                        <p>
                            {{ date('d/m/Y', strtotime($nota->fecha_entrega)) }}
                        </p>
                        <h4></h4>
                        <p>
                            
                        </p>
                        <h4></h4>
                        <p>
                            
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('listado_nota')}}" class="btn btn-primary">Volver</a>
                        {{-- <button type="button" class="btn btn-primary">Volver</button> --}}
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
