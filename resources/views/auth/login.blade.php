<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Muungano | User Login 1</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- 
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/pages/css/login-styles.min.css" rel="stylesheet" type="text/css" />
        
        <link rel="shortcut icon" href="favicon.ico" /> -->
        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/components.css') }}" rel="stylesheet">
        <link href="{{ asset('css/login-styles.css') }}" rel="stylesheet">
    </head>
    <!-- END HEAD -->

    <body class=" login">
        
        <!-- BEGIN LOGO -->
        <div class="logo"> MUUNGANO </div>
        <!-- END LOGO -->

        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h3 class="form-title font-green">Sign In</h3>
                
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
                    <input id="email" type="email" class="form-control  form-control-solid placeholder-no-fix" name="email" value="{{ old('email') }}" autocomplete="off" placeholder="E-Mail Address" required autofocus>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required /> 
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>

                    <label class="rememberme check">
                        <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }} />  Remember </label>
                    <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">Forgot Password?</a>
                </div>
                
            </form>
            <!-- END LOGIN FORM -->
                       
        </div>
        <div class="copyright"> {{ now()->year }} © crndolo. </div>
                
    </body>

</html>