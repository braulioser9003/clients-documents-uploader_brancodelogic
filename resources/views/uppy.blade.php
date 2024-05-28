
    <style>
        .uppy-Dashboard-inner {
            width: 100% !important;
            height: 400px !important;
        }
        .order_document {
            text-align: center;
            position: absolute;
            top: -32px;
            left: 0;
            right: 0;
            margin: 0 auto;
            font-weight: 700;
            font-size: 22px;
            background-color: rgb(45, 124, 243);
            height: 60px;
            display: inline-block;
            width: 60px;
            line-height: 62px;
            border-radius: 50%;
            color: #fff !important;
            box-shadow: 0px 0px 9px #0f0f0f5e;
        }
        .order_document_check{
            color: #58de84 !important;
            background-color: rgb(253, 255, 255);
            border: 2px solid #58de84;
        }

        .imagen_check {
            border-radius: 9px;
        }
        .imagen_bill {
            width: 100% !important;
            border-radius: 9px;
        }
        .top_seller {
            animation: pulse-seller 3s infinite;
        }
        .uppy-size--xl .uppy-Dashboard-Item {
            height: 223px !important;
            width: 345px !important;
            margin: 0 auto !important;
        }
        .one-document {
            border-radius: 15px !important;
            width: 400px !important;
            margin: 0 auto !important;
            padding: 0 !important;
        }
        .one-document .card {
            padding: 0 !important;
        }
        .one-document img {
            width: 400px !important;
        }
        .uppy-size--xl .uppy-Dashboard-Item-preview {
            height: 220px !important;
        }
        [dir="ltr"] .uppy-size--md .uppy-Dashboard-Item{
            float:initial !important;
        }
        @media screen and (max-width: 768px) {
            #imagen_bill {
                width: 100%;
                height: 100%;
            }
            .imagen_check {
                margin: 0 0 15px 0;
            }
            .one-document {
            border-radius: 15px !important;
            width: 100% !important;
            margin: 0 auto !important;
            padding: 0 !important;
            }
            .one-document .card {
                padding: 0 !important;
            }
            .one-document img {
                width: 100% !important;
            }
            div.hopscotch-bubble {
                left: 0 !important;
                right: 0 !important;
                width: 329px;
                margin: 0 auto !important;
            }
            div.hopscotch-bubble .hopscotch-bubble-arrow-container.up {
                left: 0 !important;
                right: 0 !important;
                margin: 0 auto !important;
            }
            .address_form {
                margin: -668px auto 0 auto !important;
            }
            .drog_img {
                height: 790px !important;
            }
            .address_form_id {
                margin: -411px auto 168px auto !important;
            }
        }
        @media screen and (min-width: 769px) {
            .drog_img {
                height: 750px !important;
            }
        }

        button[aria-controls='uppy-DashboardContent-panel--Webcam'] {
            display: none !important;
        }
        .address_form {
            margin: -396px auto 0 auto;
            width: 100%;
        }
        .address_form_id {
            margin: -200px auto 0 auto;
            width: 100%;
        }

        @keyframes pulse-seller {
            0% {
                transform: scale(1);
                text-shadow: 0 0 0 rgb(17, 13, 13);
            }

            70% {
                transform: scale(1);
                text-shadow: 2px 2px 30px rgba(236, 16, 16, 0);
            }

            100% {
                transform: scale(1);
                text-shadow: 0 0 0 rgba(202, 17, 17, 0);
            }
        }
    </style>
    <link href="/css/uppy.min.css" rel="stylesheet">
    <div class="row" style="margin: 35px 0 35px 0;">
        <div class="col-md-12" style="margin: 0 0 50px 0;">
            <h2 class="text-center" style="text-transform: uppercase;">{{ __("v-uppy-text1") }}</h2>
            <p class="text-center top_seller" style="text-transform: uppercase;"><b>{{ __("v-uppy-text2") }}</b></p>
        </div>
        @foreach ($document as $key => $row)
                <div class="{{ $row["col-md"] }} text-center" id="{{ $row["document_id"] }}">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="card-body">
                            <h4 class="card-title" style="margin: 11px 0 0 0;">{{ $row["title"] ?? "" }}</h4>
                        </div>
                        <img src="{{ $row["src"] }}" id="{{ $row["id_img"] }}" width="100%" height="230px">
                        <h1 class="order_document {{ $row["order_document"] }}" id="order_document{{ $row["number"]  ?? '' }}">{!! $row["span"] !!}</h1>
                    </div>
                </div>
        @endforeach
    </div>
    <div id="drag-drop-area" class="{{ $upload_img }}"></div>
    <div class="container">
        <div class="row d-none address_form" id="form_data">
            <div class="col-12">
                <div class="form-group mb-0">
                    <label for="contact-address_street" style="margin: 0 0 6px 0;">{{ __("address") }}</label>
                    <div class="row mb-1">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("street") }}<span class="text-danger"></span></label>
                            <input type="text" maxlength="255" class="form-control" id="contact-address_street" name="address_street" placeholder="{{ __("street") }}">
                            <span class="invalid-feedback" id="address_street" role="alert">
                        </span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("suit_apt_number") }}<span class="text-danger">*</span></label>
                            <input value="" type="text" maxlength="20" class="form-control" id="contact-address_number" name="address_number" placeholder="{{ __("suit_apt_number") }}">
                            <span class="invalid-feedback" id="address_number" role="alert">
                        </span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("country") }}<span class="text-danger">*</span></label>
                            <select id="contact-address_country" name="address_country" class="form-control select2-field">
                                <option value="">-- {{ __("select") }} {{ __("country") }} --</option>
                                @foreach($country as $row)
                                    <option value="{{ $row['tld'] }}">{{ $row['name'] }}</option>
                                @endforeach
                            </select>
                            <div id="spinner_country">

                            </div>
                            <span class="invalid-feedback" id="address_country" role="alert">
                        </span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("state") }}<span class="text-danger">*</span></label>
                            <select id="contact-address_state" disabled name="address_state" class="form-control select2-field">
                                <option value="">-- {{ __("select") }} {{ __("state") }} --</option>
                            </select>
                            <div id="spinner_state">

                            </div>
                            <span class="invalid-feedback" id="address_state" role="alert">
                        </span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("city") }}<span class="text-danger">*</span></label>
                            <select id="selectize-select" disabled name="address_city" class="form-control select2-field" >
                                <option value="">-- {{ __("select") }} {{ __("city") }} --</option>
                            </select>
                            <span class="invalid-feedback" id="address_city" role="alert">
                        </span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("zip_code") }}<span class="text-danger">*</span></label>
                            <input value="3384" type="text" id="zip_code" name="address_zipcode" class="form-control" maxlength="20" placeholder="{{ __("zip_code") }}">
                            <span class="invalid-feedback" id="address_zipcode" role="alert">
                        </span>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <div class="row d-none address_form_id" id="form_data_id" >
            <div class="col-12">
                <div class="form-group mb-0">
                    <div class="row mb-1">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">{{ __("expiry_date") }}<span class="text-danger">*</span></label>
                            <input type="text" name="expiry_date" id="expiry_date" class="form-control date-field" maxlength="15" placeholder="Expiry Date">
                            <span class="invalid-feedback" id="address_street" role="alert">
                        </span>
                        </div>
                        <div class="col-md-3">

                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
    <input type="hidden" name="data_email_document" id="data_email_document">
    @csrf

    <script src="/js/uppy.min.js"></script>
    <script>
        var customer = document.getElementById("data_email_document");
        var email = "{{ $email }}"||"";
        var document_type = {!! $document_type !!}||"";
        var cont = 0;
        var token = "{{ csrf_token() }}" ;
        var translateDashboard = {
            strings : {
                closeModal: "{{ __('closeModal') }}",
                addMoreFiles: "{{ __('addMoreFiles') }}",
                addingMoreFiles: "{{ __('addingMoreFiles') }}",
                importFrom: "{{ __('importFrom') }}",
                dashboardWindowTitle: "{{ __('dashboardWindowTitle') }}",
                dashboardTitle: "{{ __('dashboardTitle') }}",
                copyLinkToClipboardSuccess: "{{ __('copyLinkToClipboardSuccess') }}",
                copyLinkToClipboardFallback: "{{ __('copyLinkToClipboardFallback') }}",
                copyLink: "{{ __('copyLink') }}",
                back: "{{ __('back') }}",
                removeFile: "{{ __('removeFile') }}",
                editFile: "{{ __('editFile') }}",
                editing: "{{ __('editing') }}",
                finishEditingFile: "{{ __('finishEditingFile') }}",
                saveChanges: "{{ __('saveChanges') }}",
                myDevice: "{{ __('myDevice') }}",
                dropHint: "{{ __('dropHint') }}",
                uploadComplete: "{{ __('uploadComplete') }}",
                uploadPaused: "{{ __('uploadPaused') }}",
                resumeUpload: "{{ __('resumeUpload') }}",
                pauseUpload: "{{ __('pauseUpload') }}",
                retryUpload: "{{ __('retryUpload') }}",
                cancelUpload: "{{ __('cancelUpload') }}",
                xFilesSelected: {
                0: "{{ __('xFilesSelected0') }}",
                1: "{{ __('xFilesSelected1') }}",
                },
                uploadXFiles: {
                0: "{{ __('uploadingXFiles0') }}",
                1: "{{ __('uploadingXFiles1') }}",
                },
                processingXFiles: {
                0: "{{ __('processingXFiles0') }}",
                1: "{{ __('processingXFiles1') }}",
                },
                poweredBy: "{{ __('poweredBy') }}",
                addMore: "{{ __('addMore') }}",
                editFileWithFilename: "{{ __('editFileWithFilename') }}",
                save: "{{ __('save') }}",
                cancel: "{{ __('cancel') }}",
                dropPasteFiles: "{{ __('dropPasteFiles') }}",
                dropPasteFolders: "{{ __('dropPasteFolders') }}",
                dropPasteBoth: "{{ __('dropPasteBoth') }}",
                dropPasteImportFiles: "{{ __('dropPasteImportFiles') }}",
                dropPasteImportFolders: "{{ __('dropPasteImportFolders') }}",
                uploadFailed: "{{ __('uploadFailed') }}",
                retry: "{{ __('retry') }}",
                filesUploadedOfTotal: {
                    0: "{{ __('filesUploadedOfTotal0') }}",
                    1: "{{ __('filesUploadedOfTotal1') }}",
                },
                dataUploadedOfTotal: "{{ __('dataUploadedOfTotal') }}",
                uploadingXFiles: {
                    0: "{{ __('uploadingXFiles0') }}",
                    1: "{{ __('uploadingXFiles1') }}",
                },
                uploadXNewFiles: {
                    0: "{{ __('uploadXNewFiles0') }}",
                    1: "{{ __('uploadXNewFiles1') }}",
                },
                uploading: "{{ __('uploading') }}",
                xTimeLeft: "{{ __('xTimeLeft') }}",
                complete: "{{ __('complete') }}",
                done: "{{ __('done') }}",
            }
        };
        var translateWebcam = {
            strings : {
                pluginNameCamera: "{{ __('pluginNameCamera') }}",
            }
        };

        var uppy = new Uppy.Core({
            debug: true,
            autoProceed: false,
            restrictions :  {
                maxFileSize :  2048576*5,
                maxTotalFileSize :  2048576*5,
                maxNumberOfFiles :  1 ,
                minNumberOfFiles : 1,
                allowedFileTypes :  ['.jpg', '.jpeg', '.png', '.gif']
            }
        })
        .use(Uppy.Dashboard, {
            inline: true,
            target: '#drag-drop-area',
            trigger: '.UppyModalOpenerBtn',
            showProgressDetails: true,
            note: 'Images only, 3 files, down to 1 MB',
            height: 200,
            browserBackButtonClose: false,
            autoOpenFileEditor: true,
            closeModalOnClickOutside: true,
            onRequestCloseModal: () => this.doneButtonHandler(),
            locale: translateDashboard
        })
        .use(Uppy.Webcam, {
            countdown: false,
            modes: [
                'picture',
            ],
            mirror: true,
            videoConstraints: {
                facingMode: 'user',
                width: { min: 720, ideal: 1280, max: 1920 },
                height: { min: 480, ideal: 800, max: 1080 },
            },
            showRecordingLength: false,
            target: Uppy.Dashboard, // Webcam will be installed to the Dashboard
            locale: translateWebcam
        })
        .use(Uppy.ImageEditor, {
            id: 'ImageEditor',
            quality: 0.8,
            cropperOptions: {
              viewMode: 1,
              background: false,
              autoCropArea: 1,
              responsive: true,
              croppedCanvasOptions: {},
            },
            actions: {
              revert: true,
              rotate: true,
              granularRotate: true,
              flip: true,
              zoomIn: true,
              zoomOut: true,
              cropSquare: true,
              cropWidescreen: true,
              cropWidescreenVertical: true,
            },
            target: Uppy.Dashboard // Webcam will be installed to the Dashboard
        })
        .use(Uppy.XHRUpload, {
            endpoint: '/upload-image',
            method: 'post',
            formData: true,
            fieldName: "file",
        })
        uppy.on('upload', (data) =>{
            uppy.setFileMeta(data.fileIDs, {
                _token: token,
                email: email,
                type: document_type[cont],
                address_street: document.getElementById("contact-address_street").value,
                address_number: document.getElementById("contact-address_number").value,
                address_country: document.getElementById("contact-address_country").value,
                address_state: document.getElementById("contact-address_state").value,
                address_city: document.getElementById("selectize-select").value,
                address_zipcode: document.getElementById("zip_code").value,
                expiry_date: document.getElementById("expiry_date").value,
            });
        });
        uppy.on('file-editor:complete', (updatedFile) => {
            if(document_type[cont] === "bill"){
                $("#form_data").removeClass("d-none");
                $(".uppy-Dashboard-inner").addClass("drog_img");
            }
            if(document_type[cont] === "id"){
                $("#form_data").addClass("d-none");
                $("#form_data_id").removeClass("d-none");
                $(".uppy-Dashboard-inner").attr("style", "height: 554px !important;");
            }
        });
        uppy.on('upload-success', (file, response) => {
            if(document_type[cont] == "id"){
                $(".order_document_id").html('<i class="mdi mdi-check-all"></i>');
                $(".order_document_id").addClass("order_document_check");
                $("#imagen_id").addClass("imagen_check");
            }
            if(document_type[cont] == "ssn"){
                $(".order_document_ssn").html('<i class="mdi mdi-check-all"></i>');
                $(".order_document_ssn").addClass("order_document_check");
                $(".order_document_ssn").removeClass("order_document_ssn");
                $("#imagen_social").addClass("imagen_check");
            }
            if(document_type[cont] == "bill"){
                $(".order_document_bill").html('<i class="mdi mdi-check-all"></i>');
                $(".order_document_bill").addClass("order_document_check");
                $(".order_document_bill").removeClass("order_document_bill");
                $("#imagen_bill").addClass("imagen_bill");
            }
            if(document_type.length == cont + 1){
                $("#drag-drop-area").addClass("d-none");
                Swal.fire(
                    {
                        title: "{{ __('gob_job') }}",
                        text: "{{ __('text_gob_job') }}",
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3bafda',
                        confirmButtonText: "Cerrar"
                    }
                )
            }
            $("#form_data").addClass("d-none");
            $("#form_data_id").addClass("d-none");
            $(".uppy-Dashboard-inner").removeAttr("style");
        })
        uppy.on('upload-error', (file, error, response) => {
            console.log(response);
            if(response.status == 400){
                $(".is-invalid").removeClass('is-invalid');
                let mesage = "";
                if(response.body.mesage == "c-pages-text16" || response.body.error == "c-pages-text16"){
                    mesage = "{{ __('c-pages-text16') }}";
                    $(function(){
                        $.NotificationApp.send("{{ __("v-login-text9") }}", mesage, 'top-right', '#bf441d', 'error');
                    });
                }
                if(response.body.status == "error" && response.body.error != "c-pages-text16"){
                    $(function(){
                        $.NotificationApp.send("{{ __("v-login-text9") }}", response.body.error, 'top-right', '#bf441d', 'error');
                    });
                }

                if(response.body.error == true){
                    $.each( response.body.message, function( key, value ) {
                        $("[name="+key+"]").addClass('is-invalid');
                        $("#"+key+"").html('<strong>'+value+'</strong>');
                    });
                }
            }
        });

        function doneButtonHandler() {
            cont++;
        }
        </script>

