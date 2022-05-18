<x-app-layout>
    <x-backend.page-title-breadcrumb title="Doctors List" nav-title="Doctors">
    </x-backend.page-title-breadcrumb>

    <!-- end page title -->
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div></div>
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('backend.doctors.create') }}">
                        <button type="button" class="btn btn-primary waves-effect waves-light mb-4">
                            <i class="bx bx-plus font-size-16 align-middle mr-2"></i> New Doctor
                        </button>
                    </a>
                    <table class="table table-bordered dt-responsive nowrap "
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Sr. No</th>
                                <th>Title</th>
                                <th>Name</th>
                                <th>Contact No</th>
                                <th>Email</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td> {{ $loop->index + 1 }} </td>
                                    <td> {{ $doctor->meta->get('title') }} </td>
                                    <td> {{ $doctor->name }} </td>
                                    <td> {{ $doctor->contacts->pull('mobile.working_line') }} </td>
                                    <td> {{ $doctor->email }} </td>
                                    <td>
                                        <a href="{{ route('backend.doctors.show', $doctor->uuid) }}">
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0" title="View Profile">
                                                <i class="mdi mdi-eye"></i>
                                            </button>
                                        </a>

                                        <a href="{{ route('backend.doctors.edit', $doctor->uuid) }}">
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0" title="Update Profile">
                                                <i class="mdi mdi-lead-pencil"></i>
                                            </button>
                                        </a>
                                        <a href=" javascript:void(0) ">
                                            <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light mb-2 mb-md-0" title="Deactivate Profile" data-id="{{ $doctor->uuid }}" id="delete-doctor">
                                                <i class="mdi mdi-trash-can"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-12 text-center mt-3">
                        <div class="d-flex justify-content-start">
                            Showing {{ $doctors->currentPage() }} to {{ $doctors->perPage() }} of
                            {{ $doctors->count() }} entries
                        </div>
                        <div class="d-flex justify-content-end">
                            {{ $doctors->links('vendor.pagination.customize') }}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</x-app-layout>
