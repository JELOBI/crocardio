@extends('layout.master')
@section('parentPageTitle', 'Lječnici')
@section('title', 'Svi lječnici')

@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}"/>
@stop

@section('content')

    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="body">
                    <ul class="nav nav-tabs padding-0">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Permanent">Opatija</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Consultant">Ustanova 2</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content m-t-10">
                <div class="tab-pane active" id="Permanent">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member1.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Admin</h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        {{--<a href="{{route('doctor.profile')}}"  class="btn btn-default btn-round btn-simple">Profil</a>--}}
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-khaki member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member2.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Amelia</h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member3.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Šešir </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-parpl member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member4.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Odjelo </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-pink member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member5.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Vrašara </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-seagreen member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member6.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Ipsum Lore </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member7.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Neque porro </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-seagreen member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member8.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Neque porro </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="tab-pane" id="Consultant">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-khaki member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member2.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Amelia</h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-blue member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member3.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Neque porro </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-pink member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member5.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Neque porro </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card xl-seagreen member-card doctor">
                                <div class="body">
                                    <div class="member-thumb">
                                        <img src="../assets/images/doctors/member6.png" class="img-fluid" alt="profile-image">                               
                                    </div>
                                    <div class="detail">
                                        <h4 class="m-b-0">Dr. Ipsum Lore </h4>
                                        <p class="text-muted">Lorem ipsum</p>
                                        <ul class="social-links list-inline m-t-20">
                                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="#" ><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                        <p class="text-muted">Lorem ipsum Neque porro quisquam</p>
                                        <a href="#"  class="btn btn-default btn-round btn-simple">Profil lječnika</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

@stop
