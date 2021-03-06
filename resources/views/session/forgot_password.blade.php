<!DOCTYPE html>
<html>

<!-- Mirrored from dreamguys.co.in/smarthr/dark/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Oct 2018 20:56:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to('assets/img/favicon.png')}}">
    <title>Forgot Password - HRMS admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('assets/css/style.css')}}">
    <!--[if lt IE 9]>
    <script src="{{URL::to('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{URL::to('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title">Musami Drugs Inventory System</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <div class="account-logo">
                        <a href="#"><img src="{{URL::to('assets/img/logo2.png')}}"></a>
                    </div>
                    @if(Session::has('message'))
                        <div class="alert-success">{{Session::get('message')}}</div>
                    @elseif(Session::has('error'))
                        <div class="alert-danger">{{Session::get('error')}}</div>
                    @endif
                    <form method="post" action="{{route('reset_password')}}">
                        {{csrf_field()}}
                        <div class="form-group form-focus">
                            <label class="control-label">Employee ID</label>
                            <input class="form-control floating" type="text" name="employee_id">
                        </div>
                        <div class="form-group form-focus">
                            <label class="control-label">National ID</label>
                            <input class="form-control floating" type="text" name="national_id">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Reset Password</button>
                        </div>
                        <div class="text-center">
                            <a href="{{route('index')}}">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-overlay" data-reff="#sidebar"></div>
<script type="text/javascript" src="{{URL::to('assets/js/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('assets/js/app.js')}}"></script>
</body>

<!-- Mirrored from dreamguys.co.in/smarthr/dark/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Oct 2018 20:56:48 GMT -->
</html>
