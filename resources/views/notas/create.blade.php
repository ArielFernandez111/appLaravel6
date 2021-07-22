@extends('app')


@section('content')

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulario de Registro de Notas DGSGIF</h4>
                    <h6 class="card-subtitle">Debe llenar todos los campos del Formulario<!--a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a--></h6>
                    <form action="{{route('notas.store')}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        
                        <label>
                            Tipo Documento:
                            <br>
                            <input type="text" name="id_documento" value="{{old('id_documento')}}">
                        </label>

                        @error('id_documento')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Area:
                            <br>
                            <!--input type="text" name="id_area" value="{{old('id_area')}}"-->
                            <select name="id_area" id="id_area" required class="form-control col-sm-7">
                                <option value="">Selecciona el área</option>
                                
                                @foreach ($areas as $area)
                                    <option value="{{$area->id}}">{{$area->nombre}}</option>
                                @endforeach
                            </select>

                        </label>

                        @error('id_area')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Hoja de Ruta:
                            <br>
                            <input type="text" name="cod_hr" value="{{old('cod_hr')}}">-
                            <input type="text" name="nro_hr" value="{{old('nro_hr')}}">-
                            <input type="text" name="reg_hr" value="{{old('reg_hr')}}">
                        </label>

                        @error('cod_hr')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
                        @error('nro_hr')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror
                        @error('reg_hr')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Fecha CITE:
                            <br>
                            <input type="text" name="fecha_cite" value="{{old('fecha_cite')}}">
                        </label>

                        @error('fecha_cite')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Nro CITE:
                            <br>
                            <input type="text" name="nro_cite" value="{{old('nro_cite')}}">
                        </label>

                        @error('nro_cite')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Gestion:
                            <br>
                            <input type="text" name="gestion" value="{{old('gestion')}}">
                        </label>

                        @error('gestion')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Autor:
                            <br>
                            <input type="text" name="autor" value="{{old('autor')}}">
                        </label>

                        @error('autor')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Nombre Destinatario:
                            <br>
                            <input type="text" name="nombre_des" value="{{old('nombre_des')}}">
                        </label>

                        @error('nombre_des')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Cargo Destinatario:
                            <br>
                            <input type="text" name="cargo_des" value="{{old('cargo_des')}}">
                        </label>

                        @error('cargo_des')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Institucion Destinatario:
                            <br>
                            <input type="text" name="inst_des" value="{{old('inst_des')}}">
                        </label>

                        @error('inst_des')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Referencia:
                            <br>
                            <input type="text" name="referencia" value="{{old('referencia')}}">
                        </label>

                        @error('referencia')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <br>
                        <label>
                            Fecha Recepcion:
                            <br>
                            <input type="text" name="fecha_rec" value="{{old('fecha_rec')}}">
                        </label>

                        @error('fecha_rec')
                            <br>
                                <small>*{{$message}}</small>
                            <br>
                        @enderror

                        <!--br>
                        <label>
                            Adjuntar archivo:
                            <br>
                            <input type="file" name="adjdoc">
                        </label-->
                        <br>
                        <br>
                        <button type="submit">Registrar Nota</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulario de Registro de Notas DGSGIF</h4>
                        <h6 class="card-subtitle">Debe llenar todos los campos del Formulario<!--a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a--></h6>
                        <form class="mt-5" action="{{route('notas.store')}}" method="POST" enctype="">

                            @csrf

                            <div class="form-group">
                                <h5>Tipo Documento <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="id_documento" id="id_documento" required class="form-control col-sm-7">
                                        <option value="">Selecciona el tipo de documento</option>
                                        @foreach ($documentos as $documento)
                                            <option value="{{ $documento->id }}">{{ $documento->nombre }}</option>
                                        @endforeach
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
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="form-group">
                                <h5>Asignar hoja de ruta manualmente </h5>
                                <div class="col-sm-4">
                                    <div class="btn-group btn-group-toggle unit-toggler pull-right" data-toggle="buttons">
                                        <label class="btn btn-select cm-unit active">  
                                          <input type="radio" name="hojaruta" id="hojaruta1" autocomplete="off" /> Si  
                                        </label>
                                      
                                        <label class="btn btn-select">
                                          <input type="radio" name="hojaruta" id="hojaruta2" autocomplete="off" checked/> No
                                        </label>
                                      </div>
                                </div>
                            </div>

                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    
                                    <span class="unit done">
                                        <em></em>
                                        <em style="display: none;">

                                            <div class="row pt-3">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                                        <input type="text" name="codigo" class="form-control"  data-validation-required-message="This field is required">
                                                        <small class="form-control-feedback"> </small> </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label"></label>
                                                        <input type="text" name="numero" class="form-control"  data-validation-required-message="This field is required">
                                                        <small class="form-control-feedback"> </small> </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="control-label"></label>
                                                        <input type="text" name="registro" class="form-control"  data-validation-required-message="This field is required">
                                                        <small class="form-control-feedback"> </small> </div>
                                                </div>
                                            </div>
                                        </em>
                                      </span>
                                </div>
                            </div> --}}



                            {{-- <div class="form-group">
                                <h5>Asignar hoja de ruta manualmente </h5>
                                <div class="col-sm-4">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        <label class="custom-control-label" for="customRadio1">Si</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" checked>
                                        <label class="custom-control-label" for="customRadio2">No</label>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-heading">
                                            <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                        </div>
                                        <div class="panel-body">
                                            <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
{{-- 

<input type="radio" name="group1" value="1" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
<input type="radio" name="group1" value="2" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
<input type="radio" name="group1" value="3" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                1. What is HTML?
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <p>HTML stands for HyperText Markup Language. HTML is the main markup language for describing the structure of Web pages. <a href="http://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                2. What is Bootstrap?
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                <p>Bootstrap is a powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="http://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                3. What is CSS?
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="http://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
            </div>
        </div>
    </div>
</div> --}}

                            {{-- <div class="form-group">
                                <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="cod_hr" class="form-control col-sm-1" required data-validation-required-message="This field is required">
                                    <input type="text" name="nro_hr" class="form-control col-sm-1" required data-validation-required-message="This field is required">
                                    <input type="text" name="reg_hr" class="form-control col-sm-1" required data-validation-required-message="This field is required">
                                </div>
                            </div> --}}

                            {{-- <div class="row pt-3">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                        <input type="text" name="cod_hr" class="form-control" required data-validation-required-message="This field is required">
                                        <small class="form-control-feedback"> </small> </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <input type="text" name="nro_hr" class="form-control" required data-validation-required-message="This field is required">
                                        <small class="form-control-feedback"> </small> </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <input type="text" name="reg_hr" class="form-control" required data-validation-required-message="This field is required">
                                        <small class="form-control-feedback"> </small> </div>
                                </div>
                            </div> --}}

                            {{-- <div class="form-row">
                                <div class="form-group col-md-2">
                                  <label for="inputCity">Hoja de Ruta</label>
                                  <input type="text" name="cod_hr" required data-validation-required-message="This field is required">
                                </div>
                                <div class="form-group col-md-2">
                                  <label for="inputState">State</label>
                                  <input type="text" name="nro_hr" required data-validation-required-message="This field is required">
                                </div>
                                <div class="form-group col-md-2">
                                  <label for="inputZip">Zip</label>
                                  <input type="text" name="reg_hr" required data-validation-required-message="This field is required">
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                    Check me out
                                  </label>
                                </div>
                              </div> --}}


                            <div class="form-group">
                                <h5>Fecha CITE <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="fecha_cite" class="form-control col-md-4" required data-validation-required-message="This field is required">
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div> --}}
                            </div>

                            

                            {{-- <span class="unit done">
                                <input type="text" id="" name="" class="input1" value="" style="width:230px">
                                <em>cm</em>
                                <em style="display: none;">in</em>
                              </span>
                              
                              <div class="btn-group btn-group-toggle unit-toggler pull-right" data-toggle="buttons">
                                <label class="btn btn-select cm-unit active">  
                                  <input type="radio" name="wrist" id="wrist1" autocomplete="off" checked /> Si  
                                </label>
                              
                                <label class="btn btn-select">
                                  <input type="radio" name="wrist" id="wrist2" autocomplete="off" /> No
                                </label>
                              </div> --}}


                            {{-- <div class="form-group">
                                <h5>Autor <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="autor" class="form-control" required data-validation-required-message="This field is required" >
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <h5>Nombre Destinatario <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="nombre_des" class="form-control" required data-validation-required-message="This field is required" >
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Cargo Destinatario <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="cargo_des" class="form-control" required data-validation-required-message="This field is required" >
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Institución Destinatario <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="institucion_des" class="form-control" required data-validation-required-message="This field is required" >
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Referencia <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="referencia" class="form-control" required data-validation-required-message="This field is required" >
                                </div>
                                {{-- <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div> --}}
                            </div>
                            <div class="form-group">
                                <h5>Fecha Recepcion<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="fecha_recepcion" class="form-control col-md-4" required data-validation-required-message="This field is required">
                                </div>
                                <div class="form-control-feedback">
                                    @error('fecha_recepcion')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Fecha Entrega<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="fecha_entrega" class="form-control col-md-4" required data-validation-required-message="This field is required">
                                </div>
                                <div class="form-control-feedback">
                                    @error('fecha_entrega')
                                        <br>
                                            <small>*{{$message}}</small>
                                        <br>
                                    @enderror
                                </div>
                            </div>

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-primary">Registrar Nota</button>
                                {{-- <button type="reset" class="btn btn-inverse">Cancelar</button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@stop

@section('scripts')
    <script>
        $('.unit-toggler input').change(function() {
        $('.unit em').toggle();
        });
    </script>
@endsection
