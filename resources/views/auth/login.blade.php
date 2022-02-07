<!doctype html>
<html lang="en">


<head>

        <meta charset="utf-8" />
        <title>Login | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/dashboard/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/dashboard/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/dashboard/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/dashboard/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Sistema de Gestão de Frotas</h5>
                                            <p>Inicie a sessão para continuar.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="/dashboard/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="/dashboard/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="/dashboard/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <!-- Session Status -->
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <!-- Validation Errors -->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                    </ul>
                                </div>
                            @endif
                                <div class="p-2">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="email" :value="old('email')" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" class="form-control" name="password" required
                                                autocomplete="current-password">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- JAVASCRIPT -->
        <script src="/dashboard/libs/jquery/jquery.min.js"></script>
        <script src="/dashboard/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/dashboard/libs/metismenu/metisMenu.min.js"></script>
        <script src="/dashboard/libs/simplebar/simplebar.min.js"></script>
        <script src="/dashboard/libs/node-waves/waves.min.js"></script>

        <!-- App js -->
        <script src="/dashboard/js/app.js"></script>
    </body>

</html>
