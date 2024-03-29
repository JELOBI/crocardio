@extends('main-doctor.layout.master')
@section('title', 'Detail')
@section('parentPageTitle', 'Blog')
@section('page-style')
    <link rel="stylesheet" href="{{asset('assets/css/blog.css')}}"/>
@stop
@section('content')
<div class="blog-page">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card single_post">
                <div class="body">
                    <h3 class="m-t-0 m-b-5"><a href="blog-details.html">All photographs are accurate. None of them is the truth</a></h3>
                    <ul class="meta">
                        <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Posted By: John Smith</a></li>
                        <li><a href="#"><i class="zmdi zmdi-label col-red"></i>Photography</a></li>
                        <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Comments: 3</a></li>
                    </ul>
                </div>                    
                <div class="body">
                    <div class="img-post m-b-15">
                        <img src="../assets/images/blog/blog-page-1.jpg" alt="Awesome Image">
                        <div class="social_share">                            
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-facebook"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-twitter"></i></button>
                            <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-instagram"></i></button>
                        </div>
                    </div>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    <a href="blog-details.html" title="read more" class="btn btn-round btn-info">Read More</a>                        
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Comments</strong> 3</h2>
                </div>
                <div class="body">
                    <ul class="comment-reply list-unstyled">
                        <li class="row">
                            <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../assets/images/sm/avatar2.jpg" alt="Awesome Image"></div>
                            <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                <h5 class="m-b-0">Gigi Hadid </h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                                <ul class="list-inline">
                                    <li><a href="#">Jan 09 2018</a></li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../assets/images/sm/avatar3.jpg" alt="Awesome Image"></div>
                            <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                <h5 class="m-b-0">Christian Louboutin</h5>
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble</p>
                                <ul class="list-inline">
                                    <li><a href="#">Jan 12 2018</a></li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-md-2 col-4"><img class="img-fluid img-thumbnail" src="../assets/images/sm/avatar4.jpg" alt="Awesome Image"></div>
                            <div class="text-box col-md-10 col-8 p-l-0 p-r0">
                                <h5 class="m-b-0">Kendall Jenner</h5>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                <ul class="list-inline">
                                    <li><a href="#">Jan 20 2018</a></li>
                                    <li><a href="#">Reply</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>                                        
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Leave</strong> a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
                </div>
                <div class="body">
                    <div class="comment-form">
                        <form class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                </div>
                                <button type="submit" class="btn btn btn-primary btn-round">SUBMIT</button>
                            </div>                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 right-box">
            <div class="card">
                <div class="body search">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Popular</strong> Posts</h2>                        
                </div>
                <div class="body widget popular-post">
                    <ul class="list-unstyled m-b-0">
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/1.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">Web Design</a></h5>
                                <small class="author-name">By: <a href="#">Michael Allenson</a></small>
                                <small class="date">Dec, 05 2017</small>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/2.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">UI UX Design</a></h5>
                                <small class="author-name">By: <a href="#">Michael Allenson</a></small>
                                <small class="date">Dec, 15 2017</small>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/3.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">Photography</a></h5>
                                <small class="author-name">By: <a href="#">Michael Allenson</a></small>
                                <small class="date">Dec, 15 2017</small>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/4.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">New Technology</a></h5>
                                <small class="author-name">By: <a href="#">Michael Allenson</a></small>
                                <small class="date">Dec, 20 2017</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>                
            <div class="card">
                <div class="header">
                    <h2><strong>Tag</strong> Clouds</h2>                        
                </div>
                <div class="body widget tag-clouds">
                    <ul class="list-unstyled m-b-0">
                        <li><a href="#" class="tag badge badge-default">Design</a></li>
                        <li><a href="#" class="tag badge badge-success">Project</a></li>
                        <li><a href="#" class="tag badge badge-info">Creative UX</a></li>
                        <li><a href="#" class="tag badge badge-success">Wordpress</a></li>
                        <li><a href="#" class="tag badge badge-warning">HTML5</a></li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Instagram</strong> Post</h2>                        
                </div>
                <div class="body widget">
                    <ul class="list-unstyled instagram-plugin m-b-0">
                        <li><a href="#"><img src="../assets/images/blog/05-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/06-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/07-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/08-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/09-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/10-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/11-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/12-img.jpg" alt="image description"></a></li>
                        <li><a href="#"><img src="../assets/images/blog/13-img.jpg" alt="image description"></a></li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Email</strong> Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                </div>
                <div class="body widget newsletter">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-mail-send"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
