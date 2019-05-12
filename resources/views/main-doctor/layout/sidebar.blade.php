<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>CroCardio</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Lječnik</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            {{--<div class="image"><a href="{{route('doctor.profile')}}"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>--}}
                            <div class="image"><a href="#"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                            <div class="detail">
                                <h4>Dr. Prezime</h4>
                                <small>specijalizacija</small>
                            </div>
                        </div>
                    </li>
                    
                    <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="zmdi zmdi-home"></i><span>Glavna ploča</span></a></li>
                    {{--<li class="{{ Request::segment(1) === 'appointment' ? 'active open' : null }}"><a href="{{route('appointment.book-appointment')}}"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span></a></li>--}}
                   {{-- <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{route('doctor.profile')}}"><i class="zmdi zmdi-account-add"></i><span>Moj profil</span></a></li>--}}

                    <li class="{{ Request::segment(1) === 'patients' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Pacijenti</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'all-patients' ? 'active' : null }}"><a href="{{route('patients.all-patients')}}">Svi pacijenti</a></li>
                            <li class="{{ Request::segment(2) === 'add-patients' ? 'active' : null }}"><a href="{{route('patients.add-patients')}}">Novi pacijent</a></li>

                            {{--<li class="{{ Request::segment(2) === 'invoice' ? 'active' : null }}"><a href="{{route('patients.invoice')}}">Invoice</a></li>--}}
                        </ul>
                    </li>
{{--                    <li class="{{ Request::segment(1) === 'payment' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'all-payment' ? 'active' : null }}"><a href="{{route('payment.all-payment')}}">All Payments</a></li>
                            <li class="{{ Request::segment(2) === 'add-payment' ? 'active' : null }}"><a href="{{route('payment.add-payment')}}">Add Payment</a></li>
                            <li class="{{ Request::segment(2) === 'invoice' ? 'active' : null }}"><a href="{{route('patients.invoice')}}">Invoice</a></li>
                        </ul>
                    </li>--}}
{{--                    <li class="{{ Request::segment(1) === 'departments' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-label-alt"></i><span>Ustanove</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'add-department' ? 'active' : null }}"><a href="{{route('departments.add-department')}}">Nova</a></li>
                            <li class="{{ Request::segment(2) === 'all-departments' ? 'active' : null }}"><a href="{{route('departments.all-departments')}}">Sve ustanove</a></li>
--}}{{--                            <li><a href="javascript:void(0);">Ustanova 1</a></li>
                            <li><a href="javascript:void(0);">Ustanova 2</a></li>
                            <li><a href="javascript:void(0);">Ustanova 3</a></li>
                            <li><a href="javascript:void(0);">Ustanova 4</a></li>
                            <li><a href="javascript:void(0);">Ustanova 5</a></li>
                            <li><a href="javascript:void(0);">Ustanova 5</a></li>
                            <li><a href="javascript:void(0);">Ustanova 6</a></li>
                            <li><a href="javascript:void(0);">Ustanova 7</a></li>--}}{{--
                        </ul>
                    </li>--}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Autentikacija</span></a>
                        <ul class="ml-menu">
                            <li><a href="{{route('authentication.login')}}">Prijavi se</a></li>
                            <li><a href="{{route('authentication.register')}}">Odjavi se</a></li>
                            <li><a href="{{route('authentication.forgot-password')}}">Zaboravljena šifra</a></li>
 {{--                           <li><a href="{{route('authentication.page404')}}">Page 404</a></li>
                            <li><a href="{{route('authentication.page500')}}">Page 500</a></li>
                            <li><a href="{{route('authentication.page-offline')}}">Page Offline</a></li>
                            <li><a href="{{route('authentication.lockscreen')}}">Locked Screen</a></li>--}}
                        </ul>
                    </li>

                    <li class="{{ Request::segment(1) === 'blog' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'new-post' ? 'active' : null }}"><a href="{{route('blog.new-post')}}">Novi blog post</a></li>
                            {{--<li class="{{ Request::segment(2) === 'list' ? 'active' : null }}"><a href="{{route('blog.list')}}">Blog List</a></li>--}}
                            <li class="{{ Request::segment(2) === 'grid' ? 'active' : null }}"><a href="{{route('blog.grid')}}">Prikaži blogove</a></li>
                            {{--<li class="{{ Request::segment(2) === 'detail' ? 'active' : null }}"><a href="{{route('blog.detail')}}">Blog Detail</a></li>--}}
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'file-manager' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'documents' ? 'active' : null }}"><a href="{{route('file-manager.documents')}}" >Dokumenti</a></li>
                            <li class="{{ Request::segment(2) === 'media' ? 'active' : null }}"><a href="{{route('file-manager.media')}}">Media</a></li>
                            <li class="{{ Request::segment(2) === 'image' ? 'active' : null }}"><a href="{{route('file-manager.image')}}">Fotografije</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::segment(1) === 'contact-list' ? 'active open' : null }}"><a href="{{route('app.contact-list')}}"><i class="zmdi zmdi-apps"></i><span>Kontakt lista</span></a></li>



{{--                    <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Kontakt</span></a>
                        <ul class="ml-menu">
                            <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('app.inbox')}}">Inbox</a></li>
                            <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('app.chat')}}">Chat</a></li>
                            <li class="{{ Request::segment(2) === 'contact-list' ? 'active' : null }}"><a href="{{route('app.contact-list')}}">Kontakt lista</a></li>
                        </ul>
                    </li>   --}}


                </ul>
            </div>
        </div>

    </div>    
</aside>
