@extends("admin.layout.admin-master")
@section("title", "Appointment | Diagnoedge Dashboard")
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
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($appointments as $appointment)
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

                                                    <span class="text-nowrap ms-2">{{ $appointment->fullname }}</span>
                                                </td>
                                                <td class="text-primary">{{ $appointment->email }}</td>
                                                <td>{{ $appointment->phone }}</td>


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

                                        @endforeach

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
                        <h5 class="modal-title" id="exampleModalLabel">Book Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Title:</label>
                                        <select class="form-control">
                                            <option>Miss</option>
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" id="name1" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Last Name:</label>
                                        <input type="text" class="form-control" id="name2" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Date Of Appointment:</label>
                                        <input size="16" type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label mt-3">Form<span class="text-danger">*</span></label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" value="09:30"><span
                                            class="input-group-text"><i class="fas fa-clock"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label class="form-label mt-3">To<span class="text-danger">*</span></label>
                                    <div class="input-group clockpicker">
                                        <input type="text" class="form-control" value="10:30"><span
                                            class="input-group-text"><i class="fas fa-clock"></i></span>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Address :</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Mobile No:</label>
                                        <input type="number" class="form-control" id="moblie1" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email Id:</label>
                                        <input type="email" class="form-control" id="email1" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Consulting Doctor:</label>
                                        <select class="form-control">
                                            <option>Dr.HANI B BARADI</option>
                                            <option>Dr.NAJJIA N MAHMOUD</option>
                                            <option>Dr. SANKAR NAIDU ADUSUMILLI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Injury/Condition:</label>
                                        <input type="text" class="form-control" id="fever" placeholder="fever">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Note:</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
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
        {{-- for view Appointment --}}
        <div class="modal fade" id="viewAppointment" tabindex="-1" aria-labelledby="viewAppointmentLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewAppointmentLabel">View Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>
                                    Name :
                                </th>
                                <td id="a_name"></td>
                                <th>
                                    Email
                                </th>
                                <td id="a_email"></td>
                            </tr>
                            <tr>
                                <th>
                                    Phone :
                                </th>
                                <td id="a_phone"></td>
                                <th>
                                    Choose Doctor
                                </th>
                                <td id="a_doctor"></td>
                            </tr>
                            <tr>
                                <th>
                                    Package :
                                </th>
                                <td id="a_selectdepartment"></td>
                                <th>
                                    Appointment Date :
                                </th>
                                <td id="a_appointmentdate"></td>

                            </tr>
                            <tr>

                                <th>
                                    message
                                </th>
                                <td id="a_message" colspan="3"></td>
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
                        <h5 class="modal-title" id="editAppointmentLabel">Edit Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name:</label>
                                        <input type="text" name="fullname" class="form-control" id="edit_fullname"
                                            >
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email:</label>
                                        <input size="16" name="email" type="date" class="form-control" id="edit_email">
                                    </div>
                                </div>


                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone:</label>
                                        <input type="number" name="phone" class="form-control" id="edit_phone"
                                            >
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Choose Doctor:</label>
                                        <input type="text" name="choosedoctor" class="form-control"  id="edit_choosedoctor">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Select Department:</label>
                                        <input type="text" name="selectdepartment" class="form-control" id="edit_selectdepartment" >
                                    </div>
                                </div>


                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Appointment Date</label>
                                        <input type="date" name="appointmentdate" class="form-control" id="edit_appointmentdate"
                                            >
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Message :</label>
                                        <textarea class="form-control" name="message" id="edit_message"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection