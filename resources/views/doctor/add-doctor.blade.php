@extends('layout.master')
@section('parentPageTitle', 'Lječnik')
@section('title', 'Novi lječnik')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}">
@stop

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Osnovene</strong> informacije <small>lorem ipsum...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Ime">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Prezime">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control show-tick">
                                <option value="">- Ustanova -</option>
                                <option value="10">Opatija</option>
                                <option value="20">Ustanova 2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Datum rođenja">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control show-tick">
                                <option value="">- Spol -</option>
                                <option value="10">Muški</option>
                                <option value="20">Ženski</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Specijalnost">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telefon">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control show-tick">
                                <option value="">- Titula -</option>
                                <option value="10">Dr.</option>
                                <option value="20">Mr.</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control show-tick">
                                <option value="">- Subspecijalnost -</option>
                                <option value="10">Lorem ipsum</option>
                                <option value="20">Lorem ipsum</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea rows="4" class="form-control no-resize" placeholder="tekst za unos..."></textarea>
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

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Korisnički</strong> profil <small>podaci za pristup...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="User Name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Confirm Password">
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

    <div class="row clearfix">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Social</strong> Media Info <small>kako ga kontaktirati...</small> </h2>
                    <ul class="header-dropdown">
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-facebook"></i></span>
                                <input type="text" class="form-control" placeholder="Facebook">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-twitter"></i></span>
                                <input type="text" class="form-control" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-google-plus"></i></span>
                                <input type="text" class="form-control" placeholder="Google Plus">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-linkedin"></i></span>
                                <input type="text" class="form-control" placeholder="LinkedIN">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-behance"></i></span>
                                <input type="text" class="form-control" placeholder="Behance">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="zmdi zmdi-dribbble"></i></span>
                                <input type="text" class="form-control" placeholder="dribbble">
                            </div>
                        </div>
{{--                        <div class="col-sm-12">
                            <p> <b>With Search Bar</b> </p>
                            <select class="form-control z-index show-tick" data-live-search="true">
                                <option>Hot Dog, Fries and a Soda</option>
                                <option>Burger, Shake and a Smile</option>
                                <option>Sugar, Spice and all things nice</option>
                            </select>
                            <button type="submit" class="btn btn-primary btn-round">Unesi</button>
                            <button type="submit" class="btn btn-default btn-round btn-simple">Otkaži</button>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('page-script')
    <script src="{{asset('assets/plugins/dropzone/dropzone.js')}}"></script>
@stop