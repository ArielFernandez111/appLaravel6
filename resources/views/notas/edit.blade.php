@extends('app')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulario de Actualización de Notas DGSGIF</h4>
                        <h6 class="card-subtitle">Debe llenar todos los campos del Formulario<!--a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a--></h6>
                        <form class="mt-5" action="{{route('notas.update', $nota)}}" method="POST">

                            @csrf

                            @method('put')

                            <div class="form-group">
                                <h5>Tipo Documento <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    {{-- <select name="id_documento" id="id_documento" required class="form-control col-sm-7">
                                        <option value="">Selecciona el tipo de documento</option>
                                        
                                        @foreach ($documentos as $documento)
                                            <option value="{{$documento->id}}">{{$documento->nombre}}</option>
                                        @endforeach
                                        
                                    </select> --}}
                                    <select name="id_documento" id="id_documento" required class="form-control col-sm-7">
                                        <option value="">Selecciona el tipo de documento</option>
                                        <option value="1">NOTA EXTERNA</option>
                                        <option value="2">NOTA INTERNA</option>
                                        <option value="3">INFORME</option>
                                        <option value="4">COMUNICADO</option>
                                        <option value="5">MEMORANDUM</option>
                                        <option value="6">INSTRUCTIVO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Área <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="id_area" id="id_area" required class="form-control col-sm-7">
                                        <option value="">Selecciona el área</option>
                                        
                                        @foreach ($areas as $area)
                                            <option value="{{$area->id}}">{{$area->nombre}}</option>
                                            {{-- <option value="{{old('id_area', $nota->id_area)}}"></option> --}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="cod_hr" class="form-control col-sm-1" required data-validation-required-message="This field is required" value="{{old('cod_hr', $nota->cod_hr)}}">
                                    <input type="text" name="nro_hr" class="form-control col-sm-1" required data-validation-required-message="This field is required" value="{{old('nro_hr', $nota->nro_hr)}}">
                                    <input type="text" name="reg_hr" class="form-control col-sm-1" required data-validation-required-message="This field is required" value="{{old('reg_hr', $nota->reg_hr)}}">
                                </div>
                            </div> --}}

                            <div class="row pt-3">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                        <input type="text" name="cod_hr" class="form-control" required data-validation-required-message="This field is required" value="{{old('cod_hr', $nota->cod_hr)}}">
                                        <small class="form-control-feedback"> </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <input type="text" name="nro_hr" class="form-control" required data-validation-required-message="This field is required" value="{{old('nro_hr', $nota->nro_hr)}}">
                                        <small class="form-control-feedback"> </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <input type="text" name="reg_hr" class="form-control" required data-validation-required-message="This field is required" value="{{old('reg_hr', $nota->reg_hr)}}">
                                        <small class="form-control-feedback"> </small> </div>
                                </div>
                                <!--/span-->
                            </div>


                            <div class="form-group">
                                <h5>Fecha CITE <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="fecha_cite" class="form-control col-md-4" required data-validation-required-message="This field is required" value="{{old('fecha_cite', $nota->fecha_cite)}}">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div> --}}
                            </div>
                            
                            {{-- <div class="form-group">
                                <h5>Nro CITE <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="nro_cite" class="form-control" required data-validation-required-message="This field is required" value="{{old('nro_cite', $nota->nro_cite)}}">
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <h5>Autor <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="autor" class="form-control" required data-validation-required-message="This field is required" value="{{old('autor', $nota->autor)}}">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>

                            <div class="form-group">
                                <h5>Nombre Destinatario <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="nombre_des" class="form-control" required data-validation-required-message="This field is required" value="{{old('nombre_des', $nota->nombre_des)}}">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Cargo Destinatario <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="cargo_des" class="form-control" required data-validation-required-message="This field is required" value="{{old('cargo_des', $nota->cargo_des)}}">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Institución Destinatario <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="inst_des" class="form-control" required data-validation-required-message="This field is required" value="{{old('inst_des', $nota->inst_des)}}">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Referencia <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="referencia" class="form-control" required data-validation-required-message="This field is required" value="{{old('referencia', $nota->referencia)}}">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Fecha Recepcion<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="fecha_rec" class="form-control col-md-4" required data-validation-required-message="This field is required" value="{{old('fecha_rec', $nota->fecha_rec)}}">
                                </div>
                                <div class="form-control-feedback">
                                    @error('fecha_rec')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-primary">Actualizar Nota</button>
                                {{-- <button type="reset" class="btn btn-inverse">Cancelar</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@stop