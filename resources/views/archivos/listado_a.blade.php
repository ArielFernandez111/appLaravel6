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

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Listado de Documentos</h4>
        <h6 class="card-subtitle"><a href="{{route('create_a')}}">Nuevo Documento</a></h6>
        <div class="table-responsive m-t-40">
            <table id="example23"
                class="display nowrap table table-hover table-striped table-bordered"
                cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Titulo Documento</th>
                        <th>URL</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Titulo Documento</th>
                        <th>URL</th>
                        <th>Accion</th>
                    </tr>
                </tfoot>

                <tbody>
                        <tr>
                            <td>Libro 1</td>
                            <td>url</td>
                            <td>Descargar</td>
                        </tr>       
                        <tr>
                            <td>Libro 1</td>
                            <td>url</td>
                            <td>Descargar</td>
                        </tr> 
                        <tr>
                            <td>Libro 1</td>
                            <td>url</td>
                            <td>Descargar</td>
                        </tr>                
                </tbody>
                
            </table>
        </div>
    </div>
</div>

    
@stop
