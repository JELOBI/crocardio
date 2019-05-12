@extends('layout.master')
@section('parentPageTitle', 'Pacijenti')
@section('title', 'Profil pacijenta')

@section('content')

    <div class="row clearfix profile-page">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card member-card">
                <div class="header l-coral">
                    <h4 class="m-t-10">Pacijent Zadro</h4>
                </div>
                <div class="member-img">
                    <a href="{{route('patients.invoice')}}"><img src="../assets/images/sm/avatar2.jpg" class="rounded-circle" alt="profile-image"></a>
                </div>
                <div class="body">
                    <div class="col-12">
                        <ul class="social-links list-unstyled">
                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            <li><a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                        </ul>                            
                    </div>
                    <hr>
                    <strong>Email</strong>
                    <p>zadro.jeremija@info.com</p>
                    <strong>Telefon</strong>
                    <p>+385 456 789</p>
                    <hr>
                    <strong>Adresa</strong>
                    <address>Zagreb, Zagrebačka ulica 33</address>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Generalni</strong> izvještaj</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled">
                        <li>
                            <div>Krvni pritisak</div>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </li>
                        <li>
                            <div>Otkucaji srca</div>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                            </div>
                        </li>
                        <li>
                            <div>Hemoglobin</div>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                            </div>
                        </li>
                        <li>
                            <div>Šećer u krvi</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card">
                <div class="body">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                </div>
            </div>        
            <div class="card" id="timeline">
                <div class="body">
                    <div class="timeline-body">
                        <div class="timeline m-border">
                            <div class="timeline-item">
                                <div class="item-content">
                                    <div class="text-small">10. maj 2019.</div>
                                    <p><a href="javascript:void()">Standarni pregled</a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-info">
                                <div class="item-content">
                                    <div class="text-small">10. apr 2019.</div>
                                    <p><a href="javascript:void()">Pregled srca</a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-warning border-l">
                                <div class="item-content">
                                    <div class="text-small">10. mar 2019.</div>
                                    <p><a href="javascript:void()">Operacija srca </a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-warning">
                                <div class="item-content">
                                    <div class="text-small">10. feb 2019.</div>
                                    <p><a href="javascript:void()">Pregled i priprema za operaciju</a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-danger">
                                <div class="item-content">
                                    <div class="text--muted">10. jan 2019.</div>
                                    <p><a href="javascript:void()">Naručivanje UZ štitne žljezde sa elastografijom</a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-info">
                                <div class="item-content">
                                    <div class="text-small">10. dec 2018.</div>
                                    <p><a href="javascript:void()">Pregled</a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-danger">
                                <div class="item-content">
                                    <div class="text-small">10. dec 2018.</div>
                                    <p><a href="javascript:void()">Mjerenje krvnog tlaka<</a></p>
                                </div>
                            </div>
                            <div class="timeline-item border-info">
                                <div class="item-content">
                                    <div class="text-small">10. dec 2018.</div>
                                    <p><a href="javascript:void()">Lorem ipsum tekst</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages_only_icon_title"><i class="zmdi zmdi-email"></i> IZVRŠENI PREGLEDI </a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings_only_icon_title"><i class="zmdi zmdi-settings"></i> ANALIZE I PREPORUKE </a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preporuke"><i class="zmdi zmdi-settings"></i> MyFitnessPal & Technogym </a></li>
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
                        <div role="tabpanel" class="tab-pane" id="messages_only_icon_title">
                            <table class="table m-b-0 table-hover">
                                <thead>
                                <tr>
                                    <th>Datum pregleda</th>
                                    <th>Doktor</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>11 Jan 2018</td>
                                    <td>Dr. Lorem Ipsum</td>
                                    <td>Redovan pregled</td>
                                </tr>
                                <tr>
                                    <td>11 Jan 2018</td>
                                    <td>Dr. Lorem Ipsum</td>
                                    <td>Redovan pregled</td>
                                </tr>
                                <tr>
                                    <td>11 Jan 2018</td>
                                    <td>Dr. Lorem Ipsum</td>
                                    <td>Redovan pregled</td>
                                </tr>
                                <tr>
                                    <td>11 Jan 2018</td>
                                    <td>Dr. Lorem Ipsum</td>
                                    <td>Redovan pregled</td>
                                </tr>
                                <tr>
                                    <td>11 Jan 2018</td>
                                    <td>Dr. Lorem Ipsum</td>
                                    <td>Redovan pregled</td>
                                </tr>
                                <tr>
                                    <td>11 Jan 2018</td>
                                    <td>Dr. Lorem Ipsum</td>
                                    <td>Redovan pregled</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings_only_icon_title">
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
                            <p> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel.
                            </p>
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