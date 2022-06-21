<x-app-layout>

    <x-backend.page-title-breadcrumb title="Profile" nav-title="Profile" />

    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Doctor Information</h5>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('storage/images/users/1645508722.jpg') }}" alt="Doctor" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate"> {{ $user->name }} </h5>
                            <p class="text-muted mb-0 text-truncate"> Professror2 </p>
                        </div>
                        <div class="col-sm-8">
                            <div class="pt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="font-size-12">Last Login : </h5>
                                        <p class="text-muted mb-0"> 2022-06-01 21:00:38 </p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="{{ route('backend.profile', 'edit') }}" class="btn btn-primary waves-effect waves-light btn-sm">Edit Profile
                                        <i class="mdi mdi-arrow-right ml-1"></i>
                                    </a>
                                    <a href="{{ route('backend.profile', 'slots') }}" class="btn btn-primary waves-effect waves-light btn-sm">Edit Time Slot
                                        <i class="mdi mdi-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Personal Information</h4>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Full Name:</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Contact No:</th>
                                    <td> {{ $user->contacts->pull('mobile.working_line')}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Email:</th>
                                    <td> {{ $user->email }} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Degree:</th>
                                    <td> MBA, Reg. - 123456 </td>
                                </tr>
                                <tr>
                                    <th scope="row">Experience:</th>
                                    <td> 2 Year </td>
                                </tr>
                                <tr>
                                    <th scope="row">Fees:</th>
                                    <td>0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end card -->
            @if ($user->roles->search( fn ($role) => $role->name == 'doctor') >= 0)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4"> Doctor Available Day And Time</h4>
                    <hr>
                    <p>Available Day</p>
                    @foreach ($user->meta->pull('availability.days') as $day)
                        <span class="badge badge-info font-size-15 mb-2">{{ Carbon\Carbon::now()->next($day)->format('l') }}</span>
                    @endforeach
                    <hr>
                    <p>Available Time</p>
                    @foreach ($user->meta->pull('availability.time') as $time)
                        <span class="badge badge-info font-size-15 mb-2"> {{ implode(' To ', $time) }} </span>
                    @endforeach
                </div>
            </div>
            @endif
            <!-- end card -->
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Appointments</p>
                                    <h4 class="mb-0">283</h4>
                                </div>
                                <div class="mini-stat-icon avatar-sm align-self-center rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-check-circle font-size-24"></i>
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
                                    <p class="text-muted font-weight-medium">Pending Bills</p>
                                    <h4 class="mb-0">17</h4>
                                </div>
                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-hourglass font-size-24"></i>
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
                                    <p class="text-muted font-weight-medium">Total Bill</p>
                                    <h4 class="mb-0">$24,952,382.30</h4>
                                </div>
                                <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                    <span class="avatar-title">
                                        <i class="bx bx-package font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
