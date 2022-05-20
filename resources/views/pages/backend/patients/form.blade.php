<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css">

        <style>
            .iti, .intl-tel-input { width: 100%; }
        </style>
    @endpush

    <x-backend.page-title-breadcrumb title="Add New Patient">
        <li class="breadcrumb-item"><a href="{{ route('backend.patients.index') }}">Patients</a></li>
    </x-backend.page-title-breadcrumb>

    <div class="row">
        <div class="col-12">
            <a href="https://doctorly.themesbrand.website/patient">
                <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                    <i class="bx bx-arrow-back font-size-16 align-middle mr-2"></i>Back to Patient List
                </button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div>:message</div>')) !!}
                    @endif

                    <blockquote>Basic Information</blockquote>
                    <form action="{{ route('backend.patients.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <img class="m-0"
                                    src="https://doctorly.themesbrand.website/assets/images/users/noImage.png"
                                    onclick="triggerClick()" data-toggle="tooltip" data-placement="top"
                                    title="Click to Upload Profile Photo" id="profile_display">
                                <input type="file" class="form-control " tabindex="8" name="profile_photo"
                                    id="profile_photo" style="display:none;" onchange="displayProfile(this)">
                                {{-- <label class="control-label">Profile Photo </label> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="FirstName" tabindex="1" value="" placeholder="Enter First Name">
                                        @if($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formmessage">Gender <span class="text-danger">*</span></label>
                                        <select class="form-control @error('gender') is-invalid @enderror" tabindex="3" name="gender">
                                            <option selected disabled>-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @if($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" tabindex="5" name="email" id="patientEmail" value="" placeholder="Enter Email">
                                        @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Current Address <span class="text-danger">*</span></label>
                                        <textarea id="formmessage" name="address" tabindex="7" class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Enter Current Address"></textarea>
                                        @if($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('last_name') is-invalid @enderror" tabindex="2" name="last_name" id="LastName" value="" placeholder="Enter Last Name">
                                        @if($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Age <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('age') is-invalid @enderror" tabindex="4" name="age" id="patientAge" value="" placeholder="Enter Age">
                                        @if($errors->has('age'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('age') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Contact Number <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control tel-input @error('mobile') is-invalid @enderror" tabindex="6" name="mobile"  id="patientMobile" value="" placeholder="Enter Contact Number">
                                        <input type="hidden" name="mobile_country" value="US">
                                        @if($errors->has('mobile'))
                                            <span class="invalid-feedback d-block" role="alert">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <blockquote>Medical Information</blockquote>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Height <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('height') is-invalid @enderror" name="height" tabindex="9" value="" id="patientHeight" placeholder="Enter Height">
                                        @if($errors->has('height'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('height') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formmessage">Blood Group <span class="text-danger">*</span></label>
                                        <select class="form-control @error('b_group') is-invalid @enderror" tabindex="11" name="b_group">
                                            <option selected disabled>-- Select Blood Group --</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                        @if($errors->has('b_group'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('b_group') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Pulse <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('pulse') is-invalid @enderror" tabindex="13" name="pulse" value="" id="patientPulse" placeholder="Enter Pulse">
                                        @if($errors->has('pulse'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('pulse') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Allergy <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('allergy') is-invalid @enderror" tabindex="15" name="allergy" id="patientAllergy" value="" placeholder="Enter Allergy Symptoms">
                                        @if($errors->has('allergy'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('allergy') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Weight <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('weight') is-invalid @enderror" tabindex="10" name="weight" id="patientWeight" value="" placeholder="Enter Weight">
                                        @if($errors->has('weight'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('weight') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Blood Pressure <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('b_pressure') is-invalid @enderror" tabindex="12" name="b_pressure" id="blood_pressure" value="" placeholder="Enter Blood Pressure">
                                        @if($errors->has('b_pressure'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('b_pressure') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Respiration <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('respiration') is-invalid @enderror" tabindex="14" name="respiration" id="patientRespiration" value="" placeholder="Enter Respiration">
                                        @if($errors->has('respiration'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('respiration') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Diet <span class="text-danger">*</span></label>
                                        <select class="form-control @error('diet') is-invalid @enderror" tabindex="16" name="diet">
                                            <option selected disabled>-- Select Diet --</option>
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Non-vegetarian">Non-vegetarian</option>
                                            <option value="Vegan">Vegan</option>
                                        </select>
                                        @if($errors->has('diet'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('diet') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Add New Patient
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
            // Profile Photo
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
        </script>
    @endpush

</x-app-layout>
