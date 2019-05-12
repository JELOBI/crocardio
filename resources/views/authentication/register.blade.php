@extends('layout.authentication')
@section('title', 'Register')


@section('content')
<div class="container">
    <div class="col-md-12 content-center">
        <div class="card-plain">
            <form class="form" method="" action="">
                <div class="header">
                    <div class="logo-container">
                        <img src="../assets/images/logo.png" alt="">
                    </div>
                    <h5>Registruj se</h5>
                    <span>Za profesionalce samo</span>
                </div>
                <div class="content">                                                
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter User Name">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-account-circle"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                        </span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" class="form-control" />
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>                        
                </div>
                <div class="checkbox">
                        <input id="terms" type="checkbox">
                        <label for="terms">
                                Saglasan sam sa  <a href="javascript:void(0);">uslovima korištenja.</a>
                        </label>
                    </div>
                <div class="footer text-center">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-lg btn-block waves-effect waves-light">REGISTRUJ SE</a>
                    <h5><a class="link" href="{{route('authentication.login')}}">Več ste se registrovali?</a></h5>
                </div>
            </form>
        </div>
    </div>
</div>

@stop