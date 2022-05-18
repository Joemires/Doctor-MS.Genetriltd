<x-app-layout>
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
                    <blockquote>Basic Information</blockquote>
                    <form action=" https://doctorly.themesbrand.website/patient " method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="gMutzD4w8p4hGkGk2DZmsvHKX0DCs0o8LNLFZvvH">
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
                                        <label class="control-label">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control " name="first_name" id="FirstName"
                                            tabindex="1" value="" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formmessage">Gender <span class="text-danger">*</span></label>
                                        <select class="form-control " tabindex="3" name="gender">
                                            <option selected disabled>-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female
                                            </option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control " tabindex="5" name="email"
                                            id="patientEmail" value="" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Current Address <span
                                                class="text-danger">*</span></label>
                                        <textarea id="formmessage" name="address" tabindex="7" class="form-control " rows="3"
                                            placeholder="Enter Current Address"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Last Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control " tabindex="2" name="last_name"
                                            id="LastName" value="" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Age <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control " tabindex="4" name="age"
                                            id="patientAge" value="" placeholder="Enter Age">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Contact Number <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control " tabindex="6" name="mobile"
                                            id="patientMobile" value="" placeholder="Enter Contact Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <blockquote>Medical Information</blockquote>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Height <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control " name="height" tabindex="9" value=""
                                            id="patientHeight" placeholder="Enter Height">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="formmessage">Blood Group <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control " tabindex="11" name="b_group">
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
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Pulse <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control " tabindex="13" name="pulse" value=""
                                            id="patientPulse" placeholder="Enter Pulse">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Allergy <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control " tabindex="15" name="allergy"
                                            id="patientAllergy" value="" placeholder="Enter Allergy Symptoms">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Weight <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control " tabindex="10" name="weight"
                                            id="patientWeight" value="" placeholder="Enter Weight">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Blood Pressure <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control " tabindex="12" name="b_pressure"
                                            id="blood_pressure" value="" placeholder="Enter Blood Pressure">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Respiration <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control " tabindex="14" name="respiration"
                                            id="patientRespiration" value="" placeholder="Enter Respiration">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label class="control-label">Diet <span class="text-danger">*</span></label>
                                        <select class="form-control " tabindex="16" name="diet">
                                            <option selected disabled>-- Select Diet --</option>
                                            <option value="Vegetarian">
                                                Vegetarian</option>
                                            <option value="Non-vegetarian">
                                                Non-vegetarian</option>
                                            <option value="Vegan">Vegan
                                            </option>
                                        </select>
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
        <script>
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
