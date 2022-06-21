<x-app-layout>
    @push('meta')
        <link rel="stylesheet" href="{{ asset('assets/libs/fullcalendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://doctorly.themesbrand.website/assets/libs/select2/select2.min.css">
    @endpush
    <x-backend.page-title-breadcrumb title="BOOK APPOINTMENT" :navs="['Appointment', 'New Booking']" />
    <div class="row">
        <div class="col-12">
            <a href="https://doctorly.themesbrand.website/appointment/create"
                class="btn btn-primary text-white waves-effect waves-light mb-4">
                <i class="mdi mdi-arrow-left  font-size-16 align-middle mr-2"></i> Back
            </a>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <blockquote>Book Appointment</blockquote>
                    <form action="https://doctorly.themesbrand.website/appointment-store" id="" method="POST">
                        <input type="hidden" name="_token" value="H3GScXcksKmiFvwZiqo28y04a0VeN6gcWvOaEugV">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="control-label">Patient <span class="text-danger">*</span></label>
                                <select class="form-control select2 " name="appointment_for" id="patient">
                                    <option disabled selected>Select</option>
                                    <option value="16">Patient Doctorly</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="appointment_with" value="2" id="doctor">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label class="control-label">Date <span class="text-danger">*</span></label>
                                <div class="input-group datepickerdiv">
                                    <input type="text" class="form-control appointment-date " name="appointment_date"
                                        id="datepicker" data-provide="datepicker" data-date-autoclose="true"
                                        autocomplete="off" 2022-06-01>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="" class="d-block">Available Time <span
                                        class="text-danger">*</span></label>
                                <div class="btn-group btn-group-toggle availble_time" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary mr-2 ">
                                        <input type="radio" name="available_time" class="available-time " value="108">
                                        09:00:00 to 17:00:00
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="" class="d-block">Available Slot<span
                                        class="text-danger">*</span></label>
                                <div class="btn-group btn-group-toggle availble_slot d-block" data-toggle="buttons">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Create Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

    <script src="{{ asset('assets/libs/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/libs/moment/moment.js') }}"></script>
    <script src="https://doctorly.themesbrand.website/assets/libs/select2/select2.min.js"></script>
    <script src="https://doctorly.themesbrand.website/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="https://doctorly.themesbrand.website/assets/libs/bootstrap-timepicker/bootstrap-timepicker.js"></script>

    <script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
    @endpush
</x-app-layout>
