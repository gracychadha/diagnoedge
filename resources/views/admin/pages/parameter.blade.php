{{-- resources/views/admin/pages/parameter.blade.php --}}
@extends("admin.layout.admin-master")
@section("title", "Parameters | Diagnoedge")

@section("content")
<div class="content-body">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Parameters</li>
            </ol>
        </div>

        <!-- Header: Search + Add Button -->
        <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
            <div class="input-group search-area d-inline-flex me-2">
                <input type="text" class="form-control" placeholder="Search parameters...">
                <div class="input-group-append">
                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                </div>
            </div>
            <div class="ms-auto">
                <button class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#addParameterModal">
                    + Add Parameter
                </button>
            </div>
        </div>

        <!-- SweetAlert2 Success Toast -->
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 4000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.onmouseenter = Swal.stopTimer;
                            toast.onmouseleave = Swal.resumeTimer;
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
                            <table class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Test</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($parameters as $param)
                                    <tr>
                                        <td class="fw-600">{{ Str::limit($param->title, 40) }}</td>
                                        <td>₹{{ number_format($param->price, 2) }}</td>
                                        <td>
                                            @if($param->detail_id)
                                                <small class="text-primary">{{ \App\Models\Test::find($param->detail_id)?->title ?? '—' }}</small>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge light badge-{{ $param->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($param->status) }}
                                            </span>
                                        </td>
                                        <td>
                                            <small class="d-block">{{ $param->created_at->format('d M, Y') }}</small>
                                            <small class="text-muted">{{ $param->created_at->format('h:i A') }}</small>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-info light me-2" data-bs-toggle="modal" data-bs-target="#viewModal{{ $param->id }}">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-sm btn-warning light me-2" data-bs-toggle="modal" data-bs-target="#editModal{{ $param->id }}">
                                                <i class="fa fa-pencil"></i>
                                            </button>
                                            <form action="{{ route('admin.parameters.destroy', $param) }}" method="POST" class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger light" 
                                                        onclick="return confirm('Delete this parameter?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-5 text-muted">
                                            <i class="fas fa-cogs fa-3x mb-3 text-muted"></i>
                                            <p>No parameters found. Click "+ Add Parameter" to create one.</p>
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

{{-- Pass all tests to modals --}}
@php $tests = \App\Models\Test::where('status', 'active')->orderBy('title')->get(); @endphp

<!-- Add Modal -->
<div class="modal fade" id="addParameterModal">
    <div class="modal-dialog modal-xl">
        <form action="{{ route('admin.parameters.store') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Parameter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="e.g. Fasting Required" required>
                        </div>
                        <div class="col-md-4">
                            <label>Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="price" class="form-control" value="0.00" required>
                        </div>

                        <div class="col-md-6">
                            <label>Test <small class="text-muted">(Optional)</small></label>
                            <select name="detail_id" class="form-control default-select">
                                <option value="">— No Test —</option>
                                @foreach($tests as $test)
                                    <option value="{{ $test->id }}">{{ $test->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Status</label>
                            <select name="status" class="form-control default-select" required>
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label>Description</label>
                            <textarea name="description" id="addDescription" class="form-control summernote"></textarea>
                        </div>

                        <div class="col-12">
                            <label>Overview (Detailed Info)</label>
                            <textarea name="overview" id="addOverview" class="form-control summernote"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Parameter</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- View Modal -->
@foreach($parameters as $param)
<div class="modal fade" id="viewModal{{ $param->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">View Parameter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <table class="table table-bordered table-striped mb-0">

                <tr>
                    <th width="220">Title :</th>
                    <td>{{ $param->title }}</td>
                </tr>

                <tr>
                    <th>Price :</th>
                    <td>₹{{ number_format($param->price, 2) }}</td>
                </tr>

                <tr>
                    <th>Test :</th>
                    <td>{{ \App\Models\Test::find($param->detail_id)?->title ?? '—' }}</td>
                </tr>

                <tr>
                    <th>Status :</th>
                    <td>
                        <span class="badge bg-{{ $param->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($param->status) }}
                        </span>
                    </td>
                </tr>

                <tr>
                    <th>Description :</th>
                    <td>{!! $param->description ?: '<em class="text-muted">—</em>' !!}</td>
                </tr>

                <tr>
                    <th>Overview :</th>
                    <td>
                        {!! $param->overview 
                            ? nl2br(e($param->overview)) 
                            : '<em class="text-muted">—</em>' 
                        !!}
                    </td>
                </tr>

                <tr>
                    <th>Created On :</th>
                    <td>{{ $param->created_at->format('d M Y, h:i A') }}</td>
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
@foreach($parameters as $param)
<div class="modal fade" id="editModal{{ $param->id }}">
    <div class="modal-dialog modal-xl">
        <form action="{{ route('admin.parameters.update', $param) }}" method="POST">
            @csrf @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Parameter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ $param->title }}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="price" value="{{ $param->price }}" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label>Test</label>
                            <select name="detail_id" class="form-control default-select">
                                <option value="">— No Test —</option>
                                @foreach($tests as $test)
                                    <option value="{{ $test->id }}" {{ $param->detail_id == $test->id ? 'selected' : '' }}>
                                        {{ $test->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Status</label>
                            <select name="status" class="form-control default-select" required>
                                <option value="active" {{ $param->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $param->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label>Description</label>
                            <textarea name="description" id="editDescription{{ $param->id }}" class="form-control summernote">{!! $param->description !!}</textarea>
                        </div>

                        <div class="col-12">
                            <label>Overview</label>
                            <textarea name="overview" id="editOverview{{ $param->id }}" class="form-control summernote">{!! $param->overview !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Parameter</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach
@endsection


@push('scripts')
<script>
    $(document).ready(function() {
        // Initialize Summernote
        $('.summernote').summernote({
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline']],
                ['font', ['strikethrough']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'table', 'hr']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });

        // Re-init Summernote when modal is shown (for Edit modals)
        $('[data-bs-toggle="modal"]').on('shown.bs.modal', function () {
            $(this).find('.summernote').summernote('reset');
            // Re-apply content after reset
            $(this).find('.summernote').each(function() {
                var content = $(this).val();
                $(this).summernote('code', content);
            });
        });
    });
</script>
@endpush