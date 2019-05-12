@extends('main-doctor.layout.master')
@section('parentPageTitle', 'Patients')
@section('title', 'Add Patient')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/dropzone/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}">
@stop

@section('content')








    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">


                <div class="header">
                    <h2><strong>Informacije</strong> o pacijentu <small> neki kratki tekstic</small> </h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="javascript:void(0);">Edit</a></li>
                                <li><a href="javascript:void(0);">Delete</a></li>
                                <li><a href="javascript:void(0);">Report</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_only_icon_title"> <i class="zmdi zmdi-home"></i> OSNOVNE INFORMACIJE </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_only_icon_title"><i class="zmdi zmdi-account"></i> UPITNIK </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_only_icon_title"><i class="zmdi zmdi-email"></i> IZVRŠENI PREGLEDI </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_only_icon_title"><i class="zmdi zmdi-settings"></i> ANALIZE </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preporuke"><i class="zmdi zmdi-settings"></i> PREPORUKE </a></li>
                        </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="home_only_icon_title"> <b>Osnovne informacije</b>
                            <div class="row clearfix">
                                <div class="col-lg-6">
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
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Ime oca">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Djevojačko prezime (za žene)">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-calendar"></i>
                                                </span>
                                                <input type="text" class="form-control datetimepicker" placeholder="Datum rođenja">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Godina">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control show-tick">
                                                <option value="">- Spol -</option>
                                                <option value="10">Muški</option>
                                                <option value="20">Ženski</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h1>BMR KALKULATOR</h1>
                                    <h1>BMI KALKULATOR</h1>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile_only_icon_title"> <b>Upitnik</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages_only_icon_title"> <b>Message Content</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings_only_icon_title"> <b>Settings Content</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="preporuke"> <b>Preporuke</b>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
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
    <script src="{{asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <script>
        $(function () {
        //Datetimepicker plugin
/*        $('.datetimepicker').bootstrapMaterialDatePicker({
            format: 'DD MMMM YYYY',
            clearButton: true,
            weekStart: 1
        });*/

            $('.datetimepicker').bootstrapMaterialDatePicker({
                time: false,
                format: 'DD MMMM YYYY',
                clearButton: true
            });

    });
    </script>
@stop