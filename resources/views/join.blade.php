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

    <style>
        .animation_boton {
            animation: pulse-boton  1s infinite;
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
                <ul class="list-inline social-links mb-0">
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
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <img src="/images/logo.svg" alt="" class="img-fluid" style="max-width: 750px;">
                <p class="text-center">Credito786 in partnership with SmartCredit®
                    sponsor your monthly subscription.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-3">
                <button type="button" class="btn btn-lg btn-primary waves-effect waves-light" style="width: 100%; border: transparent; border-radius: 33px;" data-bs-toggle="modal" data-bs-target="#login-modal">You want to continue where you left off. Request instructions here <i class="mdi mdi-arrow-right ms-1 animation_boton"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-justified form-wizard-header mb-3" style="margin-top: 30px;">
                            <li class="nav-item">
                                <a href="" id="register" data-bs-toggle="tab" data-toggle="tab" class="active-form active" style="border-left: 1px solid #1abc9c; border-radius: 5px 0px 0px 5px;">
                                    <span class="number">1</span>
                                    <span class="d-none d-sm-inline">Register</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" id="verify" data-bs-toggle="tab" data-toggle="tab" class="@if(isset($customer['number_form']) && $customer['number_form'] == '2') active-form @endif @if(isset($customer['number_form']) && $customer['number_form'] > '2') complete-form @endif">
                                    <span class="number">2</span>
                                    <span class="d-none d-sm-inline">Verify Identity</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" id="questions" data-bs-toggle="tab" data-toggle="tab" class="@if(isset($customer['number_form']) && $customer['number_form'] == '3') active-form @endif @if(isset($customer['number_form']) && $customer['number_form'] > '3') complete-form @endif">
                                    <span class="number">3</span>
                                    <span class="d-none d-sm-inline">Identity Questions</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" id="completed" data-bs-toggle="tab" data-toggle="tab" class="@if(isset($customer['number_form']) && $customer['number_form'] == '4') active-form @endif @if(isset($customer['number_form']) && $customer['number_form'] > '4') complete-form @endif">
                                    <span class="number">4</span>
                                    <span class="d-none d-sm-inline">Complete</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" id="finish" data-bs-toggle="tab" data-toggle="tab" class="@if(isset($customer['number_form']) && $customer['number_form'] == '5') complete-form @endif @if(isset($customer['number_form']) && $customer['number_form'] > '5') complete-form @endif" @if(isset($customer['number_form']) && $customer['number_form'] == '5') style="border-right: 1px solid #1abc9c; border-radius: 0px 5px 5px 0px;"@endif>
                                    <span class="number">5</span>
                                    <span class="d-none d-sm-inline">Finish</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content b-0 pt-0 mb-0">

                            <div class="tab-pane show active" id="register-2">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="POST" id="form" name="form">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="validationCustom01" class="form-label">First name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="validationCustom01" placeholder="Enter first name" name="first_name" value="{{old('first_name')}}">
                                                <span class="invalid-feedback" id="first_name" role="alert">
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="validationCustom02" class="form-label">Last name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="validationCustom02" placeholder="Enter last name"  name="last_name" value="{{old('last_name')}}">
                                                <span class="invalid-feedback" id="last_name" role="alert">
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailAddress" class="form-label">Email address<span class="text-danger">*</span></label>
                                                <input type="email" name="email" parsley-trigger="change" placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" id="emailAddress" value="{{old('email')}}">
                                                <span class="invalid-feedback" id="email" role="alert">
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Phone<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter Phone" name="phone" value="{{old('phone')}}" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                                <span class="form-text">e.g "(xxx) xxx-xxxx"</span>
                                                <span class="invalid-feedback" id="phone" role="alert">
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pass1" class="form-label">Password<span class="text-danger">*</span></label>
                                                <input id="pass1" type="password" placeholder="Enter Password" name="password" value="{{old('password')}}"  class="form-control @error('password') is-invalid @enderror">
                                                <span class="invalid-feedback" id="password" role="alert">
                                                </span>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Plan<span class="text-danger">*</span></label> <br/>
                                                <select id="selectize-select" name="plan" class="form-control @error('plan') is-invalid @enderror">
                                                    <option data-display="Select"></option>
                                                    <option data-display="Select">BASIC</option>
                                                </select>
                                                <span class="invalid-feedback" id="plan" role="alert">
                                                </span>
                                            </div>
                                            <ul class="pager wizard mb-0 list-inline text-end mt-2">
                                                <li class="next list-inline-item">
                                                    <input type="hidden" name="tracking_token" value="" id="tracking_token">
                                                    <input type="hidden" name="customer_token" value="" id="customer_token">
                                                    <button type="button" class="btn btn-success" id="btn-new-customer">Add More Info <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </li>
                                            </ul>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->


                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane" id="verify-tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="position-relative mb-3">
                                            <label for="validationTooltip03" class="form-label">City<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="validationTooltip03" placeholder="Enter city" name="city" value="{{old('city')}}" >

                                            <span class="invalid-feedback" id="city" role="alert">
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">State<span class="text-danger">*</span></label> <br/>
                                            <select id="selectize-select" name="state" class="form-control @error('state') is-invalid @enderror">
                                                <option value="AL">Alabama (AL)</option>
                                                <option value="AK">Alaska (AK)</option>
                                                <option value="AZ">Arizona (AZ)</option>
                                                <option value="AR">Arkansas (AR)</option>
                                                <option value="CA">California (CA)</option>
                                                <option value="CO">Colorado (CO)</option>
                                                <option value="CT">Connecticut (CT)</option>
                                                <option value="DE">Delaware (DE)</option>
                                                <option value="DC">District Of Columbia (DC)</option>
                                                <option value="FL">Florida (FL)</option>
                                                <option value="GA">Georgia (GA)</option>
                                                <option value="HI">Hawaii (HI)</option>
                                                <option value="ID">Idaho (ID)</option>
                                                <option value="IL">Illinois (IL)</option>
                                                <option value="IN">Indiana (IN)</option>
                                                <option value="IA">Iowa (IA)</option>
                                                <option value="KS">Kansas (KS)</option>
                                                <option value="KY">Kentucky (KY)</option>
                                                <option value="LA">Louisiana (LA)</option>
                                                <option value="ME">Maine (ME)</option>
                                                <option value="MD">Maryland (MD)</option>
                                                <option value="MA">Massachusetts (MA)</option>
                                                <option value="MI">Michigan (MI)</option>
                                                <option value="MN">Minnesota (MN)</option>
                                                <option value="MS">Mississippi (MS)</option>
                                                <option value="MO">Missouri (MO)</option>
                                                <option value="MT">Montana (MT)</option>
                                                <option value="NE">Nebraska (NE)</option>
                                                <option value="NV">Nevada (NV)</option>
                                                <option value="NH">New Hampshire (NH)</option>
                                                <option value="NJ">New Jersey (NJ)</option>
                                                <option value="NM">New Mexico (NM)</option>
                                                <option value="NY">New York (NY)</option>
                                                <option value="NC">North Carolina (NC)</option>
                                                <option value="ND">North Dakota (ND)</option>
                                                <option value="OH">Ohio (OH)</option>
                                                <option value="OK">Oklahoma (OK)</option>
                                                <option value="OR">Oregon (OR)</option>
                                                <option value="PA">Pennsylvania (PA)</option>
                                                <option value="RI">Rhode Island (RI)</option>
                                                <option value="SC">South Carolina (SC)</option>
                                                <option value="SD">South Dakota (SD)</option>
                                                <option value="TN">Tennessee (TN)</option>
                                                <option value="TX">Texas (TX)</option>
                                                <option value="UT">Utah (UT)</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <span class="invalid-feedback" id="plan" role="alert">
                                            </span>
                                        </div>
                                        <div class="position-relative mb-3">
                                            <label for="validationTooltip04" class="form-label">Street<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('street') is-invalid @enderror" id="validationTooltip04" placeholder="Enter street" name="street" value="{{old('street')}}" >

                                            <span class="invalid-feedback" id="street" role="alert">
                                            </span>

                                        </div>
                                        <div class="position-relative mb-3">
                                            <label for="validationTooltip04" class="form-label">Street2</label>
                                            <input type="text" class="form-control @error('street2') is-invalid @enderror" id="validationTooltip04" placeholder="Enter street2" name="street2" value="{{old('street2')}}" >

                                            <span class="invalid-feedback" id="street2" role="alert">
                                            </span>

                                        </div>
                                        <div class="position-relative mb-3">
                                            <label for="validationTooltip05" class="form-label">Zip<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('zip') is-invalid @enderror" id="validationTooltip05" data-toggle="input-mask" data-mask-format="00000" maxlength="5" placeholder="Enter zip" name="zip" value="{{old('zip')}}" >
                                            <span class="form-text">e.g "xxxxx"</span>

                                            <span class="invalid-feedback" id="zip" role="alert">
                                            </span>

                                        </div>
                                        <div class="mb-3">
                                            <label for="pass1" class="form-label">Birthday<span class="text-danger">*</span></label>
                                            <div class="input-group position-relative" id="datepicker1">
                                                <input type="text" class="form-control @error('birthday') is-invalid @enderror" name="birthday" data-provide="datepicker" data-date-format="mm/dd/yyyy" data-date-container="#datepicker1">
                                                <span class="input-group-text"><i class="pe-7s-date"></i></span>

                                                <span class="invalid-feedback" id="birthday" role="alert">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pass1" class="form-label">SSN<span class="text-danger">*</span></label>
                                            <input id="pass1" type="text" placeholder="Enter ssn" name="ssn" value="{{old('ssn')}}" data-toggle="input-mask" data-mask-format="000-00-0000"  class="form-control @error('ssn') is-invalid @enderror">
                                            <span class="form-text">e.g "xxx-xx-xxxx"</span>
                                            <span class="invalid-feedback" id="ssn" role="alert">
                                                </span>
                                        </div>
                                        <ul class="pager wizard mb-0 list-inline text-end mt-2">
                                            <li class="next list-inline-item">
                                                <button type="submit" class="btn btn-success" id="btn-verify">Add More Info <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </li>
                                        </ul>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                            <div class="tab-pane {{isset($customer['number_form']) && $customer['number_form'] == '3' ? 'show active': ''}}" id="questions-tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        <h2>Complete The Identity Questions Below<span class="text-danger">*</span></h2>
                                        <p style="margin: -10px 0 0 0;">This step is for you protection & required to view your Credit Report & Score</p>
                                        <div class="row" id="questions-content">
                                            <div class="col-12">
                                                <div class="mb-3 mt-3">
                                                    <label for="pass1" id="label_question1" class="form-label @error('answer1') is-invalid @enderror"></label>
                                                    <span class="invalid-feedback" role="alert" id="answer1" style="margin: 0 0 16px 0;">
                                                            <strong></strong>
                                                        </span>
                                                    <div style="margin: 0 0 0 15px" id="content_answer1">

                                                    </div>
                                                </div>
                                                <div class="mb-3 mt-3">
                                                    <label for="pass1" id="label_question2" class="form-label @error('answer2') is-invalid @enderror"></label>
                                                    <span class="invalid-feedback" role="alert" id="answer2" style="margin: 0 0 16px 0;">
                                                        <strong></strong>
                                                    </span>
                                                    <div style="margin: 0 0 0 15px" id="content_answer2">

                                                    </div>
                                                </div>
                                                <div class="mb-3 mt-3">
                                                    <label for="pass1" id="label_question3" class="form-label @error('answer3') is-invalid @enderror"></label>
                                                    <span class="invalid-feedback" role="alert" id="answer3" style="margin: 0 0 16px 0;">
                                                        <strong></strong>
                                                    </span>
                                                    <div style="margin: 0 0 0 15px" id="content_answer3">

                                                    </div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="pass1" id="label_question4" class="form-label @error('answer4') is-invalid @enderror"></label>
                                                    <span class="invalid-feedback" role="alert" id="answer5" style="margin: 0 0 16px 0;">
                                                        <strong></strong>
                                                    </span>
                                                    <div style="margin: 0 0 0 15px" id="content_answer4">

                                                    </div>
                                                </div>

                                                <div class="mb-3 mt-3">
                                                    <label for="pass1" id="label_question5" class="form-label @error('answer5') is-invalid @enderror"></label>
                                                    <span class="invalid-feedback" role="alert" id="answer5" style="margin: 0 0 16px 0;">
                                                        <strong></strong>
                                                    </span>
                                                    <div style="margin: 0 0 0 15px" id="content_answer5">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="spinner-border spinner-border-sm spinner-content d-none" role="status"></span>
                                        <ul class="pager wizard mb-0 list-inline mt-2">
                                            <li class="next list-inline-item float-end">
                                                <input type="hidden" value="{{$questions->idVerificationCriteria->referenceNumber ?? ''}}" name="referenceNumber">
                                                <input type="hidden" value="{{$customer['id'] ?? ''}}" name="idcustomer">
                                                <button type="submit" class="btn btn-success" id="btn-questions">Add More Info <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </li>
                                        </ul>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->


                            </div>

                            <div class="tab-pane {{isset($customer['number_form']) && $customer['number_form'] == '4' ? 'show active': ''}}" id="completed-2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card shadow-md shadow-lg mt-2 my-md-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 hidden-xs hidden-sm">
                                                        <div class="feature-list text-white pb-3">
                                                            <div class="membership-title p-4">
                                                                <h3 class="m-0">Membership Benefits</h3>
                                                            </div>
                                                            <div class="px-4 py-1 mem-md-2x mem-lg-2x">
                                                                <h5 class="">SmartCredit® Report<sup>®</sup> &amp; Scores</h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">ScoreTracker</h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">ScoreBuilder<sup>®</sup></h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">ScoreBoost<sup>®</sup></h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">Actions</h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">
                                                                    Credit Monitoring
                                                                </h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">Money Manager</h5>
                                                            </div>
                                                            <div class="px-4 py-1">
                                                                <h5 class="">3B Report &amp; Scores</h5>
                                                            </div>
                                                            <div class="px-4 py-1 mem-md-2x mem-lg-2x">
                                                                <h5 class="">$1MM ID Fraud Insurance</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="text-center mb-3 description">
                                                            <div class="membership-title membership-plan-title py-4">
                                                                <h3 class="plan-name m-0" title="Basic">Basic</h3>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <span class="h4">The SmartCredit® subscription fee is included in your Credito786 membership</span>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <div class="py-1 mem-md-2x mem-lg-2x">
                                                                <h5 class="">2 /mo updates</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">Unlimited</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">Unlimited</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">Unlimited</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">5 /mo</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">Unlimited</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">Unlimited</h5>
                                                            </div>
                                                            <div class="py-1">
                                                                <h5 class="">
                                                                    A La Carte</h5>
                                                            </div>
                                                            <div class="py-1 mem-md-2x mem-lg-2x">
                                                                <h5 class="">
                                                                    Included*<br>Activation Required</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card shadow-md shadow-lg mt-2 my-md-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div id="form-terms-conditions-iframe">
                                                            <h3>About our Product &amp; Terms</h3>
                                                            <div id="page-body-content-form-terms-conditions-iframe-container" class="iframe-scroller">
                                                                <iframe src="https://www.smartcredit.com/help/terms-and-privacy/service-agreement.htm?isWindowed=true&amp;isFramed=true" name="iframe" scrolling="auto" id="iframe" class="terms-iframe" width="99%" height="400px">
                                                                    <div align="center">Sorry your browser does not support i-frames which are required to view this site.  Please try upgrading to a newer browser. </div>
                                                                </iframe>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="accept_term" value="1" id="invalidCheck" >
                                                <label class="form-check-label" for="invalidCheck">
                                                    I have read, agree to and accept
                                                    all the Terms, Conditions & Rights
                                                    of my Membership.
                                                </label>
                                                <span class="invalid-feedback" id="accept_term" role="alert">
                                                                </span>

                                            </div>
                                        </div>
                                        <ul class="pager wizard mb-0 list-inline mt-2">
                                            <li class="next list-inline-item float-end">
                                                <input type="hidden" value="{{$customer['id'] ?? ''}}" name="idcustomer">
                                                <button type="button" class="btn btn-success" id="btn-completed">Add More Info <i class="mdi mdi-arrow-right ms-1"></i></button>
                                            </li>
                                        </ul>
                                        </form>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane {{isset($customer['number_form']) && $customer['number_form'] == '5' ? 'show active': ''}}" id="finish-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h2 class="mt-0" style="color: #1abc9c;"><i class="mdi mdi-check-all"></i></h2>
                                            <h1 class="mt-0">Welcome to your membership!</h1>
                                            <p>Log in now to view your credit report and scores.</p>
                                        </div>
                                        <div class="row table-result">
                                            <div class="col-md-6">
                                                <h3>Your Account:</h3>
                                                <h4 id="data_name">{{$customer['first_name'] ?? ''}} {{$customer['last_name'] ?? ''}}</h4>
                                                <p id="data_street">{{$customer['street'] ?? ''}}<br>{{$customer['city'] ?? ''}}, {{$customer['state'] ?? ''}} {{$customer['zip'] ?? ''}}</p>

                                                <h4>User name</h4>
                                                <p id="data_email">{{$customer['email'] ?? ''}}</p>
                                                <h4 style="margin: -8px 0 8px 0;">Membership type</h4>
                                                <p id="data_plan">{{$customer['plan'] ?? ''}}</p>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <a href="https://stage-sc.consumerdirect.com/login/" class="btn btn-primary" style="width: 232px; border-radius: 38px; margin: 101px 0 0 0;">Log in >></a>
                                            </div>
                                        </div>

                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div>

                        </div> <!-- tab-content -->


                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>

    </div>
    <!-- end container -->
</section>



<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <a href="index.html" class="text-success">
                        <span><img src="/images/credito786-logo.png" alt="" style="width: 222px;"></span>
                    </a>
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
                                        <label for="emailaddress1" class="form-label">Email address</label>
                                        <input class="form-control" type="email" name="email_token" placeholder="Eg: john@deo.com">
                                        <span class="invalid-feedback" id="email_token" role="alert">
                                        </span>
                                    </div>
                                    <div class="mb-3 text-center">
                                        <button class="btn btn-rounded btn-primary" id="sign_in" style="width: 100%" type="button">Sign In</button>
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
                                            <h1 class="mt-0">Update Token successfully!!</h1>
                                            <p>An email has been sent to your mailbox with updated information to continue your registration in the form.<br> Thank you for choosing us</p>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="document-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-body">
            <div class="container">
                @include('uppy')
            </div>
        </div>
      </div>
    </div>
</div>

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
    $( document ).ready(function() {
        let number_form = "{{ $customer['number_form'] ?? 1}}";
        let tracking_token = "{{ $customer['tracking_token'] ?? '' }}";
        let customer_token = "{{ $customer['customer_token'] ?? '' }}";
        if(number_form != '1'){
            $.cookie('step', number_form);
            $.cookie('tracking_token', tracking_token);
            $.cookie('customer_token', customer_token);
        }else{
            number_form = $.cookie('step');
        }
        step(number_form);

        $("[name='first_name']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='last_name']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='email']").on('change', function () {
            var value = $(this).val();
            if(value.indexOf('@', 0) == -1 || value.indexOf('.', 0) == -1){
                $(this).addClass('is-invalid');
            }else if(value == ''){
                $(this).removeClass('is-invalid');
            }else{
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
        });
        $("[name='phone']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='password']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='plan']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='ssn']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='accept_term']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='city']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='state']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='street']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='zip']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });
        $("[name='birthday']").on('change', function () {
            var value = $(this).val();
            if(value != ''){
                $(this).addClass('is-valid');
            }else{
                $(this).removeClass('is-valid');
            }
        });

        $(".scroll-section").on('click', function (e) {
            $('html, body').animate({
                scrollTop: $("#form-seccion").offset().top
            }, 200);
        });

        $(".uppy-StatusBar-actionBtn").on("click", function() {
            $("#document-modal").modal('hide');
        });

        $("#btn-new-customer").on('click', function (e) {
            var idform = document.getElementById("form");
            var form = new FormData(document.forms.namedItem("form"));
            console.log(form);
            var btn_save = $('#btn-new-customer').html();
            $('.form-control').attr('disabled', 'disabled');
            $('.btn').attr('disabled', 'disabled');
            $('#btn-new-customer').html('<span class="spinner-border spinner-border-sm" role="status"></span>');
            $.ajax({
                url: '/save-register',
                method: "post",
                contentType: false,
                cache: false,
                processData:false,
                data: form,
                success: function (r) {
                    if(r.error){
                        $('.form-control').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        if(r.code === 'INVALID_WHITE_LIST'){
                            $("[name=email]").addClass('is-invalid');
                            $("#email").html('<strong>This email is not authorized to register on this form. For more information and to achieve your registration contact us at this number  <a href="tel:+18667164225">+1 866-716-4225</a></strong>');
                        }else{
                            r.message.forEach(function(value, index) {
                                if(value.code === 'EMAIL_USED'){
                                    $("[name=email]").addClass('is-invalid');
                                    $("#email").html('<strong>An account already exists with the email you entered. Please <a href="https://stage-sc.consumerdirect.com/login/">login</a> to activate your new offer.</strong>');
                                }else{
                                    $.NotificationApp.send("Error notice!", value.message, 'top-right', '#bf441d', 'error');
                                }
                            });
                        }
                    }else{
                        $('.form-control').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        number_form++;
                        $.cookie('step', '2');
                        $.cookie('tracking_token', r.message.tracking_token);
                        $.cookie('customer_token', r.message.customer_token);
                        $('#tracking_token').val(r.message.tracking_token);
                        $('#customer_token').val(r.message.customer_token);
                        $('#btn-new-customer').html(btn_save);
                        $('#register').addClass('complete-form');
                        $('#register').removeClass('active-form');
                        $('#verify').addClass('active-form');
                        $('#register-2').removeClass('show active');
                        $('#verify-tab-2').addClass('show active');
                        $('html, body').animate({
                            scrollTop: $("#form-seccion").offset().top
                        }, 200);
                    }
                },
                complete: function(r){
                    $('.form-control').removeAttr('disabled');
                    $('.btn').removeAttr('disabled');
                    if(r.status === 400){
                        $.NotificationApp.send("Error notice!", "An error has occurred in communication with SmartCredit®, please try again", 'top-right', '#bf441d', 'error');
                    }
                    $('#btn-new-customer').html(btn_save);
                    if(r.responseJSON){
                        $.each( r.responseJSON.errors, function( key, value ) {
                            $("[name="+key+"]").addClass('is-invalid');
                            $("#"+key+"").html('<strong>'+value+'</strong>');
                        });
                    }
                }
            });
        });

        $("#btn-verify").on('click', function (e) {
            e.preventDefault();
            var idform = document.getElementById("form");
            var form = new FormData(document.forms.namedItem("form"));
            var btn_save = $('#btn-verify').html();
            $('.form-control').attr('disabled', 'disabled');
            $('.btn').attr('disabled', 'disabled');
            $('#btn-verify').html('<span class="spinner-border spinner-border-sm" role="status"></span>');
            $.ajax({
                url: '/save-identity',
                method: "post",
                contentType: false,
                cache: false,
                processData:false,
                data: form,
                success: function (r) {
                    if(r.error){
                        $('.form-control').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        r.message.forEach(function(value, index) {
                            if(value.field){
                                var arrayDeCadenas = value.field.split('.');
                                if(arrayDeCadenas[1] === 'birthDate') {
                                    arrayDeCadenas[1] = 'birthday';
                                }
                                $("[name="+arrayDeCadenas[1]+"]").addClass('is-invalid');
                                $("#"+arrayDeCadenas[1]+"").html('<strong>'+value.message+'</strong>');
                            }
                            if(value.code === 400){
                                $.NotificationApp.send("Error notice!", "An error has occurred in communication with SmartCredit®, please try again", 'top-right', '#bf441d', 'error');
                            }
                        });
                    }else{
                        number_form++;
                        $.cookie('step', '3');
                        $('#btn-verify').html(btn_save);
                        $('#verify').addClass('complete-form');
                        $('#verify').removeClass('active-form');
                        $('#questions').addClass('active-form');
                        $('#verify-tab-2').removeClass('show active');
                        $('#questions-tab-2').addClass('show active');
                        $("[name=idcustomer]").val(r.data.id);
                        $('html, body').animate({
                            scrollTop: $("#form-seccion").offset().top
                        }, 200);
                        $('.form-control').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        get_questions();
                    }
                },
                complete: function(r){
                    $('.form-control').removeAttr('disabled');
                    $('.btn').removeAttr('disabled');
                    if(r.status === 400){
                        $.NotificationApp.send("Error notice!", "An error has occurred in communication with SmartCredit®, please try again", 'top-right', '#bf441d', 'error');
                    }
                    $('#btn-verify').html(btn_save);
                    if(r.responseJSON){
                        $.each( r.responseJSON.errors, function( key, value ) {
                            $("[name="+key+"]").addClass('is-invalid');
                            $("#"+key+"").html('<strong>'+value+'</strong>');
                        });
                    }
                }
            });
        });

        $("#btn-questions").on('click', function (e) {

            e.preventDefault();
            var form = new FormData(document.forms.namedItem("form"));
            var btn_save = $('#btn-questions').html();
            var data = {"_token": $('[name=_token]').val(),
                "idcustomer": $('[name=idcustomer]').val(),
                "referenceNumber": $('[name=referenceNumber]').val(),
            };

            if ($('[name=answer1]:checked').length){
                data["answer1"] = $('[name=answer1]:checked').val();
            }
            if ($('[name=answer2]:checked').length){
                data["answer2"] = $('[name=answer2]:checked').val();
            }
            if ($('[name=answer3]:checked').length){
                data["answer3"] = $('[name=answer3]:checked').val();
            }
            if ($('[name=answer4]:checked').length){
                data["answer4"] = $('[name=answer4]:checked').val();
            }
            if ($('[name=answer5]:checked').length){
                data["answer5"] = $('[name=answer5]:checked').val();
            }

            $('.form-check-input').attr('disabled', 'disabled');
            $('.btn').attr('disabled', 'disabled');
            $('#btn-questions').html('<span class="spinner-border spinner-border-sm" role="status"></span>');
            $.ajax({
                url: '/validate-questions',
                method: "post",
                data: data,
                success: function (r) {
                    if(typeof r.error != 'undefined' && r.error == true){
                        $('.form-check-input').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        if (typeof r.message.errors !='undefined'){
                            r.message.errors.forEach(function(value, index) {
                                var _message = "";
                                if (typeof value.message != 'undefined'){
                                    _message = value.message;
                                }
                                $.NotificationApp.send("Error notice!", _message, 'top-right', '#bf441d', 'error');
                            });
                        }
                    }else{
                        number_form++;
                        $.cookie('step', '4');
                        $('#btn-questions').html(btn_save);
                        $('#questions').removeClass('active-form');
                        $('#questions').addClass('complete-form');
                        $('#completed').addClass('active-form');
                        $('#questions-tab-2').removeClass('show active');
                        $('#completed-2').addClass('show active');
                        $("[name=idcustomer]").val(r.data.id);
                        $('html, body').animate({
                            scrollTop: $("#form-seccion").offset().top
                        }, 200);
                        $('.form-check-input').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                    }
                },
                complete: function(r){
                    $('.form-check-input').removeAttr('disabled');
                    $('.btn').removeAttr('disabled');
                    if(r.status === 400){
                        $.NotificationApp.send("Error notice!", "An error has occurred in communication with SmartCredit®, please try again", 'top-right', '#bf441d', 'error');
                    }
                    $('#btn-questions').html(btn_save);
                    if(typeof r.responseJSON.errors !='undefined' && r.responseJSON == true){
                        $.each( r.responseJSON.errors, function( key, value ) {
                            $("[name="+key+"]").addClass('is-invalid');
                            $("#"+key+"").html('<strong>'+value+'</strong>');
                        });
                    }
                }
            });
        });

        $("#btn-completed").on('click', function (e) {

            e.preventDefault();
            var form = new FormData(document.forms.namedItem("form"));
            var btn_save = $('#btn-completed').html();
            $('.form-check-input').attr('disabled', 'disabled');
            $('.btn').attr('disabled', 'disabled');
            $('#btn-completed').html('<span class="spinner-border spinner-border-sm" role="status"></span>');
            $.ajax({
                url: '/save-completed',
                method: "post",
                contentType: false,
                cache: false,
                processData:false,
                data: form,
                success: function (r) {
                    if(r.error){
                        $('.form-check-input').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                    }else{
                        $('.form-control').removeAttr('disabled');
                        $('.btn').removeAttr('disabled');
                        number_form++;
                        $.cookie('step', '5');
                        $('#btn-completed').html(btn_save);
                        $('#completed').removeClass('active-form');
                        $('#completed').addClass('complete-form');
                        $('#finish').addClass('active-form');
                        $('#completed-2').removeClass('show active');
                        $("#document-modal").modal('show');
                        $('#finish-2').addClass('show active');
                        $("#document-modal").modal('show',{
                            backdrop: 'static',
                            keyboard: false,
                            escapeClose: false,
                            clickClose: false
                        });
                        $("[name=idcustomer]").val(r.data.id);
                        $('#data_name').html(r.data.first_name+' '+r.data.last_name);
                        $('#data_street').html(r.data.street+'<br>'+r.data.city+', '+r.data.state+' '+r.data.zip);
                        $('#data_email').html(r.data.email);
                        $('#data_plan').html(r.data.plan);
                        $('html, body').animate({
                            scrollTop: $("#form-seccion").offset().top
                        }, 200);
                    }
                },
                complete: function(r){
                    $('.form-check-input').removeAttr('disabled');
                    $('.btn').removeAttr('disabled');
                    if(r.status === 400){
                        $.NotificationApp.send("Error notice!", "An error has occurred in communication with SmartCredit®, please try again", 'top-right', '#bf441d', 'error');
                    }
                    $('#btn-completed').html(btn_save);
                    if(r.responseJSON){
                        $.each( r.responseJSON.errors, function( key, value ) {
                            $("[name="+key+"]").addClass('is-invalid');
                            $("#"+key+"").html('<strong>'+value+'</strong>');
                        });
                    }
                }
            });
        });

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
                        $.NotificationApp.send("Error notice!", r.message, 'top-right', '#bf441d', 'error');
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
                        $.NotificationApp.send("Error notice!", 'Email customer not found', 'top-right', '#bf441d', 'error');
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

        function step(number_form) {
            if(number_form === '2' && $.cookie('step') === '2' && $.cookie('customer_token') && $.cookie('tracking_token')){
                $('#register').addClass('complete-form');
                $('#register').removeClass('active-form');
                $('#verify').addClass('active-form');
                $('#register-2').removeClass('show active');
                $('#verify-tab-2').addClass('show active');
            }
            if(number_form === '3' && $.cookie('step') === '3' && $.cookie('customer_token') && $.cookie('tracking_token')) {
                $('#register').removeClass('active-form');
                $('#register').addClass('complete-form');
                $('#verify').addClass('complete-form');
                $('#questions').addClass('active-form');
                $('#register-2').removeClass('show active');
                $('#verify-tab-2').removeClass('show active');
                $('#questions-tab-2').addClass('show active');
                get_questions();
            }
            if(number_form === '4' && $.cookie('step') === '4'  && $.cookie('customer_token') && $.cookie('tracking_token')){
                $('#register').removeClass('active-form');
                $('#register').addClass('complete-form');
                $('#verify').addClass('complete-form');
                $('#questions').addClass('complete-form');
                $('#completed').addClass('active-form');
                $('#register-2').removeClass('show active');
                $('#verify-tab-2').removeClass('show active');
                $('#questions-tab-2').removeClass('show active');
                $('#completed-2').addClass('show active');
            }
            if(number_form === '5' && $.cookie('step') === '5'  && $.cookie('customer_token') && $.cookie('tracking_token')){
                $('#register').removeClass('active-form');
                $('#register').addClass('complete-form');
                $('#verify').addClass('complete-form');
                $('#questions').addClass('complete-form');
                $('#completed').addClass('complete-form');
                $('#finish').addClass('active-form');
                $("#document-modal").modal('show');
                $("#document-modal").modal('show',{
                    backdrop: 'static',
                    keyboard: false,
                    escapeClose: false,
                    clickClose: false
                });
                $('body').addClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                $('body').removeClass('rest_overflow');//eliminamos la clase del body para poder hacer scroll
                $('.modal-backdrop').removeClass('d-none');//eliminamos el backdrop del modal
                $('#register-2').removeClass('show active');
                $('#verify-tab-2').removeClass('show active');
                $('#questions-tab-2').removeClass('show active');
                $('#completed-2').removeClass('show active');
                $('#finish-2').addClass('show active');
                get_customer();
            }
            if(number_form === '6' && $.cookie('step') === '6'  && $.cookie('customer_token') && $.cookie('tracking_token')){
                $('#register').removeClass('active-form');
                $('#register').addClass('complete-form');
                $('#verify').addClass('complete-form');
                $('#questions').addClass('complete-form');
                $('#completed').addClass('complete-form');
                $('#finish').addClass('active-form');
                $('#register-2').removeClass('show active');
                $('#verify-tab-2').removeClass('show active');
                $('#questions-tab-2').removeClass('show active');
                $('#completed-2').removeClass('show active');
                $('#finish-2').addClass('show active');
                get_customer();
            }
        }

        function get_customer() {
            $.ajax({
                url: '/finish',
                method: "get",
                success: function (r) {
                    if(r.error){
                        $('#register').addClass('active-form');
                        $('#register').removeClass('complete-form');
                        $('#verify').removeClass('complete-form');
                        $('#questions').removeClass('complete-form');
                        $('#completed').removeClass('complete-form');
                        $('#finish').removeClass('active-form');
                        $('#register-2').addClass('show active');
                        $('#verify-tab-2').removeClass('show active');
                        $('#questions-tab-2').removeClass('show active');
                        $('#completed-2').removeClass('show active');
                        $('#finish-2').removeClass('show active');
                    }else{
                        $('#data_name').html(r.data.first_name+' '+r.data.last_name);
                        $('#data_street').html(r.data.street+'<br>'+r.data.city+', '+r.data.state+' '+r.data.zip);
                        $('#data_email').html(r.data.email);
                        $('#data_email_document').val(r.data.email);
                        $('#data_plan').html(r.data.plan);
                    }
                },
                complete: function(r){

                }
            });
        }


        function get_questions() {
            $('.spinner-content').removeClass('d-none');
            $('#questions-content').addClass('d-none');
            $.ajax({
                url: '/questions-reference',
                method: "get",
                contentType: false,
                cache: false,
                processData:false,
                success: function (r) {
                    $('.spinner-content').addClass('d-none');
                    $('#questions-content').removeClass('d-none');
                    if(typeof r.error != 'undefined' && r.error){
                        if (typeof r.message.errors !='undefined'){
                            r.message.errors.forEach(function(value, index) {
                                var _message = "";
                                if (typeof value.message != 'undefined'){
                                    _message = value.message;
                                }
                                $.NotificationApp.send("Error notice!", _message, 'top-right', '#bf441d', 'error');
                            });
                        }
                    }else{
                        /*Answer 1*/
                        if (typeof r.message.idVerificationCriteria.question1 !== 'undefined'){
                            $('#label_question1').html(r.message.idVerificationCriteria.question1.displayName);
                            var question1 = r.message.idVerificationCriteria.question1.choiceList.choice;
                            var html1 = '';
                            $.each( question1, function( key, value ) {
                                html1 += '<div class="form-check">\n' +
                                    '                                                     <input class="form-check-input" type="radio" name="answer1" value="'+value.key+'" id="flexRadioDefault">\n' +
                                    '                                                     <label class="form-check-label" for="flexRadioDefault">\n' +
                                    value.display+
                                    '                                                     </label>\n' +
                                    '                                               </div>'
                            });
                            $("#content_answer1").html(html1);
                        }

                        /*Answer 2*/
                        if (typeof r.message.idVerificationCriteria.question2 !== 'undefined') {
                            $('#label_question2').html(r.message.idVerificationCriteria.question2.displayName);
                            var question2 = r.message.idVerificationCriteria.question2.choiceList.choice;
                            var html2 = '';
                            $.each(question2, function (key, value) {
                                html2 += '<div class="form-check">\n' +
                                    '                                                     <input class="form-check-input" type="radio" name="answer2" value="' + value.key + '" id="flexRadioDefault">\n' +
                                    '                                                     <label class="form-check-label" for="flexRadioDefault">\n' +
                                    value.display +
                                    '                                                     </label>\n' +
                                    '                                               </div>'
                            });
                            $("#content_answer2").html(html2);
                        }

                        /*Answer 3*/
                        if (typeof r.message.idVerificationCriteria.question3 !== 'undefined') {
                            $('#label_question3').html(r.message.idVerificationCriteria.question3.displayName);
                            var question3 = r.message.idVerificationCriteria.question3.choiceList.choice;
                            var html3 = '';
                            $.each(question3, function (key, value) {
                                html3 += '<div class="form-check">\n' +
                                    '                                                     <input class="form-check-input" type="radio" name="answer3" value="' + value.key + '" id="flexRadioDefault">\n' +
                                    '                                                     <label class="form-check-label" for="flexRadioDefault">\n' +
                                    value.display +
                                    '                                                     </label>\n' +
                                    '                                               </div>'
                            });
                            $("#content_answer3").html(html3);
                        }

                        /*Answer 4*/
                        if (typeof r.message.idVerificationCriteria.question4 !== 'undefined') {
                            $('#label_question4').html(r.message.idVerificationCriteria.question4.displayName);
                            var question4 = r.message.idVerificationCriteria.question4.choiceList.choice;
                            var html4 = '';
                            $.each(question4, function (key, value) {
                                html4 += '<div class="form-check">\n' +
                                    '                                                     <input class="form-check-input" type="radio" name="answer4" value="' + value.key + '" id="flexRadioDefault">\n' +
                                    '                                                     <label class="form-check-label" for="flexRadioDefault">\n' +
                                    value.display +
                                    '                                                     </label>\n' +
                                    '                                               </div>'
                            });
                            $("#content_answer4").html(html4);
                        }

                        /*Answer 5*/
                        if (typeof r.message.idVerificationCriteria.question5 !== 'undefined') {
                            $('#label_question5').html(r.message.idVerificationCriteria.question5.displayName);
                            var question5 = r.message.idVerificationCriteria.question5.choiceList.choice;
                            var html5 = '';
                            $.each(question5, function (key, value) {
                                html5 += '<div class="form-check">\n' +
                                    '                                                     <input class="form-check-input" type="radio" name="answer5" value="' + value.key + '" id="flexRadioDefault">\n' +
                                    '                                                     <label class="form-check-label" for="flexRadioDefault">\n' +
                                    value.display +
                                    '                                                     </label>\n' +
                                    '                                               </div>'
                            });
                            $("#content_answer5").html(html5);
                        }


                        $("[name=referenceNumber]").val(r.message.idVerificationCriteria.referenceNumber);
                        $("[name=idcustomer]").val(r.data.id);
                    }
                },
                complete: function(r){
                    if(r.status === 400){
                        $.NotificationApp.send("Error notice!", "Failed to connect to stage-sc.consumerdirect.com", 'top-right', '#bf441d', 'error');
                    }
                }
            });

        }
    });
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
