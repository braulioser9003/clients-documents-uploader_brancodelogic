<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Credito786</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/images/credito786-icon.png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

    <!-- Plugins css -->
    <link href="/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="/libs/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css">

    <!-- Jquery Toast css -->
    <link href="/libs/jquery-toast-plugin/jquery.toast.min.css" rel="stylesheet" type="text/css" />

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="/css/materialdesignicons.min.css" />

    <!--pe-icon-7 Icon -->
    <link rel="stylesheet" type="text/css" href="/css/pe-icon-7-stroke.css" />

    <!-- Custom  css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-bs-spy="scroll" data-bs-target=".sticky" data-bs-offset="70">

<header class="sticky" id="navbar-sticky">
    <div class="tagline d-none d-lg-block bg-dark" style="margin: -25px 0 0 0;">
        <div class="container">
            <div class="float-start info-link">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="tel:866-716-4225">
                            <i class="mdi mdi-phone-classic me-1"></i> <span class="font-size-13">+1 866-716-4225</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="mailto:info@credito786.com">
                            <i class="mdi mdi-email me-1"></i> <span class="font-size-13">info@credito786.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="float-end">
                <ul class="list-inline social-links mb-0" style="float: left;">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/credito786/">
                            <i class="mdi mdi-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.linkedin.com/company/credito786/">
                            <i class="mdi mdi-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/credito786/">
                            <i class="mdi mdi-instagram"></i>
                        </a>
                    </li>
                </ul>
                <ul class="list-unstyled topnav-menu float-end mb-0">
                    @if(\Illuminate\Support\Facades\App::getLocale() == 'es')
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" href="/set_language/en">
                                <img src="/images/flags/us.jpg" alt="user-image" height="14">
                            </a>
                        </li>
                    @else
                        <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" href="/set_language/es">
                                <img src="/images/flags/spain.jpg" alt="user-image" height="14">
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light" id="navbar" style="box-shadow: 0px 1px 14px #0003;">
        <div class="container">
            <!-- LOGO -->
           <div class="row" style="margin: 12px auto 12px auto;">
                <div class="col-md-12">
                    <a class="logo text-uppercase" href="index.html">
                        <img src="/images/credito786-logo.png" alt="" class="logo-light" height="35" />
                        <img src="/images/credito786-logo.png" alt="" class="logo-dark" height="35" />
                    </a>
                </div>
            </div>
    </nav>
    <!-- Navbar End -->
</header>
<section class="section mt-3" id="form-seccion">
    <div class="container">
        <div class="row" style="margin: 35px 0 35px 0;">
            <div class="col-md-12 text-center mb-3">
                <h2 class="text-center" style="text-transform: uppercase;">{{ __("v-login-text1") }}</h2>
                <p class="text-center top_seller" style="text-transform: uppercase;"><b>{{ __("v-login-text2") }}</b></p>

            </div>
        </div>
        <div class="row" id="form_token">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        @if ($message = Session::get('error'))
                            <div class="row" style="margin: 0 0 0 9px;">
                                <div class="col-md-12">
                                    <p><strong style="color: #c43333;"> {{ $message }} </strong></p>
                                </div>
                            </div>
                        @endif
                        <form action="{{ route('create-token') }}" id="form_sign" name="form_sign" method="get" class="px-3">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress1" class="form-label">{{ __("v-login-text3") }}</label>
                                <input class="form-control" type="email" name="email_token" placeholder="{{ __("v-login-text4") }}: john@deo.com">
                                <span class="invalid-feedback" id="email_token" role="alert">
                                </span>
                            </div>
                            <div class="mb-3 text-center">
                                <button class="btn btn-rounded btn-primary" id="sign_in" type="button">{{ __("v-login-text5") }}</button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <div class="row d-none" id="success_token">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center">
                                    <h2 class="mt-0" style="color: #1abc9c;"><i class="mdi mdi-check-all"></i></h2>
                                    <h1 class="mt-0">{{ __("v-login-text6") }}</h1>
                                    <p>{{ __("v-login-text7") }} <br> {{ __("v-login-text12") }} </p>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>

    </div>
    <!-- end container -->
</section>

<!-- footer start -->
<footer class="bg-dark footer text-white" style="padding: 0 0 25px 0 !important; bottom: 0px; position: fixed; width: 100%;">
    <div class="container">
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-4">
                    <div class="text-center">
                        <p class="text-white-50 mb-0">
                            Credito786 © <script>document.write(new Date().getFullYear())</script> • {{ __("v-login-text8") }} • Powered by <a class="footer-link" href="https://qualgrow.com/" target="blank" style="pointer-events: none; cursor: default;">Qualgrow Corp</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container end -->
</footer>
<!-- footer end -->

<!-- javascript -->
<!-- Uppy js-->
<script src="/js/vendor.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>

<!-- counter js -->
<script src="/js/counter.init.js"></script>

<!-- Plugin js-->
<script src="/libs/parsleyjs/parsley.min.js"></script>

<!-- Validation init js-->
<script src="/js/form-validation.init.js"></script>

<!-- Plugins js -->
<script src="/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
<script src="/libs/autonumeric/autoNumeric-min.js"></script>

<!-- Plugins js-->
<script src="/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/libs/moment/min/moment.min.js"></script>
<script src="/libs/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Plugins js-->
<script src="/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<script src="/libs/jquery-toast-plugin/jquery.toast.min.js"></script>

<!-- toastr init js-->
<script src="{{asset('/js/toastr.init.js')}}"></script>

<!-- Init js-->
<script src="/js/form-wizard.init.js"></script>

<!-- Init js-->
<script src="/js/form-pickers.init.js"></script>

<!-- Init js-->
<script src="/js/form-masks.init.js"></script>

<script src="/js/jquery.cookie.js"></script>

<!-- custom js -->
<script src="/js/app.js"></script>

<script>
    $("#sign_in").on('click', function (e) {
            e.preventDefault();
            var form = new FormData(document.forms.namedItem("form_sign"));
            var btn_save = $('#sign_in').html();
            $('.form-control').attr('disabled', 'disabled');
            $('.btn').attr('disabled', 'disabled');
            $('#sign_in').html('<span class="spinner-border spinner-border-sm" role="status"></span>');
            $.ajax({
                url: '/create-token',
                method: "post",
                contentType: false,
                cache: false,
                processData:false,
                data: form,
                success: function (r) {
                    if(r.error){
                        $('.form-control').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        $.NotificationApp.send("{{ __("v-login-text9") }}", r.message, 'top-right', '#bf441d', 'error');
                    }else{
                        $("#form_token").addClass("d-none");
                        $("#success_token").removeClass("d-none");
                        $.each( r.data, function( key, value ) {
                            $("[name="+key+"]").val(value);
                        });
                        $('.btn').removeAttr('disabled');
                    }
                },
                complete: function(r){
                    $('.form-control').removeAttr('disabled');
                    $('.btn').removeAttr('disabled');
                    if(r.status === 400){
                        $.NotificationApp.send("{{ __("v-login-text9") }}", "{{ __("c-pages-text1") }}", 'top-right', '#bf441d', 'error');
                    }
                    $('#sign_in').html(btn_save);
                    if(r.responseJSON){
                        $.each( r.responseJSON.errors, function( key, value ) {
                            $("[name="+key+"]").addClass('is-invalid');
                            $("#"+key+"").html('<strong>'+value+'</strong>');
                        });
                    }
                }
            });
        });

</script>

@if($message = Session::get('error'))
    <script>
        $(function(){
            $.NotificationApp.send("{{ __("v-login-text11") }}", "{{ $message }}", 'top-right', '#bf441d', 'error');
        });
    </script>
@endif
</body>

</html>
