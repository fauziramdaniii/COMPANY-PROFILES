<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from inspirothemes.com/polo/page-user-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Sep 2020 10:26:55 GMT -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>POLO | The Multi-Purpose HTML5 Template</title>

    <link href="template/css/plugins.css" rel="stylesheet">
    <link href="template/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="body-inner">

        <section class="fullscreen" data-bg-parallax="/images/pages/1.jpg">
            <div class="container">
                <div>
                    <div class="text-center m-b-20" style="overflow-y: hidden;">
                        <a href="index.html" class="logo">
                            <img src="template/images/logo-dark.png" alt="Polo Logo">
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 center p-50 background-white b-r-6" style="overflow-y: hidden;">
                            <h3>Login to your Account</h3>
                            @error('loginError')
                                <div class="alert alert-danger">
                                    <strong>Error</strong>
                                    <p>{{ $message }}</p>
                                </div>
                            @enderror
                            <form method="POST">
                                @csrf
                                @error('email')
                                    <small style="color: red">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <div class="form-group">
                                    <label class="sr-only">Username or Email</label>
                                    <input type="text" class="form-control" placeholder="Username or Email"
                                        name="email">
                                </div>
                                @error('password')
                                    <small style="color: red">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <div class="form-group m-b-5">
                                    <label class="sr-only">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                                <div class="form-group form-inline text-left">
                                    <div class="form-check">
                                        <label>
                                            <input type="checkbox"><small class="m-l-10"> Remember me</small>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-left form-group">
                                    <button type="submit" class="btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="template/js/jquery.js"></script>
    <script src="template/js/plugins.js"></script>

    <script src="template/js/functions.js"></script>
</body>


</html>
