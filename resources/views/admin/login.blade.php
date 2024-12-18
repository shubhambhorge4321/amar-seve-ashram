<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <meta name="keywords"
        content="admin template,html 5 admin template , dmeki admin , dashboard template, bootstrap 5 admin template, responsive admin template">
    <title>Admin | Login</title>
    <!-- shortcut icon-->
    <link rel="icon" href="{{asset('images/logo/icon-logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('images/logo/icon-logo.png')}}" type="image/x-icon">
    <!-- Fonts css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Font awesome -->
    <link href="{{asset('css/vendor/font-awesome.css')}}" rel="stylesheet">
    <!-- themify icon-->
    <link href="{{asset('css/vendor/themify-icons.css')}}" rel="stylesheet">
    <!-- Scrollbar-->
    <link href="{{asset('css/vendor/simplebar.css')}}" rel="stylesheet">
    <!-- Bootstrap css-->
    <link href="{{asset('css/vendor/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom css-->
    <link href="{{asset('css/style.css')}}" id="customstyle" rel="stylesheet">
</head>

<body>
    <!-- Login Start-->
    <div class="auth-main">
        <div class="codex-authbox">
            <div class="auth-header">
                <div class="codex-brand"><a href="index.html"><img class="img-fluid light-logo"
                            src="../assets/images/logo/logo.png" alt=""><img class="img-fluid dark-logo"
                            src="../assets/images/logo/dark-logo.png" alt=""></a></div>
                <h3>welcome to admin</h3>
                <h6>don't have an account ?<a class="text-primary" href="{{route('register-auth')}}">create an
                        account</a></h6>
                        <p>@if($errors->has('error'))
										<div style="color: red">{{ $errors->first('error') }}</div>
									@endif</p>
            </div>
            <form action="{{route('login.auth')}}" method="POST">
                @csrf
                @method("post")
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" required placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label class="form-label" for="Password">Password</label>
                    <div class="input-group group-input">
                        <input class="form-control showhide-password" type="password" name="password" id="Password"
                            placeholder="Enter Your Password" required><span
                            class="input-group-text toggle-show fa fa-eye"></span>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="auth-remember">
                        <div class="form-check custom-chek">
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i>Login</button>
                    </div>
            </form>

        </div>
    </div>
    <!-- Login End-->

    <!-- main jquery-->
    <script src="{{asset('/js/jquery-3.6.0.js')}}"></script>
    <!-- Theme Customizer-->
    <script src="{{asset('/js/layout-storage.js')}}"></script>
    <script src="{{asset('/js/customizer.js')}}"></script>
    <!-- Feather icons js-->
    <script src="{{asset('/js/icons/feather-icon/feather.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Scrollbar-->
    <script src="{{asset('/js/vendors/simplebar.js')}}"></script>
    <!-- Custom script-->
    <script src="{{asset('/js/custom-script.js')}}"></script>
</body>

</html>
