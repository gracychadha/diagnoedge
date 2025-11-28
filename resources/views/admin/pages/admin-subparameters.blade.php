{{-- resources/views/admin/pages/admin-subparameters.blade.php --}}
@extends("admin.layout.admin-master")

@section("title", "Health Packages / Sub Parameters | Diagnoedge")

@section("content")
    <div class="content-body">
        <div class="container-fluid">

            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Health Packages</li>
                </ol>
            </div>

            <!-- Header -->
            <div class="form-head d-flex mb-3 mb-md-4 align-items-center justify-content-between">
                <div class="input-group search-area w-25">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search packages...">
                    <span class="input-group-text"><i class="flaticon-381-search-2"></i></span>
                </div>
                <button class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#addModal">
                    + Add Health Package
                </button>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <script>Swal.fire('Success!', '{{ session('success') }}', 'success');</script>
            @endif

            <!-- Table -->
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped" id="packageTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Main Parameters</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subparameters as $index => $sub)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ Str::limit($sub->title, 40) }}</td>
                                        <td>
                                            @forelse($sub->parameters as $param)
                                                <span class="badge bg-info me-1">{{ $param->title }}</span>
                                            @empty
                                                <span class="text-muted">—</span>
                                            @endforelse
                                        </td>
                                        <td><strong>₹{{ number_format($sub->price ?? 0, 2) }}</strong></td>
                                        <td>
                                            <span
                                                class="badge light badge-{{ $sub->status == 'active' ? 'success' : 'danger' }}">
                                                {{ ucfirst($sub->status) }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-info light" data-bs-toggle="modal"
                                                data-bs-target="#view{{ $sub->id }}" title="View">
                                                View
                                            </button>
                                            <button class="btn btn-sm btn-warning light" data-bs-toggle="modal"
                                                data-bs-target="#edit{{ $sub->id }}" title="Edit">
                                                Edit
                                            </button>
                                            <form action="{{ route('admin-subparameters.destroy', $sub) }}" method="POST"
                                                class="d-inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger light delete-btn"
                                                    title="Delete">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-5 text-muted">No health packages found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Load Data --}}
    @php
        $parameters = \App\Models\Parameter::where('status', 'active')->orderBy('title')->get();
        $tests = \App\Models\Test::orderBy('title')->get();
    @endphp

    {{-- ADD MODAL --}}
    <div class="modal fade" id="addModal">
        <div class="modal-dialog modal-xl">
            <form action="{{ route('admin-subparameters.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Health Package</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label>Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Price (₹)</label>
                                <input type="number" step="0.01" name="price" class="form-control" value="0">
                            </div>
                            <div class="col-md-6">
                                <label>Main Parameters <span class="text-danger">*</span></label>
                                <select name="parameter_id[]" multiple class="form-control" style="height:200px;" required>
                                    @foreach($parameters as $p)
                                        <option value="{{ $p->id }}">{{ $p->title }}</option>
                                    @endforeach
                                </select>
                                <small class="text-muted">Hold Ctrl/Cmd to select multiple</small>
                            </div>
                            <div class="col-md-6">
                                <label>Linked Tests</label>
                                <select name="test_ids[]" multiple class="form-control" style="height:200px;">
                                    @foreach($tests as $test)
                                        <option value="{{ $test->id }}">{{ $test->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            <div class="col-md-6">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label>Description</label>
                                <textarea name="description" class="summernote"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Package</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- VIEW & EDIT MODALS --}}
    @foreach($subparameters as $sub)
        <!-- View Modal -->
        <div class="modal fade" id="view{{ $sub->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>{{ $sub->title }}</h5><button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Parameters:</strong>
                            @forelse($sub->parameters as $p)<span class="badge bg-info me-1">{{ $p->title }}</span>@empty —
                            @endforelse
                        </p>
                        <p><strong>Price:</strong> ₹{{ number_format($sub->price ?? 0, 2) }}</p>
                        <p><strong>Status:</strong> <span
                                class="badge badge-{{ $sub->status == 'active' ? 'success' : 'danger' }}">{{ ucfirst($sub->status) }}</span>
                        </p>
                        @if($sub->image)<img src="{{ Storage::url($sub->image) }}" class="img-fluid rounded"
                        style="max-height:300px;">@endif
                        @if($sub->description)
                        <div class="mt-3 border p-3 bg-light">{!! $sub->description !!}</div>@endif
                        @if($sub->tests->count())
                            <p class="mt-3"><strong>Tests:</strong>
                                @foreach($sub->tests as $t)<span class="badge bg-primary me-1">{{ $t->title }}</span>@endforeach
                            </p>
                        @endif
                    </div>
                    <div class="modal-footer"><button class="btn btn-primary" data-bs-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <!-- Edit Modal -->
        <div class="modal fade" id="edit{{ $sub->id }}">
            <div class="modal-dialog modal-xl">
                <form action="{{ route('admin-subparameters.update', $sub) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5>Edit: {{ $sub->title }}</h5><button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6"><label>Title *</label><input type="text" name="title"
                                        value="{{ $sub->title }}" class="form-control" required></div>
                                <div class="col-md-6"><label>Price</label><input type="number" name="price"
                                        value="{{ $sub->price ?? 0 }}" class="form-control"></div>

                                <!-- FIXED: Main Parameters -->
                                <div class="col-md-6">
                                    <label>Main Parameters <span class="text-danger">*</span></label>
                                    <select name="parameter_id[]" multiple class="form-control" style="height:200px;" required>
                                        @foreach($parameters as $p)
                                            <option value="{{ $p->id }}" {{ is_array($sub->parameter_id) && in_array($p->id, $sub->parameter_id) ? 'selected' : '' }}>
                                                {{ $p->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <small class="text-muted">Hold Ctrl/Cmd to select multiple</small>
                                </div>

                                <!-- Linked Tests (Correct) -->
                                <div class="col-md-6">
                                    <label>Linked Tests</label>
                                    <select name="test_ids[]" multiple class="form-control" style="height:200px;">
                                        @foreach($tests as $t)
                                            <option value="{{ $t->id }}" {{ $sub->tests->contains($t->id) ? 'selected' : '' }}>
                                                {{ $t->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if($sub->image)
                                        <div class="mt-2">
                                            <img src="{{ Storage::url($sub->image) }}" class="rounded" style="max-height:100px;">
                                            <small class="text-muted d-block">Current image</small>
                                        </div>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active" {{ $sub->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $sub->status == 'inactive' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label>Description</label>
                                    <textarea name="description" class="summernote">{{ $sub->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Package</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection

@push('scripts')
    <script>
        $(function () {
            $('.summernote').summernote({ height: 200 });
            $('#searchInput').on('keyup', function () {
                var value = $(this).val().toLowerCase();
                $("#packageTable tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $('.delete-btn').click(function (e) {
                e.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: 'Delete?', text: "This cannot be undone!", icon: 'warning',
                    showCancelButton: true, confirmButtonText: 'Yes, delete!'
                }).then((result) => { if (result.isConfirmed) form.submit(); });
            });
        });
    </script>
@endpush