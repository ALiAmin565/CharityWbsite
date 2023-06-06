@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
    تعديل القائمة السفلبة
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> القائمة السفلبة</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0"> /
                    تعديل القائمة السفلبة </span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
                <strong>{{ $error }}</strong>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('update'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form id="myForm" action="{{ route('footer.update', $topNav->id) }}" method="post"
                        enctype="multipart/form-data" autocomplete="off">
                        @method('PUT')
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputLocation" class="control-label">العنوان</label>
                                <input type="text" class="form-control" id="inputLocation"
                                    value="{{ $topNav->location }}" name="Location" placeholder="يرجي ادخال العنوان">
                            </div>
                            <div class="col">
                                <label for="inputEmail" class="control-label">الايميل الخاص بك </label>
                                <input type="email" class="form-control" id="inputEmail" value="{{ $topNav->email }}"
                                    name="Email" placeholder="يرجي ادخال الايميل  ">
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row mg-t-20">
                            <div class="col">
                                <label for="inputRights" class="control-label">حقوق النشر  </label>
                                <input type="text" class="form-control" id="inputRights"
                                    value="{{ $footer->rights }}" name="rights" placeholder="يرجي ادخال صاحب حقوق النشر ">
                            </div>
                            <div class="col">
                                <label for="inputNumber" class="control-label">رقم الهاتف </label>
                                <input type="number" class="form-control" id="inputNumber" value="{{ $footer->number }}"
                                    name="number" placeholder="يرجي ادخال رقم الهاتف ">
                            </div>
                        </div>
                        {{-- 3 --}}
                        <div class="row mg-t-20">
                            <div class="col">
                                <label for="inputFacebook" class="control-label">لينك الفيس بوك</label>
                                <input type="text" class="form-control" id="inputFacebook"
                                    value="{{ $topNav->facebook }}" name="facebook" placeholder="يرجي ادخال الرابط ">
                            </div>
                            <div class="col">
                                <label for="inputYoutube" class="control-label">لينك اليوتيوب</label>
                                <input type="text" class="form-control" id="inputYoutube" value="{{ $topNav->youtube }}"
                                    name="youtube" placeholder="يرجي ادخال الرابط ">
                            </div>
                            <div class="col">
                                <label for="inputTwitter" class="control-label">لينك تويتر</label>
                                <input type="text" class="form-control" id="inputTwitter"
                                    value="{{ $topNav->twitter }}" name="twitter" placeholder="يرجي ادخال الرابط ">
                            </div>
                            <div class="col">
                                <label for="inputInstagram" class="control-label">لينك انستجرام</label>
                                <input type="text" class="form-control" id="inputInstagram"
                                    value="{{ $topNav->instagram }}" name="instagram" placeholder="يرجي ادخال الرابط ">
                            </div>
                            <div class="col">
                                <label for="inputWhatsapp" class="control-label">لينك واتساب</label>
                                <input type="text" class="form-control" id="inputWhatsapp"
                                    value="{{ $topNav->whatsapp }}" name="whatsapp" placeholder="يرجي ادخال الرابط ">
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <p class="text-danger">* صيغة المرفق pdf, jpeg ,.jpg , png </p>
                        <h5 class="card-title">اللوجو</h5>

                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="Image_logo" class="dropify"
                                accept=".pdf,.jpg, .png, image/jpeg, image/png" data-height="70" />
                        </div><br>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    <div id="errorModal" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Validation Error</h5>
                </div>
                <div class="modal-body">
                    <p id="errorMessage"></p>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

    <script>
        var date = $('.fc-datepicker').datepicker({
            dateFormat: 'yy-mm-dd'
        }).val();
    </script>

    <script>
        $(document).ready(function() {
            $('select[name="Section"]').on('change', function() {
                var SectionId = $(this).val();
                if (SectionId) {
                    $.ajax({
                        url: "{{ URL::to('section') }}/" + SectionId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="product"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="product"]').append('<option value="' +
                                    value + '">' + value + '</option>');
                            });
                        },
                    });

                } else {
                    console.log('AJAX load did not work');
                }
            });

        });
    </script>


    <script>
        function myFunction() {

            var Amount_Commission = parseFloat(document.getElementById("Amount_Commission").value);
            var Discount = parseFloat(document.getElementById("Discount").value);
            var Rate_VAT = parseFloat(document.getElementById("Rate_VAT").value);
            var Value_VAT = parseFloat(document.getElementById("Value_VAT").value);

            var Amount_Commission2 = Amount_Commission - Discount;


            if (typeof Amount_Commission === 'undefined' || !Amount_Commission) {

                alert('يرجي ادخال مبلغ العمولة ');

            } else {
                var intResults = Amount_Commission2 * Rate_VAT / 100;

                var intResults2 = parseFloat(intResults + Amount_Commission2);

                sumq = parseFloat(intResults).toFixed(2);

                sumt = parseFloat(intResults2).toFixed(2);

                document.getElementById("Value_VAT").value = sumq;

                document.getElementById("Total").value = sumt;

            }

        }
    </script>
    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            var locationInput = document.getElementById("inputLocation");
            var emailInput = document.getElementById("inputEmail");
            var facebookInput = document.getElementById("inputFacebook");
            var youtubeInput = document.getElementById("inputYoutube");
            var twitterInput = document.getElementById("inputTwitter");
            var instagramInput = document.getElementById("inputInstagram");
            var whatsappInput = document.getElementById("inputWhatsapp");
            var inputRights = document.getElementById("inputRights");
            var inputNumber = document.getElementById("inputNumber");

            if (!locationInput.value.trim() || !emailInput.value.trim() || !facebookInput.value.trim() || !
                youtubeInput.value.trim() || !inputRights.value.trim() || !inputNumber.value.trim()||
                !twitterInput.value.trim() || !instagramInput.value.trim() || !whatsappInput.value.trim()) {
                event.preventDefault();
                showErrorModal("يرجى ملء جميع الحقول المطلوبة.");
            } else if (!isValidEmail(emailInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال بريد إلكتروني صحيح.");
            } else if (!isValidFacebookLink(facebookInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رابط فيس بوك صحيح.");
            } else if (!isValidYoutubeLink(youtubeInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رابط يوتيوب صحيح.");
            } else if (!isValidTwitterLink(twitterInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رابط تويتر صحيح.");
            } else if (!isValidInstagramLink(instagramInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رابط انستقرام صحيح.");
            } else if (!isValidWhatsappLink(whatsappInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رقم واتساب صحيح.");
            }
            else if (!isValidWhatsappLink(whatsappInput.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رقم واتساب صحيح.");
            }
            else if (!isValidNumber(inputNumber.value.trim())) {
                event.preventDefault();
                showErrorModal("يرجى إدخال رقم هاتف صحيح.");
            }
        });

        function isValidEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function isValidFacebookLink(facebookInput) {
            var regex =
                /(?:(?:http|https):\/\/)?(?:www.)?facebook.com\/(?:(?:\w)*#!\/)?(?:pages\/)?(?:[?\w\-]*\/)?(?:profile.php\?id=(?=\d.*))?([\w\-]*)?/gm;
            return regex.test(facebookInput);
        }

        function isValidYoutubeLink(youtubeInput) {
            var regex = /http(?:s?):\/\/(?:www\.)?youtu(?:be\.com\/watch\?v=|\.be\/)([\w\-\_]*)(&(amp;)?‌​[\w\?‌​=]*)?/gm;
            return regex.test(youtubeInput);
        }

        function isValidTwitterLink(twitterInput) {
            var regex = /https?:\/\/(?:www\.)?twitter\.com\/([a-zA-Z0-9_]+)/gm;
            return regex.test(twitterInput);
        }

        function isValidInstagramLink(instagramInput) {
            var regex = /https?:\/\/(?:www\.)?instagram\.com\/([a-zA-Z0-9_]+)/gm;
            return regex.test(instagramInput);
        }

        function isValidWhatsappLink(whatsappInput) {
            var regex = /^01[0125][0-9]{8}$/gm;
            return regex.test(whatsappInput);
        }
        function isValidNumber(inputNumber) {
            var regex = /^01[0125][0-9]{8}$/gm;
            return regex.test(inputNumber);
        }

        function showErrorModal(message) {
            var errorMessage = document.getElementById("errorMessage");
            errorMessage.textContent = message;
            var modal = new bootstrap.Modal(document.getElementById("errorModal"));
            modal.show();
        }
    </script>



@endsection
