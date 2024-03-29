@extends('main-doctor.layout.master')
@section('parentPageTitle', 'UI')
@section('title', 'Notifications')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Notification</strong> Positions</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
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
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-raised m-b-10 btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP LEFT </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-raised m-b-10 btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP CENTER </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-raised m-b-10 btn-primary btn-block waves-effect" data-placement-from="top" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> TOP RIGHT </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-raised m-b-10 btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM LEFT </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-raised m-b-10 btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM CENTER </button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <button type="button" class="btn btn-raised m-b-10 btn-primary btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BOTTOM RIGHT </button>
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
                <h2><strong>Notification</strong> Types </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
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
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 btn-danger btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-danger"> DANGER </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-success"> SUCCESS </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 btn-warning btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-warning"> WARNING </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 btn-info btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="alert-info"> INFO </button>
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
                <h2><strong>With Material</strong> Design Colors <small>You can use the material design colors which example class are <code>.bg-pink, .bg-green</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
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
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-red btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-red"> RED </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-green btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-green"> GREEN </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-orange btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-orange"> ORANGE </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-blue btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-blue"> BLUE </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-teal btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-teal"> TEAL </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-cyan btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-cyan"> CYAN </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-pink btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-pink"> PINK </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-purple btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-purple"> PURPLE </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-blue-grey btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-blue-grey"> BLUE GREY </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-deep-orange btn-block waves-effect" data-placement-from="bottom" data-placement-align="left"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-deep-orange"> DEEP ORANGE </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-light-green btn-block waves-effect" data-placement-from="bottom" data-placement-align="center"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-light-green"> LIGHT GREEN </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-black btn-block waves-effect" data-placement-from="bottom" data-placement-align="right"
                                    data-animate-enter="" data-animate-exit="" data-color-name="bg-black"> BLACK </button>
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
                <h2> <strong>Notification</strong> Animations <small>You can use <a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a> class for animating.</small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
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
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeIn"
                                    data-animate-exit="animated fadeOut" data-color-name="bg-black"> FADE IN/OUT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInLeft"
                                    data-animate-exit="animated fadeOutLeft" data-color-name="bg-black"> FADE IN/OUT LEFT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated fadeInRight"
                                    data-animate-exit="animated fadeOutRight" data-color-name="bg-black"> FADE IN/OUT RIGHT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInUp"
                                    data-animate-exit="animated fadeOutUp" data-color-name="bg-black"> FADE IN/OUT UP </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-pink btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated fadeInDown"
                                    data-animate-exit="animated fadeOutDown" data-color-name="bg-black"> FADE IN/OUT DOWN </button>
                    </div>
                </div>
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceIn"
                                    data-animate-exit="animated bounceOut" data-color-name="bg-black"> BOUNCE IN/OUT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInLeft"
                                    data-animate-exit="animated bounceOutLeft" data-color-name="bg-black"> BOUNCE IN/OUT LEFT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated bounceInRight"
                                    data-animate-exit="animated bounceOutRight" data-color-name="bg-black"> BOUNCE IN/OUT RIGHT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInUp"
                                    data-animate-exit="animated bounceOutUp" data-color-name="bg-black"> BOUNCE IN/OUT UP </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-cyan btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated bounceInDown"
                                    data-animate-exit="animated bounceOutDown" data-color-name="bg-black"> BOUNCE IN/OUT DOWN </button>
                    </div>
                </div>
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateIn"
                                    data-animate-exit="animated rotateOut" data-color-name="bg-black"> ROTATE IN/OUT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateInUpLeft"
                                    data-animate-exit="animated rotateOutUpLeft" data-color-name="bg-black"> ROTATE IN/OUT UP LEFT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated rotateInUpRight"
                                    data-animate-exit="animated rotateOutUpRight" data-color-name="bg-black"> ROTATE IN/OUT UP RIGHT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="left" data-animate-enter="animated rotateInDownLeft"
                                    data-animate-exit="animated rotateOutDownLeft" data-color-name="bg-black"> ROTATE IN/OUT DOWN LEFT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-teal btn-block waves-effect" data-placement-from="top" data-placement-align="right" data-animate-enter="animated rotateInDownRight"
                                    data-animate-exit="animated rotateOutDownRight" data-color-name="bg-black"> ROTATE IN/OUT DOWN RIGHT </button>
                    </div>
                </div>
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="animated zoomIn" data-animate-exit="animated zoomOut" data-color-name="bg-black"> ZOOM IN/OUT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="animated zoomInLeft" data-animate-exit="animated zoomOutLeft" data-color-name="bg-black"> ZOOM IN/OUT LEFT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="right"
                                    data-animate-enter="animated zoomInRight" data-animate-exit="animated zoomOutRight" data-color-name="bg-black"> ZOOM IN/OUT RIGHT </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="animated zoomInUp" data-animate-exit="animated zoomOutUp" data-color-name="bg-black"> ZOOM IN/OUT UP </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-orange btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="animated zoomInDown" data-animate-exit="animated zoomOutDown" data-color-name="bg-black"> ZOOM IN/OUT DOWN </button>
                    </div>
                </div>
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-purple btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="animated flipInX" data-animate-exit="animated flipOutX" data-color-name="bg-black"> FLIP IN/OUT X </button>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-purple btn-block waves-effect" data-placement-from="top" data-placement-align="left"
                                    data-animate-enter="animated flipInY" data-animate-exit="animated flipOutY" data-color-name="bg-black"> FLIP IN/OUT Y </button>
                    </div>
                </div>
                <div class="row clearfix jsdemo-notification-button">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <button type="button" class="btn btn-raised m-b-10 bg-indigo btn-block waves-effect" data-placement-from="top" data-placement-align="right"
                                    data-animate-enter="animated lightSpeedIn" data-animate-exit="animated lightSpeedOut"
                                    data-color-name="bg-black"> LIGHT SPEED IN/OUT </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/notifications.js')}}"></script>
@stop