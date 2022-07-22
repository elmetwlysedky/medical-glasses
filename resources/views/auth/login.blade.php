












<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard login</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/Dashboard/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/Dashboard/global_assets/js/main/jquery.min.js"></script>
    <script src="/Dashboard/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/Dashboard/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="/Dashboard/assets/js/app.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>




<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login card -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Login to your account in the dashboard only</h5>
                        <span class="d-block text-muted">Your credentials</span>
                    </div>




                    <x-auth-session-status class="alert alert-warning alert-styled-left alert-dismissible" :status="session('status')"></x-auth-session-status>
                    <x-auth-validation-errors class="alert alert-warning alert-styled-left alert-dismissible" :errors="$errors"></x-auth-validation-errors>


                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="text" class="form-control" placeholder="Email"
                               type="email" name="email" :value="old('email')" required autofocus>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password" class="form-control" placeholder="Password"
                               name="password"
                               required autocomplete="current-password" >
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <a href="{{ route('password.request') }}" class="ml-auto">?Forgot password</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-left2 ml-2"></i></button>
                    </div>



                </div>
            </form>
            <!-- /login card -->

        </div>
        <!-- /content area -->


        <!-- Footer -->


    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
