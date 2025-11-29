{{-- resources/views/admin/pages/health-risks.blade.php --}}
@extends("admin.layout.admin-master")
@section("title", "Health Risks | Diagnoedge")

@section("content")
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Health Risks</li>
            </ol>
        </div>

        <div class="form-head d-flex mb-4 align-items-center justify-content-between">
            <h4 class="mb-0">Manage Health Risks</h4>
            <button class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#addModal">
                + Add Health Risk
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
                                        <th>Icon</th>
                                        <th>Title</th>
                                        {{-- <th>Slug</th> --}}
                                        {{-- <th>Parameters</th> --}}
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($healthRisks as $risk)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                @if($risk->icon)
                                                    <img src="{{ asset('storage/' . $risk->icon) }}" width="40" class="rounded-circle">
                                                @else
                                                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center" style="width:40px;height:40px;">
                                                        <i class="fas fa-image "></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td class="">{{ Str::limit($risk->title, 25) }}</td>
                                            {{-- <td><code class="text-dark">{{ $risk->slug }}</code></td> --}}
                                            {{-- <td>
                                                @php
                                                    $paramIds = is_array($risk->parameter_id) ? $risk->parameter_id : json_decode($risk->parameter_id, true);
                                                @endphp
                                                @if($paramIds && count($paramIds))
                                                    @foreach(\App\Models\Parameter::find($paramIds) as $param)
                                                        @if($param)
                                                            <span class="badge bg-info  me-1 mb-1">{{ $param->title }}</span>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <em class="text-muted">—</em>
                                                @endif
                                            </td> --}}
                                            <td>
                                                <span class="badge light badge-{{ $risk->status == 'active' ? 'success' : 'danger' }} px-3 py-2">
                                                    {{ ucfirst($risk->status) }}
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <button class="btn btn-sm btn-info light me-1" data-bs-toggle="modal"
                                                    data-bs-target="#viewModal{{ $risk->id }}"><i class="fas fa-eye"></i></button>
                                                <button class="btn btn-sm btn-warning light me-1" data-bs-toggle="modal"
                                                    data-bs-target="#editModal{{ $risk->id }}"><i class="fas fa-edit"></i></button>
                                                <button type="button" class="btn btn-sm btn-danger light delete-risk"
                                                    data-id="{{ $risk->id }}"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="7" class="text-center py-5 text-muted">No health risks found.</td></tr>
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

@php $parameters = \App\Models\Parameter::where('status', 'active')->orderBy('title')->get(); @endphp

<!-- ADD MODAL -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-xl">
        <form action="{{ route('health-risks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Add New Health Risk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="add_title" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Slug <small class="text-muted">(auto-generated)</small></label>
                            <input type="text" name="slug" id="add_slug" class="form-control" readonly>
                        </div>

                        <div class="col-md-4">
                            <label>Icon/Image <span class="text-danger">*</span></label>
                            <input type="file" name="icon" class="form-control" accept="image/*" required>
                        </div>

                        <div class="col-md-8">
                            <label>Related Parameters <span class="text-danger">*</span></label>
                            <select name="parameter_id[]" multiple class="form-control" style="height:180px;" required>
                                @foreach($parameters as $param)
                                    <option value="{{ $param->id }}">{{ $param->title }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold Ctrl/Cmd to select multiple</small>
                        </div>

                        <div class="col-md-4">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label>Description</label>
                            <textarea name="description" id="add_description" class="summernote"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Health Risk</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- VIEW & EDIT MODALS -->
@foreach($healthRisks as $risk)
<!-- VIEW MODAL -->
<div class="modal fade" id="viewModal{{ $risk->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Health Risk Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <table class="table table-bordered table-striped mb-0">
                <tr>
                    <th width="180">Title :</th>
                    <td>{{ $risk->title }}</td>
                    <th width="180">Slug :</th>
                    <td><code class="text-primary">{{ $risk->slug }}</code></td>
                </tr>
                <tr>
                    <th>Status :</th>
                    <td>
                        <span class="badge bg-{{ $risk->status == 'active' ? 'success' : 'danger' }}">
                            {{ ucfirst($risk->status) }}
                        </span>
                    </td>
                    <th>Created :</th>
                    <td>{{ $risk->created_at->format('d M Y, h:i A') }}</td>
                </tr>
                <tr>
                    <th>Icon :</th>
                    <td colspan="3">
                        @if($risk->icon)
                            <img src="{{ asset('storage/' . $risk->icon) }}" width="100" class="rounded">
                        @else
                            <em class="text-muted">No icon</em>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Related Parameters :</th>
                    <td colspan="3">
                        @php $paramIds = is_array($risk->parameter_id) ? $risk->parameter_id : json_decode($risk->parameter_id, true); @endphp
                        @if($paramIds && count($paramIds))
                            @foreach(\App\Models\Parameter::find($paramIds) as $param)
                                @if($param)<span class="badge bg-primary me-1 mb-1">{{ $param->title }}</span>@endif
                            @endforeach
                        @else
                            <em class="text-muted">None</em>
                        @endif
                    </td>
                </tr>
            </table>

            <div class="p-3">
                <p><strong>Description:</strong></p>
                <div class="border p-3 rounded bg-light">
                    {!! $risk->description ?: '<em class="text-muted">No description.</em>' !!}
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal{{ $risk->id }}">
    <div class="modal-dialog modal-xl">
        <form action="{{ route('health-risks.update', $risk) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Edit: {{ $risk->title }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-8">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" value="{{ old('title', $risk->title) }}" class="form-control edit-title" data-slug="#edit_slug_{{ $risk->id }}" required>
                        </div>
                        <div class="col-md-4">
                            <label>Slug</label>
                            <input type="text" name="slug" id="edit_slug_{{ $risk->id }}" value="{{ old('slug', $risk->slug) }}" class="form-control">
                            <small class="text-muted">You can edit if needed</small>
                        </div>

                        <div class="col-md-4">
                            <label>Icon/Image</label>
                            <input type="file" name="icon" class="form-control" accept="image/*">
                            @if($risk->icon)
                                <img src="{{ asset('storage/' . $risk->icon) }}" class="mt-2 rounded" width="80">
                            @endif
                        </div>

                        <div class="col-md-8">
                            <label>Related Parameters <span class="text-danger">*</span></label>
                            <select name="parameter_id[]" multiple class="form-control" style="height:180px;" required>
                                @php
                                    $selectedIds = is_array($risk->parameter_id) ? $risk->parameter_id : json_decode($risk->parameter_id, true);
                                @endphp
                                @foreach($parameters as $param)
                                    <option value="{{ $param->id }}" {{ is_array($selectedIds) && in_array($param->id, $selectedIds) ? 'selected' : '' }}>
                                        {{ $param->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ $risk->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $risk->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label>Description</label>
                            <textarea name="description" id="edit_description_{{ $risk->id }}" class="summernote">{!! old('description', $risk->description) !!}</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update Risk</button>
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
        // Summernote
        $('#add_description').summernote({ placeholder: 'Write description...', height: 200 });

        // Auto generate slug from title
        $('#add_title').on('input', function() {
            let slug = $(this).val().toLowerCase()
                .replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            $('#add_slug').val(slug);
        });

        // For edit modals
        $('.edit-title').on('input', function() {
            let target = $(this).data('slug');
            let slug = $(this).val().toLowerCase()
                .replace(/[^a-z0-9 -]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            $(target).val(slug);
        });

        // Re-init Summernote on edit modal open
        $('body').on('shown.bs.modal', function (e) {
            if (e.target.id.includes('editModal')) {
                const id = e.target.id.replace('editModal', '');
                $(`#edit_description_${id}`).summernote({
                    placeholder: 'Write description...',
                    height: 200
                });
            }
        });

        // Delete confirmation
        $(document).on('click', '.delete-risk', function () {
            const id = $(this).data('id');
            Swal.fire({
                title: 'Delete?',
                text: "This health risk will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `/health-risks/${id}`;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        });
    });
</script>
@endpush