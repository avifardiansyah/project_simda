<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 1.6.1
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->

<head>
    <meta charset="utf-8" />
    <title>SUPERJON Kabupaten Cilacap</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/icologoClp.ico" type="image/x-icon">

    <!--Basic Styles-->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="{{asset('assets/css/beyond.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/demo.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link id="skin-link" href="" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="{{asset('assets/js/skins.min.js')}}"></script>
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title"></div>
            <div class="loginbox-social">
                <div class="social-title "><img src="{{asset('assets/img/logoClp-min.png')}}" alt="" style="width: 75px;"></div>
                <div class="social-buttons">
                    <a href="">
                        <img src="{{asset('assets/img/superjon_full.png')}}" alt="" style="width: 200px;">
                    </a>
                </div>
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
            </div>
            <form method="POST" action="{{route('login.proses')}}">
                @csrf
                <div class="loginbox-textbox">
                    <input required type="text" class="form-control" placeholder="NIP / Username" name="username" />
                </div>
                <div class="loginbox-textbox">
                    <input required type="password" class="form-control" placeholder="Password" name="password" />
                </div>


                <div class="loginbox-submit">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>

            <div class="loginbox-signup">
                <a href="https://kominfo.cilacapkab.go.id">Dinas Komunikasi dan Informatika</a><br>
                <a href="https://cilacapkab.go.id">Kabupaten Cilacap</a><br>
                <p>&copy; <?= date('Y'); ?></p>
            </div>
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!--Beyond Scripts-->
    <script src="{{asset('assets/js/beyond.js')}}"></script>

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>

</body>
<!--Body Ends-->

</html>
