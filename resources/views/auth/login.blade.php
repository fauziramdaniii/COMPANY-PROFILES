<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/template_admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="/template_admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/template_admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/template_admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/template_admin/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <img src="/template_admin/images/logo.svg" alt="logo">
                            </div>
                            <h4 class="text-center">Hello! let's get started</h4>
                            <h6 class="text-center">Sign in to continue.</h6>
                            <form class="pt-3" method="POST">
                                @error('loginError')
                                    <div class="alert alert-danger">
                                        <strong>Error</strong>
                                        <p>{{ $message }}</p>
                                    </div>
                                @enderror
                                @csrf
                                @error('email')
                                    <small style="color: red">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email"
                                        name="email" placeholder="Email">
                                </div>
                                @error('password')
                                    <small style="color: red">
                                        {{ $message }}
                                    </small>
                                @enderror

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    {{-- <a href="#" class="auth-link text-black">Forgot password?</a> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/template_admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/template_admin/js/off-canvas.js"></script>
    <script src="/template_admin/js/hoverable-collapse.js"></script>
    <script src="/template_admin/js/template.js"></script>
    <script src="/template_admin/js/settings.js"></script>
    <script src="/template_admin/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
