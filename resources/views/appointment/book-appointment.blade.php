@extends('layout.master')
@section('parentPageTitle', 'Pregled pacijenta')
@section('title', 'Pregledi')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" />
@stop

@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Unesite</strong> pregled<small>Unesite podatke, što više...</small> </h2>
                <ul class="header-dropdown">                            
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Ime i prezime">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="OIB">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <select class="form-control show-tick">
                            <option value="">- Vrsta pregleda -</option>
                            <option>Obični pregled</option>
                            <option>Kardio pregled</option>
                            <option>Kompletan pregled</option>
                            <option>EKG srca</option>
                            <option>Mjerenje pritiska</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-calendar"></i>
                            </span>
                            <input type="text" class="form-control datetimepicker" placeholder="Datum i vrijeme pregleda...">
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Lorem Ipsum">
                        </div>
                    </div>
                    <div class="col-lg-12"></div>
                    <hr>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <label>Lorem Ipsum</label>
                        <select class="form-control show-tick">
                            <option value="">- Odaberite -</option>
                            <option value="10">Ne.</option>
                            <option value="20">Možda</option>
                            <option value="20">Da</option>
                        </select>
                    </div>
                    <div class="col-lg-12"></div>
                    <hr>
                    <div class="col-lg-3">
                        <div class="checkbox">
                            <input id="checkbox12" type="checkbox">
                            <label for="checkbox12">
                                Lorem ipsum nerro, egero cicero ero
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="checkbox">
                            <input id="checkbox13" type="checkbox">
                            <label for="checkbox13">
                                Lorem ipsum nerro, egero cicero ero
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="checkbox">
                            <input id="checkbox14" type="checkbox">
                            <label for="checkbox14">
                                Lorem ipsum nerro, egero cicero ero
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="checkbox">
                            <input id="checkbox15" type="checkbox">
                            <label for="checkbox15">
                                Lorem ipsum nerro, egero cicero ero
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12"></div>
                    <hr>

                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="tekst_neki">Lorem ipsum</label>
                            <textarea rows="4" class="form-control no-resize" id="tekst_neki" placeholder="Unesite tekst..."></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-round">Unesi</button>
                        <button type="submit" class="btn btn-default btn-round btn-simple">Otkaži</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
    <script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <script>    $.fn.selectpicker.Constructor.DEFAULTS.iconBase = 'zmdi';
    $.fn.selectpicker.Constructor.DEFAULTS.tickIcon = 'zmdi-check';</script>
    <script>
        $(function () {
        //Datetimepicker plugin
        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'dddd DD MMMM YYYY - HH:mm',
            clearButton: true,
            weekStart: 1
        });
    });
    </script>
@stop