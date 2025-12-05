@extends("admin.layout.admin-master")
@section("title", "Booking Leads | Diagnoedge Dashboard")
@section("content")
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Appointment</a></li>
                </ol>
            </div>
            <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
                <div class="input-group search-area d-inline-flex me-2">
                    <input type="text" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                    </div>
                </div>
                <div class="ms-auto">
                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded add-appointment" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">+ Book Appointment</a>
                    <a href="doctor-list.html" class="btn btn-primary btn-rounded">Doctor Schedule</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">

                                <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="checkbox text-end align-self-center">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input" id="checkAll"
                                                            required="">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($bookings as $booking)
                                            <tr>
                                                <td>
                                                    <div class="checkbox text-end align-self-center">
                                                        <div class="form-check custom-checkbox ">
                                                            <input type="checkbox" class="form-check-input" id="customCheckBox1"
                                                                required="">
                                                            <label class="form-check-label" for="customCheckBox1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="patient-info ps-0">

                                                    <span class="text-nowrap ms-2">{{ $booking->name }}</span>
                                                </td>

                                                <td>{{ $booking->mobile }}</td>


                                                <td>


                                                    <span>
                                                        <a class="btn btn-sm btn-danger light deleteBook"
                                                            data-id="{{ $booking->id }}">
                                                            <i class="fa fa-trash fs-18"></i>
                                                        </a>

                                                    </span>

                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-5 text-muted">
                                                    <i class="fas fa-vial fa-3x mb-3"></i><br>
                                                    No Booking Leads Found
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
