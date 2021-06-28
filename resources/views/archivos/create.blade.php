@extends('app')


@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulario de Registro de Notas DGSGIF</h4>
                    <h6 class="card-subtitle">Debe llenar todos los campos del Formulario<!--a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a--></h6>
                    <br><br>
                    <form action="{{route('archivos.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        
                        <div class="form-group">
                            <h5>Titulo Documento <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" name="titulo" class="form-control" required data-validation-required-message="This field is required" value="{{old('titulo')}}">
                            </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                        </div>

                        @error('titulo')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <div class="form-group">
                            <h5>Adjuntar Documento <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="url" value="{{old('url')}}">
                            </div>
                            {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                        </div>

                        @error('file')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">Registrar Documento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@stop