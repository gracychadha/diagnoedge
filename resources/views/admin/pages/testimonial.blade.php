@extends("admin.layout.admin-master")
@section("title", "Testimonial | Diagnoedge")
@section("content")
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Testimonial Details</a></li>
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
                        data-bs-target="#exampleModal">+ Add Testimonial</a>

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
                                            <th>Designation</th>
                                            <th>Status</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
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
                                                <span>
                                                    <img src="images/avatar/1.jpg" alt="">
                                                </span>
                                                <span class="text-nowrap ms-2">Health Testimonial</span>
                                            </td>
                                            <td class="text-primary">Ceo</td>
                                            <td>Active</td>

                                            <td>
                                                <span class="me-3">
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#viewAppointment"><i
                                                            class="fa fa-eye fs-18"></i></a>
                                                </span>
                                                <span class="me-3">
                                                    <a href="" class="edit-appointment" data-bs-toggle="modal"
                                                        data-bs-target="#editAppointment"><i
                                                            class="fa fa-pencil fs-18 "></i></a>
                                                </span>
                                                <span>
                                                    <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                                </span>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- book Appointment modal --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Testimonialimonial Name<span class="required">*</span></label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Designation<span class="required">*</span></label>
                                    <input type="text" name="lastName" class="form-control" placeholder="Montana"
                                        required="">
                                </div>
                            </div>

                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Content<span class="required">*</span></label>
                                    <input type="text" name="place" class="form-control" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- for view Appointment --}}
        <div class="modal fade" id="viewAppointment" tabindex="-1" aria-labelledby="viewAppointmentLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewAppointmentLabel">View Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>
                                    Title :
                                </th>
                                <td>
                                    Testimonial
                                </td>
                                <th>
                                    Image
                                </th>
                                <td>
                                    <img src="images/avatar/1.jpg" alt=""
                                        style="border-radius: 50% ; height:50px ; width:50px;">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Status :
                                </th>
                                <td>
                                    Active
                                </td>

                            </tr>

                            <tr>

                                <th>
                                    Description
                                </th>
                                <td id="content" colspan="3">
                                    bla bla
                                </td>
                            </tr>

                        </table>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- for edit Appointment --}}
        <div class="modal fade" id="editAppointment" tabindex="-1" aria-labelledby="editAppointment" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editAppointmentLabel">Edit Testimonial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Testimonialimonial Name<span
                                                class="required">*</span></label>
                                        <input type="text" name="firstName" class="form-control" placeholder="Parsley"
                                            required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label class="text-label">Designation<span class="required">*</span></label>
                                        <input type="text" name="lastName" class="form-control" placeholder="Montana"
                                            required="">
                                    </div>
                                </div>

                                <div class="col-lg-6 mb-2">
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label class="text-label">Content<span class="required">*</span></label>
                                        <input type="text" name="place" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection