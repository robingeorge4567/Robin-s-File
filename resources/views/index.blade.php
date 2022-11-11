<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PixelFloat | CRM</title>

       <link href="{{ asset('storage/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('storage/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/css/adminpanel.css') }}" rel="stylesheet">

    <link href="{{ asset('storage/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

  

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class="col-lg-6 col-md-8 login-box">
                    <div class="col-lg-12 login-key">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </div>
                    <div class="col-lg-12 login-title">
                        ADMIN PANEL
                    </div>
    
                    <div class="col-lg-12 login-form">
                        <div class="col-lg-12 login-form">
                            <form method="POST" action="/login">
                                @if(Session::get('fail'))
                                <p style="color:red"> {{ Session::get('fail') }}</p>
                                @endif
                                @if(Session::get('message'))
                                <p style="color:red"> {{ Session::get('message') }}</p>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">USERNAME</label>
                                    <input type="text" class="form-control" name="username">
                                    <p>@error('username') {{ $message }}  @enderror</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">PASSWORD</label>
                                    <input type="password" class="form-control" name="password">
                                    <p>@error('password') {{ $message }}  @enderror</p>
                                </div>
    
                                <div class="col-lg-12 loginbttm">
                                    <div class="col-lg-6 login-btm login-text">
                                        <!-- Error Message -->
                                    </div>
                                    <div class="col-lg-6 login-btm login-button">
                                        <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
            </div>
   
        </div>


    <!-- Mainly scripts -->
    <script src="{{ asset('storage/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('storage/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/js/bootstrap.js') }}"></script>
    <script src="{{ asset('storage/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('storage/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('storage/js/inspinia.js') }}"></script>
    <script src="{{ asset('storage/js/plugins/pace/pace.min.js') }}"></script>

    <!-- iCheck -->
    <script src="{{ asset('storage/js/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>
