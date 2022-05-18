<x-app-layout>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Dashboard</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Welcome to Doctorly Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p>Doctorly Dashboard</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="assets/images/profile-img.png"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('storage/images/users/1645508722.jpg') }}"
                                    alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate"> {{ auth()->user()->name}} </h5>
                            <p class="text-muted mb-0 text-truncate">Super Admin</p>
                        </div>
                        <div class="col-sm-8">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="doctor" class="mb-0 font-weight-medium font-size-15">
                                            <h5 class="mb-0">{{ collect($users->get('doctor'))->count() }}</h5>
                                        </a>
                                        <p class="text-muted mb-0">Doctors</p>
                                    </div>
                                    <div class="col-6">
                                        <a href="patient" class="mb-0 font-weight-medium font-size-15">
                                            <h5 class="mb-0">{{ collect($users->get('patient'))->count() }}</h5>
                                        </a>
                                        <p class="text-muted mb-0">Patients</p>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <a href="receptionist" class="mb-0 font-weight-medium font-size-15">
                                            <h5 class="mb-0">{{ collect($users->get('receptionist'))->count() }}</h5>
                                        </a>
                                        <p class="text-muted mb-0">Receptionist</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Monthly Earning</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="text-muted">This month</p>
                            <h3>$5,949</h3>
                            <p class="text-muted">
                                <span class=" text-danger  mr-2">
                                    -27.24% <i class="mdi  mdi-arrow-down "></i>
                                </span>From previous month
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div id="radialBar-chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Display items per page</p>
                                <button class="btn  btn-primary  btn-sm mr-2 per-page-items  mb-md-1"
                                    data-page="10">10</button>
                                <button class="btn  btn-info  btn-sm mr-2 per-page-items  mb-md-1"
                                    data-page="25">25</button>
                                <button class="btn  btn-info  btn-sm mr-2 per-page-items  mb-md-1"
                                    data-page="50">50</button>
                                <button class="btn  btn-info  btn-sm mr-2 per-page-items  mb-md-1"
                                    data-page="100">100</button>
                            </div>
                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-book-open font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Appointments</p>
                                    <h4 class="mb-0">444</h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bxs-calendar-check font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Revenue</p>
                                    <h4 class="mb-0">$578,273,620.30</h4>
                                </div>
                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-dollar font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Today&#039;s Earning</p>
                                    <h4 class="mb-0">$0.00</h4>
                                </div>
                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-dollar-circle  font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Today&#039;s Appointments
                                    </p>
                                    <a href="today-appointment" class="mb-0 font-weight-medium font-size-24">
                                        <h4 class="mb-0">0</h4>
                                    </a>
                                </div>
                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-calendar font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Tomorrow Appointments</p>
                                    <h4 class="mb-0">0</h4>
                                </div>
                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-calendar-event font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Upcoming Appointments</p>
                                    <a href="upcoming-appointment" class="mb-0 font-weight-medium font-size-24">
                                        <h4 class="mb-0">19
                                        </h4>
                                    </a>
                                </div>
                                <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class='bx bxs-calendar-minus font-size-24'></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- end row -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Monthly Registered Users</h4>
                    <div id="monthly_users" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Users</h4>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#Doctors" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-user-md"></i></span>
                                <span class="d-none d-sm-block">Doctors</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Receptionist"
                                role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-user-tie"></i></span>
                                <span class="d-none d-sm-block">Receptionist</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#Patients" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-user-injured"></i></span>
                                <span class="d-none d-sm-block">Patients</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="Doctors" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Name</th>
                                            <th>Degree</th>
                                            <th>Contact No</th>
                                            <th>Email</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mehmet ASLAN</td>
                                            <td>5</td>
                                            <td>5300000000</td>
                                            <td>mehmet@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="doctor/117">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                        <div class="tab-pane" id="Receptionist" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Email</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>jasd asd
                                            </td>
                                            <td>8121662744</td>
                                            <td>mohfebrinq@gmail.comasd</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="receptionist/109">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>

                        <div class="tab-pane" id="Patients" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Name</th>
                                            <th>Contact No</th>
                                            <th>Email</th>
                                            <th>View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Patient Demo</td>
                                            <td>8121662744</td>
                                            <td>patient@example.comasd</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="Patient/109">
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    @push('scripts')
        <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
    @endpush
</x-app-layout>
