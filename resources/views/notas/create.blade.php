@extends('app')


@section('content')

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
        <input type="text" name="id_area" value="{{old('id_area')}}">
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

<!--div class="page-wrapper"-->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Formulario de Registro de Notas DGSGIF</h4>
                        <h6 class="card-subtitle">Debe llenar todos los campos del Formulario<!--a href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a--></h6>
                        <form class="mt-5" novalidate>
                            <div class="form-group">
                                <h5>Tipo Documento <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="select" id="select" required class="form-control col-md-7">
                                        <option value="">Selecciona el tipo de documento</option>
                                        <option value="1">Nota Externa</option>
                                        <option value="2">Nota Interna</option>
                                        <option value="3">Informe</option>
                                        <option value="4">Memorandum</option>
                                        <option value="5">Comunicado</option>
                                        <option value="6">Instructivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Área <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="select" id="select" required class="form-control col-sm-7">
                                        <option value="">Selecciona el área</option>
                                        <option value="1">DGSGIF - Dirección General de Sistemas de Gestión de Información Fiscal</option>
                                        <option value="2">UISS - Unidad de Implantación y Soporte de Sistemas</option>
                                        <option value="3">USI - Unidad de Sistemas de Información</option>
                                        <option value="4">UIT - Unidad de Infraestructura Tecnológica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Hoja de Ruta <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control col-sm-1" required data-validation-required-message="This field is required">
                                    <input type="text" name="text" class="form-control col-sm-1" required data-validation-required-message="This field is required">
                                    <input type="text" name="text" class="form-control col-sm-1" required data-validation-required-message="This field is required">
                                </div>
                                <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                            </div>
                            <div class="form-group">
                                <h5>Fecha CITE <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="maxChar" class="form-control col-md-4" required data-validation-required-message="This field is required" maxlength="10">
                                </div>
                                <div class="form-control-feedback"><small>Add <code>maxlength='10'</code> attribute for maximum number of characters to accept. </small></div>
                            </div>

                            <div class="form-group">
                                <h5>Autor <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6">
                                </div>
                                <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div>
                            </div>

                            <div class="form-group">
                                <h5>Email Field <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                            </div>
                            <div class="form-group">
                                <h5>Password Input Field <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                            </div>
                            <div class="form-group">
                                <h5>Repeat Password Input Field <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                            </div>
                            <div class="form-group">
                                <h5>File Input Field <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="file" class="form-control" required> </div>
                            </div>
                            <div class="form-group">
                                <h5>Input with Icon <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required">
                                        <div class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <h5>Minimum Character Length <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="minChar" class="form-control" required data-validation-required-message="This field is required" minlength="6">
                                </div>
                                <div class="form-control-feedback"><small>Add <code>minlength="6"</code> attribute for minimum number of characters to accept.</small></div>
                            </div>
                            <div class="form-group">
                                <h5>Only Numbers <span class="text-danger">*</span></h5>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" name="onlyNum" class="form-control" required data-validation-required-message="This field is required">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Maximum Number <span class="text-danger">*</span></h5>
                                <input type="text" name="maxNum" class="form-control" required data-validation-required-message="This field is required" max="25">
                                <div class="form-control-feedback"> <small><i>Must be lower than 25</i></small> - <small>Add <code>max</code> attribute for maximum number to accept. Also use <code>data-validation-max-message</code> attribute for max failure message</small> </div>
                            </div>
                            <div class="form-group">
                                <h5>Minimum Number <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="minNum" class="form-control" required data-validation-required-message="This field is required" min="10">
                                </div>
                                <div class="form-control-feedback"><small><i>Must be higher than 10</i></small> - <small>Add <code>min</code> attribute for minimum number to accept. Also use <code>data-validation-min-message</code> attribute for min failure message</small></div>
                            </div>
                            <div class="form-group">
                                <h5>Text Input Range <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required" minlength="10" maxlength="20" placeholder="Enter number between 10 &amp; 20"> </div>
                            </div>
                            <div class="form-group">
                                <h5>Input with Button <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-info" type="button">Go!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>No Characters, Only Numbers <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="noChar" class="form-control" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="No Characters Allowed, Only Numbers"> </div>
                            </div>
                            <div class="form-group">
                                <h5>Pattern <span class="text-danger">*</span> <small><i>Must start with 'a' and end with 'z'</i></small></h5>
                                <div class="controls">
                                    <input type="text" name="pattern" pattern="a.*z" data-validation-pattern-message="Must start with 'a' and end with 'z'" class="form-control" required>
                                    <div class="form-control-feedback"><small>Add <code>pattern</code> attribute to set input pattern. Also use <code>data-validation-pattern-message</code> attribute for pattern failure message</small></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Enter URL <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*" data-validation-regex-message="Only Valid URL's">
                                    <div class="form-control-feedback"><small>Add <code>data-validation-regex-regex</code> attribute for regular expression. Also use <code>data-validation-regex-message</code> attribute for regex failure message</small></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Enter Email Address <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                            </div>
                            <div class="form-group">
                                <h5>Enter Date <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="MM/DD/YYYY" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                            </div>
                            
                            <div class="form-group">
                                <h5>Textarea <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <textarea name="textarea" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Checkbox <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" required value="single" name="styled_single_checkbox" class="custom-control-input"><span class="custom-control-label">Check this custom checkbox</span> </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Checkbox Group <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="x" name="styled_checkbox" required class="custom-control-input"><span class="custom-control-label">I am unchecked Checkbox</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="y" name="styled_checkbox" class="custom-control-input"><span class="custom-control-label">I am unchecked too</span> </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Select Max 2 Checkbox<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="styled_max_checkbox" data-validation-maxchecked-maxchecked="2" data-validation-maxchecked-message="Don't be greedy!" required class="custom-control-input"><span class="custom-control-label">I am unchecked Checkbox</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="styled_max_checkbox" class="custom-control-input"><span class="custom-control-label">I am unchecked too</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="styled_max_checkbox" class="custom-control-input"><span class="custom-control-label">You can check me</span> </label>
                                            </fieldset>
                                        </div> <small>Select any 2 options</small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Minimum 2 Checkbox selection<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="1" data-validation-minchecked-minchecked="2" data-validation-minchecked-message="Choose at least two" name="styled_min_checkbox" required class="custom-control-input"><span class="custom-control-label">I am unchecked Checkbox</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="2" name="styled_min_checkbox" class="custom-control-input"><span class="custom-control-label">I am unchecked too</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" value="3" name="styled_min_checkbox" class="custom-control-input"><span class="custom-control-label">You can check me</span> </label>
                                            </fieldset>
                                        </div> <small>Select any 2 options</small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Radio Buttons <span class="text-danger">*</span></h5>
                                        <fieldset class="controls">
                                            <label class="custom-control custom-radio">
                                                <input type="radio" value="1" name="styled_radio" required id="styled_radio1" class="custom-control-input"><span class="custom-control-label">Check Me</span> </label>
                                        </fieldset>
                                        <fieldset>
                                            <label class="custom-control custom-radio">
                                                <input type="radio" value="2" name="styled_radio" id="styled_radio2" class="custom-control-input"><span class="custom-control-label">Or Me</span> </label>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5>Inline Radio Buttons <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <fieldset>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" value="Yes" name="styled_inline_radio" required id="styled_radio_inline1" class="custom-control-input"><span class="custom-control-label">Check Me</span> </label>
                                            </fieldset>
                                            <fieldset>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" value="No" name="styled_inline_radio" id="styled_radio_inline2" class="custom-control-input"><span class="custom-control-label">Or Me</span> </label>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--/div-->
    
@stop