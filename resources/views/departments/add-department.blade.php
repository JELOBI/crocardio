@extends('layout.master')
@section('parentPageTitle', 'Ustanove')
@section('title', 'Nova ustanova')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dropzone.css')}}">
@stop

@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Nova</strong> ustanova<small>unesite novu ustanovu...</small> </h2>
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
                                <input type="text" class="form-control" placeholder="Ime ustanove">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Lokacija ustanove">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telefon">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Fax">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Web site">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Direktor ustanove">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Odgovorna osoba">
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
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Confirm Password">
                                            </div>
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
                                    <h2><strong>Vizuelni</strong> profil <small>fotografije ustanove...</small> </h2>
                                    <ul class="header-dropdown">
                                        <li class="remove">
                                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                            <form action="/" id="frmFileUpload" class="dropzone m-b-20" method="post" enctype="multipart/form-data">
                                                <div class="dz-message">
                                                    <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                                    <h3>Unesite fotografije ustanove.</h3>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea rows="4" class="form-control no-resize" placeholder="Kratki opis ustanove..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="row clearfix">                            
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
    <script src="{{asset('assets/plugins/dropzone/dropzone.js')}}"></script>
    <script src="{{asset('assets/plugins/momentjs/moment.js')}}"></script>
@stop