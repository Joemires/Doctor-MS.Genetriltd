<x-app-layout>
    @push('meta')
        <link rel="stylesheet" type="text/css" href="https://doctorly.themesbrand.website/assets/libs/select2/select2.min.css">
    @endpush
    @push('styles')
        <link rel="stylesheet" type="text/css" href="https://doctorly.themesbrand.website/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">

        <style>
            .iti, .intl-tel-input { width: 100%; }
            /* .intl-tel-input {
                width: 100%
            } */

        </style>
    @endpush

    <x-backend.page-title-breadcrumb title="Add New Doctor">
        <li class="breadcrumb-item"><a href="{{ route('backend.doctors.index') }}">Doctors</a></li>
    </x-backend.page-title-breadcrumb>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('backend.doctors.index') }}">
                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                    <i class="bx bx-arrow-back font-size-16 align-middle mr-2"></i>Back to Doctor List
                </button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <blockquote>Basic Information</blockquote>
                    <form id="addtime" action=" {{ route('backend.doctors.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="firstname" tabindex="1" value="" placeholder="Enter First Name">
                                        @if($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" tabindex="3" value="" placeholder="Enter Email">
                                        @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" tabindex="5" value="" placeholder="Enter Title">
                                        @if($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Experience <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" tabindex="7" id="experience" value="" placeholder="Enter Experience">
                                        @if($errors->has('experience'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('experience') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label d-block">Doctor available days <span class="text-danger">*</span></label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="available_days[sun]">
                                            <label class="form-check-label" for="inlineCheckbox1">Sun</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="1" name="available_days[mon]">
                                            <label class="form-check-label" for="inlineCheckbox2">Mon</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="1" name="available_days[tue]">
                                            <label class="form-check-label" for="inlineCheckbox3">Tue</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="1" name="available_days[wed]">
                                            <label class="form-check-label" for="inlineCheckbox4">Wed</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="1" name="available_days[thu]">
                                            <label class="form-check-label" for="inlineCheckbox5">Thu</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="1" name="available_days[fri]">
                                            <label class="form-check-label" for="inlineCheckbox6">Fri</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="1" name="available_days[sat]">
                                            <label class="form-check-label" for="inlineCheckbox7">Sat</label>
                                        </div>

                                        @if($errors->has('available_days'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('available_days') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label class="control-label">Slot Duration (In Minute) <span class="text-danger">*</span></label>
                                        <select class="form-control select2 @error('slot_duration') is-invalid @enderror" name="slot_duration" id="slot_duration">
                                            <option value="" disabled selected>00</option>
                                            @foreach (range(1, 60) as $i)
                                                <option>{{ $i }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('slot_duration'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('slot_duration') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class='repeater mb-4'>
                                            <div data-repeater-list="time_slot" class="form-group">

                                                <label>Available Time <span class="text-danger">*</span></label>
                                                <div data-repeater-item class="mb-3 row">
                                                    <div class="col-md-5 col-6">
                                                        <label class="label-control">From:</label>
                                                        <div class="input-group">
                                                            <input type="time" name="from" class="form-control timecount timepicker " placeholder="From time" id="time_from" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 col-6">
                                                        <label class="label-control">To:</label>
                                                        <div class="input-group">
                                                            <input type="time" name="to" class="form-control  " placeholder="To time" onchange="valinput0()" id="time_to" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-4 d-flex align-items-end">
                                                        <button data-repeater-delete type="button" onclick="cf--" class="fcbtn btn btn-outline btn-danger btn-1d btn-sm inner form-control d-flex align-items-center px-3" style="width: max-content">
                                                            <i class="bx bx-x fs-14"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="para error d-none"></p>
                                            <input data-repeater-create type="button" class="btn btn-primary" value="Add Time" onclick="change()" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="lastname" tabindex="2" value="" placeholder="Enter Last Name">
                                        @if($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Contact Number <span class="text-danger">*</span></label>
                                        <div class="w-100 position-relative">
                                            <input type="tel" class="form-control tel-input w-100 @error('mobile') is-invalid @enderror" name="mobile" id="patientMobile" tabindex="4" value="" placeholder="Enter Contact Number">
                                        </div>
                                        @if($errors->has('mobile'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                        <input type="hidden" name="mobile_country" value="US">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Degree <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('degree') is-invalid @enderror" name="degree" id="degree" tabindex="6" value="" placeholder="Enter Degree">
                                        @if($errors->has('degree'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('degree') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Fees <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('fees') is-invalid @enderror" name="fees" id="fees" tabindex="6" value="" placeholder="Enter Fees">
                                        @if($errors->has('fees'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fees') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Profile Photo <span class="text-danger">*</span></label>
                                        <img class="" src=" https://doctorly.themesbrand.website/assets/images/users/noImage.png " id="profile_display" onclick="triggerClick()" data-toggle="tooltip" data-placement="top" title="Click to Upload Profile Photo">
                                        <input type="file" class="form-control " tabindex="8" name="profile_photo" id="profile_photo" style="display:none;" onchange="displayProfile(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Add New Doctor
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/jquery-repeater/jquery-repeater.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js">
        </script>
        <!-- form init -->
        <script src="https://doctorly.themesbrand.website/assets/js/pages/form-repeater.int.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/select2/select2.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/js/pages/form-advanced.init.js"></script>
        <script>
            $(document).ready(() => {
                $("input.tel-input").intlTelInput({
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
                });

                $("input.tel-input").on("countrychange", function(e, countryData) {
                    // do something with countryData
                    $('[name=mobile_country]').val(countryData.iso2.toUpperCase())
                });
            })
            $('#addtime').submit(function(e) {
                if (error != 0) {
                    e.preventDefault();
                }
            });
            // Profile photo
            function triggerClick() {
                document.querySelector('#profile_photo').click();
            }

            function displayProfile(e) {
                if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.querySelector('#profile_display').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }
            // Time Validation
            var timecount = $('.timecount').length
            let cf = 0;
            let error = 0;

            function valinput0() {
                var startTime = $('input[name="TimeSlot[0][from]"]').val();
                var endTime = $('input[name="TimeSlot[0][to]"]').val();
                var st = startTime.split(":");
                var et = endTime.split(":");
                var sst = new Date();
                sst.setHours(st[0]);
                sst.setMinutes(st[1]);
                var eet = new Date();
                eet.setHours(et[0]);
                eet.setMinutes(et[1]);
                if (sst > eet) {
                    error = 1;
                    $('.para').html('to value is bigger then from');
                    $('.para').addClass('d-block');
                } else {
                    error = 0;
                    $('.para').removeClass('d-block');
                }
            }

            function change() {
                cf++;
                setTimeout(function() {
                    $(document).on('change', `input[name="TimeSlot[${cf}][to]"]`, function() {
                        validate1();
                    });
                }, 100);
            }

            function validate1() {
                timecount = $('.timecount').length;
                for (let i = 0; i < timecount; i++) {
                    var startTime = $('input[name="TimeSlot[' + i + '][from]"]').val();
                    var endTime = $('input[name="TimeSlot[' + i + '][to]"]').val();
                    currenttime = $(`input[name="TimeSlot[${cf}][from]"]`).val();
                    currentto = $(`input[name="TimeSlot[${cf}][to]"]`).val();
                    var st = startTime.split(":");
                    var et = endTime.split(":");
                    var ct = currenttime.split(":");
                    var cft = currentto.split(":");
                    var sst = new Date();
                    sst.setHours(st[0]);
                    sst.setMinutes(st[1]);
                    var eet = new Date();
                    eet.setHours(et[0]);
                    eet.setMinutes(et[1]);
                    var cct = new Date();
                    cct.setHours(ct[0]);
                    cct.setMinutes(ct[1]);
                    var cff = new Date();
                    cff.setHours(cft[0]);
                    cff.setMinutes(cft[1]);
                    if (cct < cff) {
                        if (sst < cct && eet > cct) {
                            error = 1;
                            $('.para').html('Value not accepted');
                            $('.para').addClass('d-block');
                            break
                        } else {
                            error = 0;
                            $('.para').removeClass('d-block');
                        }
                    } else {
                        $('.para').html('to value is bigger then from');
                        $('.para').addClass('d-block');
                        break
                    }
                }
            }

            $('#inlineCheckbox1').on('change', function() {
                var inlineCheckbox1 = $('#inlineCheckbox1').is(':checked') ? '1' : '0';
                $('#inlineCheckbox1').val(inlineCheckbox1);
            }).change();
            $('#inlineCheckbox2').on('change', function() {
                var inlineCheckbox2 = $('#inlineCheckbox2').is(':checked') ? '1' : '0';
                $('#inlineCheckbox2').val(inlineCheckbox2);
            }).change();
            $('#inlineCheckbox3').on('change', function() {
                var inlineCheckbox3 = $('#inlineCheckbox3').is(':checked') ? '1' : '0';
                $('#inlineCheckbox3').val(inlineCheckbox3);
            }).change();
            $('#inlineCheckbox4').on('change', function() {
                var inlineCheckbox4 = $('#inlineCheckbox4').is(':checked') ? '1' : '0';
                $('#inlineCheckbox4').val(inlineCheckbox4);
            }).change();
            $('#inlineCheckbox5').on('change', function() {
                var inlineCheckbox5 = $('#inlineCheckbox5').is(':checked') ? '1' : '0';
                $('#inlineCheckbox5').val(inlineCheckbox5);
            }).change();
            $('#inlineCheckbox6').on('change', function() {
                var inlineCheckbox6 = $('#inlineCheckbox6').is(':checked') ? '1' : '0';
                $('#inlineCheckbox6').val(inlineCheckbox6);
            }).change();
            $('#inlineCheckbox7').on('change', function() {
                var inlineCheckbox7 = $('#inlineCheckbox7').is(':checked') ? '1' : '0';
                $('#inlineCheckbox7').val(inlineCheckbox7);
            }).change();
        </script>
    @endpush

</x-app-layout>
