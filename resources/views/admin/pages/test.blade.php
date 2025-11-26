{{-- resources/views/admin/pages/test.blade.php --}}
@extends("admin.layout.admin-master")
@section("title", "Test Details | Diagnoedge")

@section("content")
<div class="content-body">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Test Details</li>
            </ol>
        </div>

        <!-- Search + Add Button -->
        <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
            <div class="input-group search-area d-inline-flex me-2">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                </div>
            </div>
            <div class="ms-auto">
                <button class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#addTestModal">
                    + Add Test
                </button>
            </div>
        </div>

        <!-- SweetAlert2 Success Toast - Top Right, Small & Clean -->
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 7000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });

                    Toast.fire({
                        icon: 'success',
                        title: '{{ session('success') }}'
                    });
                });
            </script>
        @endif

        <!-- Table -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                                <thead>
                                    <tr>
                                        <th width="80">Icon</th>
                                        <th>Title</th>
                                        <th width="120">Status</th>
                                        <th width="160">Created At</th>
                                        <th width="160" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($tests as $test)
                                    <tr>
                                        <td>
                                            @if($test->icon)
                                                <img src="{{ asset('storage/' . $test->icon) }}" alt="{{ $test->title }}" width="50" class="rounded">
                                            @else
                                                <div class="bg-light rounded d-flex align-items-center justify-content-center" style="width:50px;height:50px;">
                                                    <i class="fas fa-vial text-muted fs-4"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="patient-info ps-0">
                                            <span class="text-nowrap fw-600">{{ $test->title }}</span>
                                        </td>
                                        <td>
                                            <span class="badge light badge-{{ $test->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($test->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <small class="d-block">{{ $test->created_at->format('d M, Y') }}</small>
                                           
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-info light me-2" data-bs-toggle="modal" data-bs-target="#viewModal{{ $test->id }}">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning light me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $test->id }}">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <form action="{{ route('admin.tests.destroy', $test) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger light" 
                                                        onclick="return confirm('Delete this test permanently?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-5 text-muted">
                                            <i class="fas fa-vial fa-3x mb-3 text-muted"></i>
                                            <p>No tests found. Click "+ Add Test" to create one.</p>
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

<!-- Add Modal -->
<div class="modal fade" id="addTestModal">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.tests.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 mb-3">
                            <label class="text-label">Test Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Complete Blood Count" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label class="text-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control default-select" required>
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="text-label">Icon (Optional)</label>
                            <input type="file" name="icon" class="form-control" accept="image/*">
                            <small class="text-muted">Recommended size: 100x100px</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Test</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- View Modal -->
@foreach($tests as $test)
<div class="modal fade" id="viewModal{{ $test->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">View Test</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Table Layout -->
            <table class="table table-bordered table-striped mb-0">

                <tr>
                    <th>Title :</th>
                    <td>{{ $test->title }}</td>

                    <th>Icon :</th>
                    <td>
                        @if($test->icon)
                            <img src="{{ asset('storage/' . $test->icon) }}" 
                                 width="80" 
                                 class="rounded">
                        @else
                            <span class="text-muted">No Icon</span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Status :</th>
                    <td>
                        <span class="badge bg-{{ $test->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($test->status) }}
                        </span>
                    </td>

                    <th>Created On :</th>
                    <td>
                        {{ $test->created_at->format('d M Y, h:i A') }}
                    </td>
                </tr>

            </table>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>
@endforeach



<!-- Edit Modal -->
@foreach($tests as $test)
<div class="modal fade" id="editModal{{ $test->id }}">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('admin.tests.update', $test) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Test</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8 mb-3">
                            <label class="text-label">Test Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ $test->title }}" class="form-control" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label class="text-label">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control default-select" required>
                                <option value="active" {{ $test->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $test->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="text-label">Icon (Leave blank to keep current)</label>
                            <input type="file" name="icon" class="form-control" accept="image/*">
                            @if($test->icon)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $test->icon) }}" width="80" class="rounded">
                                    <small class="text-muted d-block">Current icon</small>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Test</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection

