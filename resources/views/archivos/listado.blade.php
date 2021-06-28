@extends('app')


@section('content')

<!--div class="container">
    <div class="row">
    <div class="col-md-12">
        <p>
            ARCHIVODSSSSSS
        </p>
    </div>
    </div>
</div-->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Listado de Documentos</h4>
                    <br>
                    <h6 class="card-subtitle"><a href="{{route('create_archivo')}}" class="btn btn-primary">Nuevo Documento</a></h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23"
                            class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Titulo Documento</th>
                                    {{-- <th>URL</th> --}}
                                    <th>Descargar archivo</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Titulo Documento</th>
                                    {{-- <th>URL</th> --}}
                                    <th>Descargar archivo</th>
                                </tr>
                            </tfoot>

                            <tbody> 
                                @foreach ($archivos as $archivo)
                                    <tr>
                                        {{-- <td>{{$archivo->id}}</td> --}}
                                        <td>{{$archivo->titulo}}</td>
                                        <td><a href="{{route('descarga_archivo', $archivo->uuid)}}">{{$archivo->url}}</a> </td>
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
