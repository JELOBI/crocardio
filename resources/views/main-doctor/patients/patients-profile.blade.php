@extends('main-doctor.layout.master')
@section('parentPageTitle', 'Patients')
@section('title', 'Patient Profile')

@section('content')

    <div class="row clearfix profile-page">
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card member-card">
                <div class="header l-coral">
                    <h4 class="m-t-10">Eliana Smith</h4>
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
                    <strong>Occupation</strong>
                    <p>UI UX Design</p>
                    <strong>Email ID</strong>
                    <p>will.smith@info.com</p>
                    <strong>Phone</strong>
                    <p>+123 456 789</p>
                    <hr>
                    <strong>Address</strong>
                    <address>85 Bay Drive, New Port Richey, FL 34653</address>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>General</strong> Report</h2>                                
                </div>
                <div class="body">
                    <ul class="list-unstyled">
                        <li>
                            <div>Blood Pressure</div>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                            </div>
                        </li>
                        <li>
                            <div>Heart Beat</div>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                            </div>
                        </li>
                        <li>
                            <div>Haemoglobin</div>
                            <div class="progress m-b-20">
                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                            </div>
                        </li>
                        <li>
                            <div>Sugar</div>
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
                                    <div class="text-small">Just now</div>
                                    <p>Discharge.</p>
                                </div>
                            </div>
                            <div class="timeline-item border-info">
                                <div class="item-content">
                                    <div class="text-small">11:30</div>
                                    <p>Routine Checkup</p>
                                </div>
                            </div>
                            <div class="timeline-item border-warning border-l">
                                <div class="item-content">
                                    <div class="text-small">10:30</div>
                                    <p>Operation </p>
                                </div>
                            </div>
                            <div class="timeline-item border-warning">
                                <div class="item-content">
                                    <div class="text-small">3 days ago</div>
                                    <p>Routine Checkup</p>
                                </div>
                            </div>
                            <div class="timeline-item border-danger">
                                <div class="item-content">
                                    <div class="text--muted">Thu, 10 Mar</div>
                                    <p>Routine Checkup</p>
                                </div>
                            </div>
                            <div class="timeline-item border-info">
                                <div class="item-content">
                                    <div class="text-small">Sat, 5 Mar</div>
                                    <p>Routine Checkup</p>
                                </div>
                            </div>
                            <div class="timeline-item border-danger">
                                <div class="item-content">
                                    <div class="text-small">Sun, 11 Feb</div>
                                    <p>Blood checkup test</p>
                                </div>
                            </div>
                            <div class="timeline-item border-info">
                                <div class="item-content">
                                    <div class="text-small">Thu, 17 Jan</div>
                                    <p>Admit patient ward no. 21</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop