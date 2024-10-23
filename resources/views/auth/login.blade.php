<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../../">
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('assets/css/pages/login/classic/login-5.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="{{ asset('assets/css/themes/layout/header/base/light.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/themes/layout/header/menu/light.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/themes/layout/brand/dark.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/themes/layout/aside/dark.css') }}?v=7.0.6" rel="stylesheet"
        type="text/css" /> <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{ asset('/assets/front/images/favicon.png') }}" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
                style="background-image: url(assets/media/bg/bg-3.jpg);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="{{ asset('assets/media/logos/logo-letter-1.png') }}" class="max-h-75px" alt="" />
                            <img src="{{ asset('assets/media/logos/logo-dark.png') }}" class="max-h-75px" alt="" width="100px"/>
                        </a>
                    </div>
                    <!--end::Login Header-->

                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-10">
                            <h3 class="font-weight-normal text-dark">Sign In To </h3>
                            <p class="text-dark">Enter your details to login to your account:</p>
                        </div>
                        {{-- @include('flash-message') --}}
                        <form class="form" action="{{ route('login.check') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto border-1 border-dark text-dark rounded-pill border-0 py-4 px-8"
                                    type="text" placeholder="Email" name="email" autocomplete="off"
                                    value="{{ old('email') }}" autofocus />
                                @if ($errors->has('email'))
                                    <div class="error text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input
                                    class="form-control form-control-solid h-auto text-dark rounded-pill border-0 py-4 px-8"
                                    type="password" placeholder="Password" name="password" />
                                @if ($errors->has('password'))
                                    <div class="error text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <div class="form-group text-center mt-10">
                                <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign
                                    In</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign in form-->

                    <!--begin::Login forgot password form-->
                    <div class="login-forgot">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
                            <p class="opacity-40">Enter your email to reset your password</p>
                        </div>
                        <form class="form" id="kt_login_forgot_form">
                            <div class="form-group mb-10">
                                <input
                                    class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                    type="text" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <button id="kt_login_forgot_submit"
                                    class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request</button>
                                <button id="kt_login_forgot_cancel"
                                    class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login forgot password form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}?v=7.0.6"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}?v=7.0.6"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}?v=7.0.6"></script>
    <script src="{{ asset('assets/js/pages/custom/login/login-general.js') }}?v=7.0.6"></script>
    <script>
        setTimeout(function() {
            $('.alert-block').fadeOut('fast');
        }, 3000);
    </script>
</body>
<!--end::Body-->

</html>
