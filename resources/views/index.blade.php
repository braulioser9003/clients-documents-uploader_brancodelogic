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

    <link rel="stylesheet" href="/fonts/fontawesome/css/fontawesome-all.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">

    <!-- Sweet Alert-->
    <link href="/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Tour css -->
    <link href="/libs/hopscotch/css/hopscotch.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/libs/material-datetimepicker/css/bootstrap-material-datetimepicker.css">

    <!-- Jquery Toast css -->
    <link href="/libs/jquery-toast-plugin/jquery.toast.min.css" rel="stylesheet" type="text/css" />

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="/css/materialdesignicons.min.css" />

    <!--pe-icon-7 Icon -->
    <link rel="stylesheet" type="text/css" href="/css/pe-icon-7-stroke.css" />
    <link href="/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom  css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />

    <style>
        .animation_boton {
            animation: pulse-boton  1s infinite;
        }
        div.hopscotch-bubble .hopscotch-bubble-arrow-container.up .hopscotch-bubble-arrow-border {
            border-bottom: 17px solid rgb(45 124 243 / 25%) !important;
        }
        div.hopscotch-bubble {
            border: 5px solid rgb(45 124 243 / 27%) !important;
            border-radius: 9px;
        }
        div.hopscotch-bubble .hopscotch-bubble-arrow-container.down .hopscotch-bubble-arrow-border {
            border-top: 17px solid rgb(45 124 243 / 22%);
        }

        div.hopscotch-bubble .hopscotch-nav-button.next {
            background-color: #2d7cf3 !important;
            background-image: initial !important;
            border-color: #2d7cf3 !important;
        }
        div.hopscotch-bubble .hopscotch-nav-button.prev:hover{

        }
        .select2-container--default .select2-selection--single{
            background-color: #fff !important;
            border: 1px solid #ced4da !important;
            border-radius: 4px !important;
        }
        .select2-container {
            width: 100% !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            color: #92989e !important;
        }

        .select2-container .select2-selection--single {
            padding: 5px 0 5px 9px;
            height: initial !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 7px !important;
        }

        @keyframes pulse-boton {
            0% {
                left: 0px;
                position: relative;
            }

            100% {
                left: 10px;
                position: relative;
            }
        }
    </style>
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
<section class="section mt-3" id="form-seccion" style="padding-bottom: 172px;">
    <div class="container">
        @include('uppy')
    <!-- end container -->
    </div>
</section>
<!-- footer start -->
<footer class="bg-dark footer text-white" style="padding: 0 0 25px 0 !important;">
    <div class="container">
        <!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-4">
                    <div class="text-center">
                        <p class="text-white-50 mb-0">
                            Credito786 © <script>document.write(new Date().getFullYear())</script> • La vida será más fácil • Powered by <a class="footer-link" href="https://qualgrow.com/" target="blank" style="pointer-events: none; cursor: default;">Qualgrow Corp</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container end -->
</footer>

<!-- javascript -->
<!-- Uppy js-->
<script src="/js/vendor.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>

<!-- counter js -->
<script src="/js/counter.init.js"></script>

<!-- Plugin js-->
<script src="/libs/parsleyjs/parsley.min.js"></script>
<script src="/libs/select2/select2.min.js"></script>

<!-- Validation init js-->
<script src="/js/form-validation.init.js"></script>

<!-- Sweet Alerts js -->
<script src="/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="/js/sweet-alerts.init.js"></script>

<!-- Plugins js-->
<script src="/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

<script src="/libs/jquery-toast-plugin/jquery.toast.min.js"></script>

<!-- material datetimepicker Js -->
<script type="text/javascript" src="/libs/momentjs/moment-with-locales.min.js"></script>
<script type="text/javascript" src="/libs/material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<!-- Tour page js -->
<script src="/libs/hopscotch/js/hopscotch.min.js"></script>

<!-- toastr init js-->
<script src="{{asset('/js/toastr.init.js')}}"></script>

<script src="/js/jquery.cookie.js"></script>

<!-- custom js -->
<script src="/js/app.js"></script>

<script>
    $( document ).ready(function() {
        let tour_on = "{{ $tour }}"||"";

        $(".select2-field").select2();

        $(".uppy-StatusBar-actionBtn").on("click", function() {
            $("#document-modal").modal('hide');
        });
        $("#contact-address_country").on("change", function() {
            let contry = $(this).val();
            if(contry == ''){
                contry = "US";
            }
            ajax_get_data("get_state", contry, '', "#contact-address_state", '#spinner_country', 'State');
        });

        $("#contact-address_state").on("change", function() {
            let contry = $("#contact-address_country").val();
            let state = $(this).val();
            if(contry == ''){
                contry = "US";
            }
            ajax_get_data("get_cities", contry, state, "#selectize-select", '#spinner_state', 'City');
        });

        $("div[data-uppy-acquirer-id='MyDevice'] > button > svg").html("<svg aria-hidden=\"true\" focusable=\"false\" width=\"32\" height=\"32\" viewBox=\"0 0 32 32\"><g fill=\"none\" fillrule=\"evenodd\"><rect class=\"uppy-ProviderIconBg\" fill=\"#03BFEF\" width=\"32\" height=\"32\" rx=\"16\"></rect><path d=\"M22 11c1.133 0 2 .867 2 2v7.333c0 1.134-.867 2-2 2H10c-1.133 0-2-.866-2-2V13c0-1.133.867-2 2-2h2.333l1.134-1.733C13.6 9.133 13.8 9 14 9h4c.2 0 .4.133.533.267L19.667 11H22zm-6 1.533a3.764 3.764 0 0 0-3.8 3.8c0 2.129 1.672 3.801 3.8 3.801s3.8-1.672 3.8-3.8c0-2.13-1.672-3.801-3.8-3.801zm0 6.261c-1.395 0-2.46-1.066-2.46-2.46 0-1.395 1.065-2.461 2.46-2.461s2.46 1.066 2.46 2.46c0 1.395-1.065 2.461-2.46 2.461z\" fill=\"#FFF\" fillrule=\"nonzero\"></path></g></svg>");

        if(tour_on == 1 || typeof tour_on == "undefined"){
             // Define the tour!
            var tour = {
                id: "my-intro",
                steps: [
                    {
                        target: "order_document1",
                        title: "{{ __('v-index-text1') }}",
                        content: "{{ __('v-index-text2') }}",
                        placement: 'bottom',
                        yOffset: 10
                    },
                    {
                        target: 'drag-drop-area',
                        title: "{{ __('v-index-text3') }}",
                        content: "1- {{ __('v-index-text4') }} <br> 2- {{ __('v-index-text5') }} <br> 3- {{ __('v-index-text3') }}",
                        placement: 'top',
                        zindex: 9999
                    }
                ],
                showPrevButton: true
            };

            // Start the tour!
            hopscotch.startTour(tour);
        }

        if ($("input.date-field").length/* && jQuery().datepicker*/){
            $("input.date-field").each(function(){
                var _this = $(this);
                _this.bootstrapMaterialDatePicker({
                    weekStart: 0,
                    time: false,
                    format: _this.data("format") ? _this.data("format") : "YYYY-MM-DD",
                    minDate:  _this.data("min-date") ? new Date(_this.data("min-date")) : null,
                    maxDate:  _this.data("max-date") ? new Date(_this.data("max-date")) : null
                }).on("change", function(e, date){
                    var end = $(this).parent().next().find("input.date-field:first");
                    if (end.length) end.bootstrapMaterialDatePicker("setMinDate", date);
                });
            });
        }


    });

    function ajax_get_data(url, contry, state = '', select_id, spinner, name){
        disabled_on(spinner);
        $.ajax({
            url: '/'+url+'/'+contry+'/'+state,
            method: "get",
            success: function (r) {
                if(typeof r.status != 'undefined' && r.status == false){
                    $.NotificationApp.send("Error notice!", r.message, 'top-right', '#bf441d', 'error');
                    disabled_off(spinner);
                }else{
                    let data = JSON.parse(r.data);
                    data = data.results;
                    let html = "";
                    html += "<option value=''>-- "+name+" --</option>";
                    data.forEach(function(value, index){
                        html += "<option value='"+value.id+"'>"+value.text+"</option>"
                    });
                    if(spinner === "#spinner_country"){
                        $("#selectize-select").html("<option value=''>-- City --</option>");
                    }
                    $(select_id).html(html);
                    disabled_off(spinner);
                }
            },
            complete: function(r){
                if(r.status === 400){
                    $.NotificationApp.send("Error notice!", "An error has occurred in communication with SmartCredit®, please try again", 'top-right', '#bf441d', 'error');
                }
                disabled_off(spinner);
            }
        });
    }

    function disabled_on(spinner){
        $(".select2-selection__arrow").addClass("d-none");
        $(spinner).html('<span class="spinner-border spinner-border-sm" role="status" style="position: absolute; right: 20px; top: 42px;"></span> ');
        $("#contact-address_country").attr('disabled', 'disabled');
        $("#contact-address_state").attr('disabled', 'disabled');
        $("#selectize-select").attr('disabled', 'disabled');
        $("#zip_code").attr('disabled', 'disabled');
    }
    function disabled_off(spinner){
        $(".select2-selection__arrow").addClass("d-none");
        $(spinner).html('');
        $("#contact-address_country").removeAttr('disabled');
        $("#contact-address_state").removeAttr('disabled');
        $("#selectize-select").removeAttr('disabled');
        $("#zip_code").removeAttr('disabled');
    }
</script>
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f4498fe1e7ade5df443a404/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
@if(session("error"))
    <script>
        $(function(){
            $.NotificationApp.send("Answer Incorrect!", 'The selected answers are incorrect ', 'top-right', '#bf441d', 'error');
        });
    </script>
@endif
</body>

</html>
