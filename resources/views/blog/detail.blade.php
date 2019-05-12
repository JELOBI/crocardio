@extends('layout.master')
@section('title', 'Tekst')
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
                        <li><a href="#"><i class="zmdi zmdi-account col-blue"></i>Objavio: Dr. Doktorski</a></li>
                        <li><a href="#"><i class="zmdi zmdi-label col-lime"></i>Savjeti</a></li>
                        <li><a href="#"><i class="zmdi zmdi-comment-text col-blue"></i>Komentari: 3</a></li>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Komentari</strong> 3</h2>
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
                    <h2><strong>Ostavite</strong> Vaš komentar <small>Popunite sva neophodna polja.*</small></h2>
                </div>
                <div class="body">
                    <div class="comment-form">
                        <form class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ime i prezime">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Vaš komentar..."></textarea>
                                </div>
                                <button type="submit" class="btn btn btn-primary btn-round">POŠALJI</button>
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
                        <input type="text" class="form-control" placeholder="Traži...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Popularni</strong> tekstovi</h2>
                </div>
                <div class="body widget popular-post">
                    <ul class="list-unstyled m-b-0">
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/1.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">Analize</a></h5>
                                <small class="author-name">By: <a href="#">Novogorski Starograd</a></small>
                                <small class="date">Maj, 10 2019</small>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/2.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">Statistike</a></h5>
                                <small class="author-name">By: <a href="#">Novogorski Starograd</a></small>
                                <small class="date">Maj, 10 2019</small>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/3.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">Savjeti</a></h5>
                                <small class="author-name">By: <a href="#">Novogorski Starograd</a></small>
                                <small class="date">Maj, 10 2019</small>
                            </div>
                        </li>
                        <li class="row">
                            <div class="icon-box col-4">
                                <img class="img-fluid img-thumbnail" src="../assets/images/blog/4.jpg" alt="Awesome Image">
                            </div>
                            <div class="text-box col-8 p-l-0">
                                <h5 class="m-b-0"><a href="#">Tehnologija</a></h5>
                                <small class="author-name">By: <a href="#">Novogorski Starograd</a></small>
                                <small class="date">Maj, 11 2019</small>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>                
            <div class="card">
                <div class="header">
                    <h2><strong>Tag</strong></h2>
                </div>
                <div class="body widget tag-clouds">
                    <ul class="list-unstyled m-b-0">
                        <li><a href="#" class="tag badge badge-default">Analize</a></li>
                        <li><a href="#" class="tag badge badge-success">Projekti</a></li>
                        <li><a href="#" class="tag badge badge-info">Tehnologija</a></li>
                        <li><a href="#" class="tag badge badge-success">Statistika</a></li>
                        <li><a href="#" class="tag badge badge-warning">Savjeti</a></li>
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
                    <h2><strong>Email</strong> Newsletter <small>Prijavite se i budite u toku svih dešavanja.</small></h2>
                </div>
                <div class="body widget newsletter">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Vaš email">
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
