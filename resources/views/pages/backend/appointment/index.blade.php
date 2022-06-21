<x-app-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/libs/fullcalendar/fullcalendar.min.css') }}">
    @endpush
    <x-backend.page-title-breadcrumb title="BOOK APPOINTMENT" nav-title="Appointment" />

    <div class="row">
        <div class="col-12">
            <a href="{{ route('backend.appointments.create') }}" class="btn btn-primary text-white waves-effect waves-light mb-4">
                <i class="bx bx-plus font-size-16 align-middle mr-2"></i> New Appointment
            </a>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div id='calendar'></div>
                </div>
            </div>
        </div> <!-- end col -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Appointment List | <label id="selected_date">01 Jun, 2022</label>
                    </h4>
                    <div id="appointment_list">
                        <table class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Patient Name</th>
                                    <th>Patient Number</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td>Elinore Goodwin
                                    </td>
                                    <td>1784613893</td>
                                    <td>
                                        09:00:00 to 09:40:00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="new_list" style="display : none"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    @push('scripts')
        <script src="{{ asset('assets/libs/select2/select2.min.js') }}"></script>
        <script src="{{ asset('assets/libs/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/libs/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/libs/fullcalendar/fullcalendar.min.js') }}"></script>


        <script src="{{ asset('assets/js/pages/calendar-init.js') }}"></script>
        <script type="text/javascript">
            var aplist_url = "https://doctorly.themesbrand.website/appointmentList";
        </script>
    @endpush
</x-app-layout>
