@extends('main-doctor.layout.master')
@section('title', 'Glavna ploča')
@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/morrisjs/morris.min.css')}}" />
@stop
@section('content')
    <div class="row clearfix">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="body">
                    <h3 class="number count-to m-b-0" data-from="0" data-to="125" data-speed="500" data-fresh-interval="250">125<i class="zmdi zmdi-trending-up float-right"></i></h3>
                    <p class="text-muted">Pacijenata</p>
                    {{--                <div class="progress">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 15%</small>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="body">
                    <h3 class="number count-to m-b-0" data-from="0" data-to="18" data-speed="10" data-fresh-interval="10">18<i class="zmdi zmdi-trending-up float-right"></i></h3>
                    <p class="text-muted">analiza</p>
                    {{--                <div class="progress">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 23%</small>--}}
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="body">
                    <h3 class="number count-to m-b-0" data-from="0" data-to="284" data-speed="2500" data-fresh-interval="1000">224 <i class="zmdi zmdi-trending-up float-right"></i></h3>
                    <p class="text-muted">Zabilježenih pregleda <i class="zmdi zmdi-mood"></i></p>
                    {{--                <div class="progress">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    <small>Change 50%</small>--}}
                </div>
            </div>
        </div>
    </div>

    {{--<div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Dr.</strong> Timeline</h2>
                    <ul class="header-dropdown">
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="new_timeline">
                        <div class="header">
                            <div class="color-overlay">
                                <div class="day-number">8</div>
                                <div class="date-right">
                                <div class="day-name">Monday</div>
                                <div class="month">February 2018</div>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="bullet pink"></div>
                                <div class="time">5pm</div>
                                <div class="desc">
                                    <h3>New Icon</h3>
                                    <h4>Mobile App</h4>
                                </div>
                            </li>
                            <li>
                                <div class="bullet green"></div>
                                <div class="time">3 - 4pm</div>
                                <div class="desc">
                                    <h3>Design Stand Up</h3>
                                    <h4>Hangouts</h4>
                                    <ul class="list-unstyled team-info margin-0 p-t-5">
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="bullet orange"></div>
                                <div class="time">12pm</div>
                                <div class="desc">
                                    <h3>Lunch Break</h3>
                                </div>
                            </li>
                            <li>
                                <div class="bullet green"></div>
                                <div class="time">9 - 11am</div>
                                <div class="desc">
                                    <h3>Finish Home Screen</h3>
                                    <h4>Web App</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon xl-slategray"><i class="zmdi zmdi-account"></i> </div>
                            <div class="content">
                                <div class="text">New Patient</div>
                                <h5 class="number">27</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon xl-slategray"><i class="zmdi zmdi-account"></i> </div>
                            <div class="content">
                                <div class="text">OPD Patient</div>
                                <h5 class="number">19</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card top_counter">
                        <div class="body">
                            <div class="icon xl-slategray"><i class="zmdi zmdi-bug"></i> </div>
                            <div class="content">
                                <div class="text">Operations</div>
                                <h5 class="number">08</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card visitors-map">
                <div class="header">
                    <h2><strong>Our</strong> Location <small>Contrary to popular belief, Lorem Ipsum is not simply random text</small></h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div id="world-map-markers" style="height:280px;"></div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="body">
                                <ul class="row location_list list-unstyled">
                                    <li class="col-lg-4 col-md-4 col-6">
                                        <div class="body xl-turquoise">
                                            <i class="zmdi zmdi-pin"></i>
                                            <h4 class="number count-to" data-from="0" data-to="453" data-speed="2500" data-fresh-interval="700">453</h4>
                                            <span>America</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-6">
                                        <div class="body xl-khaki">
                                            <i class="zmdi zmdi-pin"></i>
                                            <h4 class="number count-to" data-from="0" data-to="124" data-speed="2500" data-fresh-interval="700">124</h4>
                                            <span>Australia</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-6">
                                        <div class="body xl-parpl">
                                            <i class="zmdi zmdi-pin"></i>
                                            <h4 class="number count-to" data-from="0" data-to="215" data-speed="2500" data-fresh-interval="700">215</h4>
                                            <span>Canada</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-6">
                                        <div class="body xl-salmon">
                                            <i class="zmdi zmdi-pin"></i>
                                            <h4 class="number count-to" data-from="0" data-to="155" data-speed="2500" data-fresh-interval="700">155</h4>
                                            <span>India</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-6">
                                        <div class="body xl-blue">
                                            <i class="zmdi zmdi-pin"></i>
                                            <h4 class="number count-to" data-from="0" data-to="78" data-speed="2500" data-fresh-interval="700">78</h4>
                                            <span>UK</span>
                                        </div>
                                    </li>
                                    <li class="col-lg-4 col-md-4 col-6">
                                        <div class="body xl-slategray">
                                            <i class="zmdi zmdi-pin"></i>
                                            <h4 class="number count-to" data-from="0" data-to="55" data-speed="2500" data-fresh-interval="700">55</h4>
                                            <span>Other</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Heart</strong> Surgeries <small>18% High then last month</small></h2>
                </div>
                <div class="body">
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(96, 125, 139)" data-spot-Color="rgb(96, 125, 139, 0.7)"
                        data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="rgb(96, 125, 139, 0.7)"
                        data-fill-Color="rgba(96, 125, 139, 0.3)"> 6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Medical</strong> Treatment <small>18% High then last month</small></h2>
                </div>
                <div class="body">
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#222"
                        data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(120, 184, 62, 0.7)"
                        data-offset="90" data-width="100%" data-height="50px" data-line-Width="1" data-line-Color="rgb(120, 184, 62, 0.7)"
                        data-fill-Color="rgba(120, 184, 62, 0.3)"> 6,4,7,6,9,3,3,5,7,4,2,3,7,6 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2><strong>New</strong> Patient <small >18% High then last month</small></h2>
                </div>
                <div class="body">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="50px" data-bar-Width="4" data-bar-Spacing="10" data-bar-Color="#00ced1">2,8,5,3,1,7,9,5,6,4,2,3,1</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card tasks_report">
                <div class="header">
                    <h2><strong>Total</strong> Revenue</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">2017 Year</a></li>
                                <li><a href="javascript:void(0);">2016 Year</a></li>
                                <li><a href="javascript:void(0);">2015 Year</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body text-center">
                    <h4 class="margin-0">Total Sale</h4>
                    <h6 class="m-b-20">2,45,124</h6>
                    <input type="text" class="knob dial1" value="66" data-width="100" data-height="100" data-thickness="0.1" data-fgColor="#212121" readonly>
                    <h6 class="m-t-20">Satisfaction Rate</h6>
                    <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                    <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#212121">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card patient_list">
                <div class="header">
                    <h2><strong>New</strong> Patient List</h2>
                    <ul class="header-dropdown">
                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right slideUp">
                                <li><a href="javascript:void(0);">2017 Year</a></li>
                                <li><a href="javascript:void(0);">2016 Year</a></li>
                                <li><a href="javascript:void(0);">2015 Year</a></li>
                            </ul>
                        </li>
                        <li class="remove">
                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped m-b-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Diseases</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="../assets/images/xs/avatar3.jpg" alt="Avatar" class="rounded-circle"></td>
                                    <td>Virginia</td>
                                    <td>123 6th St. Melbourne, FL 32904</td>
                                    <td><span class="badge badge-danger">Fever</span> </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="../assets/images/xs/avatar4.jpg" alt="Avatar" class="rounded-circle"></td>
                                    <td>Julie </td>
                                    <td>71 Pilgrim Avenue Chevy Chase, MD 20815</td>
                                    <td><span class="badge badge-info">Cancer</span> </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="../assets/images/xs/avatar5.jpg" alt="Avatar" class="rounded-circle"></td>
                                    <td>Woods</td>
                                    <td>70 Bowman St. South Windsor, CT 06074</td>
                                    <td><span class="badge badge-warning">Lakva</span> </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="../assets/images/xs/avatar1.jpg" alt="Avatar" class="rounded-circle"></td>
                                    <td>Lewis</td>
                                    <td>4 Goldfield Rd.Honolulu, HI 96815</td>
                                    <td><span class="badge badge-success">Dental</span> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@stop
@section('page-script')
    <script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script>
    <script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
    <script src="{{asset('assets/js/pages/index.js')}}"></script>
@stop