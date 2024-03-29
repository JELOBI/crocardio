@extends('main-doctor.layout.master')
@section('title', 'Gallery')
@section('parentPageTitle', 'Pages')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/light-gallery/css/lightgallery.css')}}">
@stop
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Gallery</strong> <small>All pictures taken from <a href="https://pexels.com/" target="_blank">pexels.com</a></small> </h2>
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
                <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/1.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-1.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/2.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-2.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/3.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-3.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/4.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-4.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/5.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-5.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/6.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-6.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/7.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-7.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/8.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-8.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/9.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-9.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/10.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-10.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/11.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-11.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/12.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-12.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/13.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-13.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/14.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-14.jpg" alt=""> </a> </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 m-b-20"> <a href="../assets/images/image-gallery/15.jpg"> <img class="img-fluid img-thumbnail" src="../assets/images/image-gallery/thumb/thumb-15.jpg" alt=""> </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/light-gallery/js/lightgallery-all.min.js')}}"></script>
<script src="{{asset('assets/js/pages/medias/image-gallery.js')}}"></script>
@stop