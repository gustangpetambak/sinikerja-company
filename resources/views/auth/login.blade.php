<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>Sinikerja | Login</title>
    <meta name="description" content="Login company" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->


    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('assets/css/pages/login/login-1.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.custome.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
            <!--begin::Content-->
            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <div>
                        <div class="text-center">
                            <a href="/">
                                <img src="{{asset('logo.svg')}}" class="mb-10" style="min-height: 50px;" />
                            </a>
                        </div>
                        <!--begin::Signin-->
                        <div class="login-form login-signin px-10 py-10">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_login_signin_form">
                                <!--begin::Title-->
                                <div class="pb-13 pt-lg-0 pt-5">
                                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
                                        Login
                                    </h3>
                                    <span class="text-muted font-weight-bold font-size-h5">
                                        Belum punya akun?
                                        <a href="/register" class="text-primary font-weight-bold">Daftar disini</a>
                                    </span>
                                </div>
                                <!--begin::Title-->

                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="font-size-h6 font-weight-bolder text-dark">No. Handphone</label>
                                    <input class="form-control form-control-solid h-auto py-5 px-6 rounded-lg" type="text" name="username" autocomplete="off" />
                                </div>
                                <!--end::Form group-->

                                <!--begin::Form group-->
                                <div class="form-group">
                                    <div class="d-flex justify-content-between mt-n5">
                                        <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>

                                        <a href="javascript:;" class="text-primary font-size-h6 font-weight-bold text-hover-primary pt-5" id="kt_login_forgot">
                                            Forgot Password ?
                                        </a>
                                    </div>

                                    <input class="form-control form-control-solid h-auto py-5 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
                                </div>
                                <!--end::Form group-->

                                <!--begin::Action-->
                                <div class="pb-lg-0 pb-5">
                                    <button type="button" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                        Login
                                    </button>

                                    <button type="button" class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg">
                                        <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/social-icons/google.svg--><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M19.9895 10.1871C19.9895 9.36767 19.9214 8.76973 19.7742 8.14966H10.1992V11.848H15.8195C15.7062 12.7671 15.0943 14.1512 13.7346 15.0813L13.7155 15.2051L16.7429 17.4969L16.9527 17.5174C18.879 15.7789 19.9895 13.221 19.9895 10.1871Z" fill="#4285F4" />
                                                <path d="M10.1993 19.9313C12.9527 19.9313 15.2643 19.0454 16.9527 17.5174L13.7346 15.0813C12.8734 15.6682 11.7176 16.0779 10.1993 16.0779C7.50243 16.0779 5.21352 14.3395 4.39759 11.9366L4.27799 11.9466L1.13003 14.3273L1.08887 14.4391C2.76588 17.6945 6.21061 19.9313 10.1993 19.9313Z" fill="#34A853" />
                                                <path d="M4.39748 11.9366C4.18219 11.3166 4.05759 10.6521 4.05759 9.96565C4.05759 9.27909 4.18219 8.61473 4.38615 7.99466L4.38045 7.8626L1.19304 5.44366L1.08875 5.49214C0.397576 6.84305 0.000976562 8.36008 0.000976562 9.96565C0.000976562 11.5712 0.397576 13.0882 1.08875 14.4391L4.39748 11.9366Z" fill="#FBBC05" />
                                                <path d="M10.1993 3.85336C12.1142 3.85336 13.406 4.66168 14.1425 5.33717L17.0207 2.59107C15.253 0.985496 12.9527 0 10.1993 0C6.2106 0 2.76588 2.23672 1.08887 5.49214L4.38626 7.99466C5.21352 5.59183 7.50242 3.85336 10.1993 3.85336Z" fill="#EB4335" />
                                            </svg><!--end::Svg Icon--></span> Login dengan Google
                                    </button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signin-->

                        <!--begin::Forgot-->
                        <div class="login-form login-forgot">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                                <!--begin::Title-->
                                <div class="pb-13 pt-lg-0 pt-5">
                                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">
                                        Forgotten Password ?
                                    </h3>
                                    <p class="text-muted font-weight-bold font-size-h4">
                                        Enter your email to reset your password
                                    </p>
                                </div>
                                <!--end::Title-->

                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                                </div>
                                <!--end::Form group-->

                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-wrap pb-lg-0">
                                    <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                    <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
                                </div>
                                <!--end::Form group-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Forgot-->
                    </div>
                </div>
                <!--end::Content body-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}?v=7.0.6"></script>
    <script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}?v=7.0.6"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}?v=7.0.6"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{asset('assets/js/pages/custom/login/login-general.js')}}?v=7.0.6"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>