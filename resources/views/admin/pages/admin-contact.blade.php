@extends("admin.layout.admin-master")
@section("title", "Contact us | Diagnoedge Dashboard")
@section("content")
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact Us</a></li>
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
                    <a href="javascript:void(0);" class="btn btn-light btn-rounded ">Delete Selected</a>
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
                                        @foreach($contact as $lead)
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

                                                    <span class="text-nowrap ms-2">{{ $lead->fullname }}</span>
                                                </td>
                                                <td class="text-primary">{{ $lead->email }}</td>
                                                <td>{{ $lead->phone }}</td>


                                                <td>
                                                    <span class="me-3">
                                                        <a href="javascript:void(0);" data-id="{{ $lead->id }}"
                                                            class="viewContact btn btn-sm btn-info light"><i class=" fa fa-eye fs-18"></i></a>
                                                    </span>
                                                  <span class="me-3">
                                                     <a href="javascript:void(0);" 
   data-id="{{ $lead->id }}" 
   class="editContact btn btn-sm btn-warning light"><i class="fa fa-pencil fs-18" ></i></a>
                                                  </span>

                                                    <span>
   <a class=" btn btn-sm btn-danger light   deleteApp" data-id="{{ $lead->id }}"><i class="fa fa-trash fs-18"></i></a>
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
       
        {{-- for view Appointment --}}
        <div class="modal fade" id="viewContact" tabindex="-1" aria-labelledby="viewContactLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewContactLabel">View Contact Lead</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <table class="table table-bordered table-striped mb-0">

                            <tr>
                                <th>
                                    Name :
                                </th>
                                <td id="c_name"></td>
                                <th>
                                    Email
                                </th>
                                <td id="c_email"></td>
                            </tr>
                            <tr>
                                <th>
                                    Phone :
                                </th>
                                <td id="c_phone"></td>
                                <th>
                                    Subject :
                                </th>
                                <td id="c_subject"></td>
                            </tr>
                           <tr>
                                <th>
                                    Message :
                                </th>
                                <td id="c_message" class="content" colspan="3"></td>
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
        <div class="modal fade" id="editContact" tabindex="-1" aria-labelledby="editContact" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editContactLabel">Edit Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="updateContactForm">
                            @csrf
                            <input type="hidden" id="edit_id" name="id">

                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Name:</label>
                                        <input type="text" name="fullname" class="form-control" id="edit_fullname">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email:</label>
                                       <input type="email" name="email" class="form-control" id="edit_email">

                                    </div>
                                </div>


                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone:</label>
                                        <input type="number" name="phone" class="form-control" id="edit_phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Subject:</label>
                                        <input type="text" name="subject" class="form-control" id="edit_subject">
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