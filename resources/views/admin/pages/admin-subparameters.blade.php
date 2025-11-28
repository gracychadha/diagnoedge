@extends("admin.layout.admin-master")
@section("title", "Sub Parameters | Diagnoedge")
@section("content")
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item  active"><a href="javascript:void(0)">Sub Parameters</a></li>
                </ol>
            </div>

            <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
                <div class="me-auto d-lg-block">
                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded" data-bs-toggle="modal"
                        data-bs-target="#addAppointment">+ Add New</a>
                </div>
                <div class="input-group search-area ms-auto d-inline-flex me-2">
                    <input type="text" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="table-responsive">
                        <table id="example5"
                            class="table shadow-hover doctor-list table-bordered mb-4 dataTablesCard fs-14">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subparameter as $sub)

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="checkbox text-end align-self-center">
                                                    <div class="form-check custom-checkbox ">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label class="form-check-label"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="fw-600">{{ Str::limit($sub->title, 40) }}</td>
                                        <td>
                                            <span
                                                class="badge light badge-{{ $sub->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($sub->status) }}
                                            </span>
                                        </td>

                                        <td>
                                            <span class="me-3">
                                                <a href="javascript:void(0);" class="viewSubparameter" data-id="{{ $sub->id }}">
                                                    <i class="fa fa-eye fs-18"></i>
                                                </a>
                                            </span>
                                            <span class="me-3">
                                                <a href="javascript:void(0)" class="editSubparameter" data-id="{{ $sub->id }}"><i
                                                        class="fa fa-pencil fs-18 "></i></a>
                                            </span>
                                            <span>
                                                <a href="javascript:void(0);" class="deleteSubparameter" data-id="{{ $sub->id }}">
                                                    <i class="fa fa-trash fs-18 text-danger"></i>
                                                </a>
                                            </span>

                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-5 text-muted">
                                            <i class="fas fa-cogs fa-3x mb-3 text-muted"></i>
                                            <p>No Sub Parameter found. Click "+ Add Sub Parameter" to create one.</p>
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
    {{-- SElECT PARAMETERS FROM DATABASE FOR THIS --}}
   @php
$parameters = \App\Models\Parameter::where('status', 'active')->orderBy('title')->get();
@endphp

    {{-- ADD DOCTOR MODAL --}}
    <div class="modal fade" id="addAppointment" tabindex="-1" aria-labelledby="addAppointment" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAppointmentLabel">Add Sub-parameter Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    @if(session('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: '{{ session("success") }}',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'OK',
                            });
                        </script>
                    @endif
                    <form action="{{ url('/subparameters/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label">Title:</label>
                                    <input type="text" name="title" class="form-control" id="add-title"
                                        placeholder="Sub-parameter Title">
                                </div>
                            </div>
                            <div class="col-xl-6 ">
                                <div class="form-group">
                                    <label class="col-form-label">Slug<span class="required"> (Auto-generate)</span></label>
                                    <input type="text" id="add-slug" name="slug" class="form-control"
                                        placeholder="Auto generate by title" required="">
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-label">Status:</label>
                                    <select class="form-control" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Parameter <small
                                            class="text-muted">(Multiple)</small></label>
                                    <select name="subparameter_id" class="form-control default-select">
                                        <option value="">— No Parameter —</option>
                                        @foreach($parameters as $parameter)
                                            <option value="{{ $parameter->id }}">{{ $parameter->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label class="col-form-label">Description:</label>
                                    <textarea type="text" name="description" class="form-control" id="subparameterDexcription"
                                        placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-danger light me-3" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- VIEW DOCTOR MODAL --}}
    <div class="modal fade" id="viewSubparameter" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">View Subparameter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <table class="table table-bordered table-striped mb-0">
                    <tr>
                        <th>Title :</th>
                        <td id="v_title"></td>

                        <th>Slug :</th>
                        <td id="v_slug"></td>
                    </tr>

                    <tr>
                        <th>Status :</th>
                        <td id="v_status"></td>

                        <th>Parameter :</th>
                        <td id="v_parameter"></td>
                    </tr>

                    <tr>
                        <th>Description :</th>
                        <td colspan="3" id="v_description"></td>
                    </tr>
                </table>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    {{-- EDIT DOCTOR MODAL--}}
    <div class="modal fade" id="editSubparmeter" tabindex="-1">
        <div class="modal-dialog modal-lg modal-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Subparameter Details </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="editSubparameterForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">

                    <div class="modal-body">
                        <div class="row">

                            <div class="col-xl-6">
                               <div class="form-group">
                                 <label class="col-form-group">Title</label>
                                <input type="text" id="edit_title" name="title" class="form-control">
                               </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label class="col-form-group">Slug</label>
                                <input type="text" id="edit_slug" name="slug" class="form-control">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    
    <label class="col-form-group">Child Parameter</label>
    <select id="edit_parameter_id" name="parameter_id" class="form-control default-select">
       
        @foreach($parameters as $param)
            <option value="{{ $param->id }}">
                {{ $param->title }}
            </option>
        @endforeach
    </select>
                                </div>
                            </div>

                            <div class="col-xl-6">
                               <div class="form-group">
                                 <label class="col-form-group">Status</label>
                                <select id="edit_status" name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                               </div>
                            </div>

                            <div class="col-xl-12">
                               <div class="form-group">
                                 <label class="col-form-group">Description</label>
                                <textarea type="text" id="edit_description" name="description" class="form-control"></textarea>

                               </div>
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

@endsection