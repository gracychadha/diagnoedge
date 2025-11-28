{{-- resources/views/admin/pages/parameter.blade.php --}}
@extends("admin.layout.admin-master")
@section("title", "Parameters | Diagnoedge")

@section("content")
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Parameters</li>
            </ol>
        </div>

        <div class="form-head d-flex mb-3 mb-md-4 align-items-center justify-content-between">
            <div class="input-group search-area w-25">
                <input type="text" class="form-control" placeholder="Search parameters...">
                <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
            </div>
            <button class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#addParameterModal">
                + Add Parameter
            </button>
        </div>

        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '{{ session("success") }}',
                    timer: 4000,
                    timerProgressBar: true,
                });
            </script>
        @endif

        <!-- Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        {{-- <th>Created</th> --}}
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($parameters as $index => $param)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="">{{ Str::limit($param->title, 40) }}</td>
                                            <td><code>{{ $param->slug }}</code></td>
                                            <td><strong>₹{{ number_format($param->price, 2) }}</strong></td>
                                            
                                            <td>
                                                <span class="badge light badge-{{ $param->status == 'active' ? 'success' : 'danger' }} px-3 py-2">
                                                    {{ ucfirst($param->status) }}
                                                </span>
                                            </td>
                                            {{-- <td>{{ $param->created_at->format('d M Y') }}</td> --}}
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info light me-1" data-bs-toggle="modal"
                                                    data-bs-target="#viewModal{{ $param->id }}" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-warning light me-1 me-1" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $param->id }}" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger light delete-param"
                                                    data-id="{{ $param->id }}" title="Delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-5 text-muted">No parameters found.</td>
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

{{-- Load Active Tests --}}
@php $tests = \App\Models\Test::where('status', 'active')->orderBy('title')->get(); @endphp

<!-- ADD MODAL -->
<div class="modal fade" id="addParameterModal" tabindex="-1">
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
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" placeholder="Enter parameter title" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="price" class="form-control" value="0.00" required>
                        </div>

                        <div class="col-md-8">
                            <label class="form-label">Related Tests</label>
                            <select name="detail_id[]" multiple class="form-control" style="height:150px;">
                                @foreach($tests as $test)
                                    <option value="{{ $test->id }}">{{ $test->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="add_description" class="summernote"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Overview</label>
                            <textarea name="overview" id="add_overview" class="summernote"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Parameter</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- VIEW MODAL FOR EACH PARAMETER -->
@foreach($parameters as $param)
<div class="modal fade" id="viewModal{{ $param->id }}" tabindex="-1">
    <div class="modal-dialog modal-lg modal-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Parameter Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Table Layout -->
            <table class="table table-bordered table-striped mb-0">

                <tr>
                    <th>Title :</th>
                    <td>{{ $param->title }}</td>

                    <th>Slug :</th>
                    <td><code>{{ $param->slug }}</code></td>
                </tr>

                <tr>
                    <th>Price :</th>
                    <td><strong>₹{{ number_format($param->price, 2) }}</strong></td>

                    <th>Status :</th>
                    <td>
                        <span class="badge bg-{{ $param->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($param->status) }}
                        </span>
                    </td>
                </tr>

                <tr class="w-full">
                    <th>Created On :</th>
                    <td>{{ $param->created_at->format('d M Y, h:i A') }}</td>
                </tr>
                <tr>
                    <th>Related Tests :</th>
                    <td>
                        @php
                            $ids = collect();
                            if ($param->detail_id) {
                                $ids = is_string($param->detail_id)
                                    ? collect(json_decode($param->detail_id, true))
                                    : collect($param->detail_id);
                            }
                        @endphp

                        @if($ids->count())
                            @foreach(\App\Models\Test::find($ids->toArray()) as $test)
                                @if($test)
                                    <span class="badge bg-primary me-1 mb-1">{{ $test->title }}</span>
                                @endif
                            @endforeach
                        @else
                            <em class="text-muted">No tests linked</em>
                        @endif
                    </td>
                </tr>

            </table>

            <!-- Extra Sections -->
            <div class="p-3">

                <p><strong>Description:</strong></p>
                <div class="border p-3 rounded  mb-3">
                    {!! $param->description ?: '<em class="text-muted">No description provided.</em>' !!}
                </div>

                <p><strong>Overview:</strong></p>
                <div class="border p-3 rounded ">
                    {!! $param->overview ?: '<em class="text-muted">No overview provided.</em>' !!}
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>

@endforeach

<!-- EDIT MODALS (kept same as before) -->
@foreach($parameters as $param)
<div class="modal fade" id="editModal{{ $param->id }}" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <form action="{{ route('admin.parameters.update', $param) }}" method="POST">
            @csrf @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Parameter: {{ $param->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $param->title) }}" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Price <span class="text-danger">*</span></label>
                            <input type="number" step="0.01" name="price" value="{{ old('price', $param->price) }}" class="form-control" required>
                        </div>

                        <div class="col-md-8">
                            <label>Tests</label>
                            <select name="detail_id[]" multiple class="form-control" style="height:150px;">
                                @php
                                    $selected = collect();
                                    if ($param->detail_id) {
                                        $selected = is_string($param->detail_id)
                                            ? collect(json_decode($param->detail_id, true))
                                            : collect($param->detail_id);
                                    }
                                @endphp
                                @foreach($tests as $test)
                                    <option value="{{ $test->id }}" {{ $selected->contains($test->id) ? 'selected' : '' }}>
                                        {{ $test->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ $param->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $param->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label>Description</label>
                            <textarea name="description" id="edit_description_{{ $param->id }}" class="summernote">{!! old('description', $param->description) !!}</textarea>
                        </div>
                        <div class="col-12">
                            <label>Overview</label>
                            <textarea name="overview" id="edit_overview_{{ $param->id }}" class="summernote">{!! old('overview', $param->overview) !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Parameter</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endforeach

@endsection

{{-- DELETE CONFIRMATION + SUMMERNOTE INIT --}}
@push('scripts')
<script>
    $(function () {
        // Summernote Init (Add Modal)
        $('#add_description, #add_overview').summernote({
            placeholder: 'Write here...',
            tabsize: 2,
            height: 200
        });

        // Re-init Summernote when Edit Modal opens
        document.addEventListener('shown.bs.modal', function (e) {
            if (e.target.id.includes('editModal')) {
                const id = e.target.id.replace('editModal', '');
                $(`#edit_description_${id}, #edit_overview_${id}`).summernote({
                    placeholder: 'Write here...',
                    tabsize: 2,
                    height: 200
                });
            }
        });
    });

    // SWEETALERT2 DELETE WITH CORRECT URL & CSRF
    $(document).on('click', '.delete-param', function () {
        const id = $(this).data('id');
        const row = $(this).closest('tr');

        Swal.fire({
            title: 'Are you sure?',
            text: "This parameter will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Create form with correct route & proper CSRF
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("admin.parameters.destroy", ":id") }}'.replace(':id', id);

                // Add CSRF token
                const csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);

                // Add _method = DELETE
                const methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                document.body.appendChild(form);
                form.submit();
            }
        });
    });
</script>
@endpush