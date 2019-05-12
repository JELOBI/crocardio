@extends('layout.master')
@section('parentPageTitle', 'Pacijenti')
@section('title', 'Novi pacijent')

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
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home_only_icon_title"> <i class="zmdi zmdi-account"></i> OSNOVNE INFORMACIJE </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile_only_icon_title"><i class="zmdi zmdi-accounts-list"></i> UPITNIK </a></li>
                      {{--      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_only_icon_title"><i class="zmdi zmdi-email"></i> IZVRŠENI PREGLEDI </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_only_icon_title"><i class="zmdi zmdi-settings"></i> ANALIZE I PREPORUKE </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preporuke"><i class="zmdi zmdi-settings"></i> MyFitnessPal & Technogym </a></li>--}}
                        </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane in active" id="home_only_icon_title"> <h5 class="title">Osnovne informacije</h5>
                            <div class="row clearfix">
                                <div class="col-lg-6">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Ime">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Prezime">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Ime oca">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Djevojačko prezime (za žene)">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-calendar"></i>
                                                </span>
                                                <input type="text" class="form-control datetimepicker" placeholder="Datum rođenja">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Godina">
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <hr>
                                        <div class="col-sm-6">
                                            <select class="form-control show-tick">
                                                <option value="">- Spol -</option>
                                                <option value="10">Muški</option>
                                                <option value="20">Ženski</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Visina">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Težina">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Obim struka">
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <hr>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Telefon">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Mobitel">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12"></div>
                                        <hr>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Adresa">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Grad">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row clearfix">
                                        <div class="col-lg-6">
                                            <p class="title">BMR KALKULATOR</p>

                                            <div class="body">
                                                <p>BMR: 21,5</p>
                                                <div class="progress m-b-5">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="title">BMI KALKULATOR</p>
                                            <div class="body">
                                                <p>BMI: 21,5</p>
                                                <div class="progress m-b-5">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">80% Complete</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="title">KALORIJE KALKULATOR</p>
                                            <div class="body">
                                                <p>Održavanje težine: 2.150 kalorija/dnevno</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile_only_icon_title">


                                    <h5 class="title">Upitnik</h5>
                            <div class="row clearfix">
                                <div class="col-lg-6">
                                    <div class="row clearfix">




                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <input id="checkbox10" type="checkbox">
                                                <label for="checkbox10">
                                                    Da li imate stabilnu hroničnu srčanu bolest
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <input id="checkbox12" type="checkbox">
                                                <label for="checkbox12">
                                                   Da li imate "cardiomyopathy" stabilnu fazu hroničnih srčanih problema
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <input id="checkbox13" type="checkbox">
                                                <label for="checkbox13">
                                                    Da li imate "cardiomyopathy" stabilnu fazu hroničnih srčanih problema
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="checkbox">
                                                <input id="checkbox14" type="checkbox">
                                                <label for="checkbox14">
                                                    Da li je vaš "ejaction fraction" izna 30%
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <label>Vježbanje</label>
                                            <select class="form-control show-tick">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Ne, nikada.</option>
                                                <option value="20">Jednom mjesečno, do 30 minuta</option>
                                                <option value="20">Jednom sedmično, do 30 minuta</option>
                                                <option value="20">Jednom dnevno, do 30 minuta</option>
                                            </select>
                                        </div>


                                        <div class="col-sm-6">
                                            <label>Pušenje</label>
                                            <select class="form-control show-tick">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Ne, nikada nisam ni bio</option>
                                                <option value="20">Ex-pušač</option>
                                                <option value="20">Aktivni, manje od 20 cigareta dnevno</option>
                                                <option value="20">Aktivni, više od 20 cigareta dnevno</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>Krvni pritisak</label>
                                            <select class="form-control show-tick">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Nizak</option>
                                                <option value="20">Visok</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Alkohol</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Manje od čaše dnevno</option>
                                                <option value="20">Više od čaše dnevno</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Gdje živite</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">U gradu</option>
                                                <option value="20">U industrijskoj zoni</option>
                                                <option value="20">Na selu</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Koliko sati spavate dnevno</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Do 4 sata</option>
                                                <option value="20">Do 6 sati</option>
                                                <option value="20">Više od 8 sati</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Problemi sa spavanjem</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Hrkanje</option>
                                                <option value="20">Insomnia</option>
                                                <option value="20">Nočne more</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Dijabetes</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Da, imam dijabetes</option>
                                                <option value="20">Ne, nemam dijabetes</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Ishrana</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Redovna, pravilna</option>
                                                <option value="20">Neredovna, nepravilna</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Šečer u ishrani</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Malo ili nimalo</option>
                                                <option value="20">Previše</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Voće u ishrani</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Malo ili nimalo</option>
                                                <option value="20">Previše</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Crveno meso u ishrani</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Malo ili nimalo</option>
                                                <option value="20">Previše</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Pijete li dovoljno vode</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Malo ili nimalo</option>
                                                <option value="20">Previše</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="alcohol">Pijete li kafu</label>
                                            <select class="form-control show-tick" id="alcohol">
                                                <option value="">- Odaberite -</option>
                                                <option value="10">Malo ili nimalo</option>
                                                <option value="20">Previše</option>
                                            </select>
                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel. </p>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Unesite svoja zapažanja</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>













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