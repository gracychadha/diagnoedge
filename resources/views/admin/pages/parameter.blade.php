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

            @if(session('success'))
                <script>
                    const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 4000 });
                    Toast.fire({ icon: 'success', title: '{{ session('success') }}' });
                </script>
            @endif

            <!-- Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Price</th>
                                            <th>Tests</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($parameters as $param)
                                            <tr>
                                                <td class="fw-bold">{{ Str::limit($param->title, 40) }}</td>
                                                <td><code>{{ $param->slug }}</code></td>
                                                <td>₹{{ number_format($param->price, 2) }}</td>
                                                <td>
                                                    @php
                                                        $ids = collect();
                                                        if ($param->detail_id) {
                                                            if (is_string($param->detail_id)) {
                                                                $ids = collect(json_decode($param->detail_id, true));
                                                            } elseif (is_array($param->detail_id)) {
                                                                $ids = collect($param->detail_id);
                                                            } else {
                                                                $ids = collect([$param->detail_id]);
                                                            }
                                                        }
                                                    @endphp
                                                    @if($ids->count())
                                                        @foreach(\App\Models\Test::find($ids->toArray()) as $test)
                                                            @if($test)
                                                                <span class="badge bg-info me-1">{{ $test->title }}</span>
                                                            @endif
                                                        @endforeach
                                                    @else
                                                        <span class="text-muted">—</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge light badge-{{ $param->status == 'active' ? 'success' : 'danger' }}">
                                                        {{ ucfirst($param->status) }}
                                                    </span>
                                                </td>
                                                <td>{{ $param->created_at->format('d M Y') }}</td>
                                                <td>
                                                    <button class="btn btn-sm btn-info light" data-bs-toggle="modal"
                                                        data-bs-target="#viewModal{{ $param->id }}">View</button>
                                                    <button class="btn btn-sm btn-warning light" data-bs-toggle="modal"
                                                        data-bs-target="#editModal{{ $param->id }}">Edit</button>
                                                    <form action="{{ route('admin.parameters.destroy', $param) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger light"
                                                            onclick="return confirm('Delete?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center py-5">No parameters found.</td>
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

    {{-- Load Tests --}}
    @php $tests = \App\Models\Test::where('status', 'active')->orderBy('title')->get(); @endphp

    <!-- ADD MODAL  -->
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
                                <label class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="paramAddTitle" class="form-control" required>
                            </div>
                            {{-- <div class="col-md-4">
                                <label class="form-label">Slug <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">/</span>
                                    <input type="text" id="paramAddSlug" name="slug" class="form-control"
                                        placeholder="Auto-generated from title" required>
                                </div>
                                <div class="form-text">Auto-generates when you type in Title field</div>
                            </div> --}}
                            <div class="col-md-4">
                                <label class="form-label">Price <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="price" class="form-control" value="0.00" required>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Tests <small class="text-muted">(Hold Ctrl/Cmd to select
                                        multiple)</small></label>
                                <select name="detail_id[]" multiple class="form-control" style="height:150px;">
                                    @foreach($tests as $test)
                                        <option value="{{ $test->id }}">{{ $test->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="3"
                                    placeholder="Enter parameter description..."></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Overview</label>
                                <textarea name="overview" class="form-control summernote" rows="5"></textarea>
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

    <!-- VIEW MODAL -->
        <div class="modal fade" id="viewModal{{ $param->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">View Parameter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td>{{ $param->title }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td><code>{{ $param->slug }}</code></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>₹{{ number_format($param->price, 2) }}</td>
                            </tr>
                            <tr>
                                <th>Tests</th>
                                <td>
                                    @php
                                        $ids = collect($param->detail_id ? (is_string($param->detail_id) ? json_decode($param->detail_id, true) : (is_array($param->detail_id) ? $param->detail_id : [$param->detail_id])) : []);
                                    @endphp
                                    @if($ids->count())
                                        @foreach(\App\Models\Test::find($ids) as $test)
                                            @if($test)<span class="badge bg-primary me-1">{{ $test->title }}</span>@endif
                                        @endforeach
                                    @else
                                        <em class="text-muted">—</em>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><span class="badge bg-{{ $param->status == 'active' ? 'success' : 'danger' }}">{{ ucfirst($param->status) }}</span></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{!! $param->description ?: '<em>—</em>' !!}</td>
                            </tr>
                            <tr>
                                <th>Overview</th>
                                <td>{!! nl2br(e($param->overview)) ?: '<em>—</em>' !!}</td>
                            </tr>
                            <tr>
                                <th>Created</th>
                                <td>{{ $param->created_at->format('d M Y, h:i A') }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- EDIT MODALS  -->
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
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" value="{{ $param->title }}"
                                        class="form-control param-edit-title" data-slug-target="paramEditSlug{{ $param->id }}"
                                        required>
                                </div>
                                {{-- <div class="col-md-4">
                                    <label class="form-label">Slug</label>
                                    <div class="input-group">
                                        <span class="input-group-text">/</span>
                                        <input type="text" id="paramEditSlug{{ $param->id }}" name="slug"
                                            value="{{ $param->slug }}" class="form-control param-slug-field" readonly>
                                    </div>
                                    <div class="form-text">Auto-updates when you change title</div>
                                </div> --}}<div class="col-md-4">
                                    <label class="form-label">Price <span class="text-danger">*</span></label>
                                    <input type="number" step="0.01" name="price" value="{{ $param->price }}"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Tests</label>
                                    <select name="detail_id[]" multiple class="form-control" style="height:150px;">
                                        @php
                                            $selected = collect();
                                            if ($param->detail_id) {
                                                if (is_string($param->detail_id)) {
                                                    $selected = collect(json_decode($param->detail_id, true));
                                                } elseif (is_array($param->detail_id)) {
                                                    $selected = collect($param->detail_id);
                                                } else {
                                                    $selected = collect([$param->detail_id]);
                                                }
                                            }
                                        @endphp
                                        @foreach($tests as $test)
                                            <option value="{{ $test->id }}" {{ $selected->contains($test->id) ? 'selected' : '' }}>
                                                {{ $test->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="active" {{ $param->status == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="inactive" {{ $param->status == 'inactive' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control summernote"
                                        rows="3">{!! $param->description !!}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Overview</label>
                                    <textarea name="overview" class="form-control summernote"
                                        rows="5">{!! $param->overview !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
        console.log('🎉 PARAMETERS PAGE - UNIQUE & WORKING SLUG SYSTEM');

        function generateSlug(text) {
            return text
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-+|-+$/g, '')
                .substring(0, 50);
        }

        // ADD MODAL - UNIQUE IDs
        function setupAddSlug() {
            const title = document.getElementById('paramAddTitle');
            const slug = document.getElementById('paramAddSlug');
            if (!title || !slug) return;

            title.oninput = title.onkeyup = function () {
                const newSlug = generateSlug(this.value);
                slug.value = newSlug;
                slug.style.backgroundColor = newSlug ? '#d1e7dd' : '#f8d7da';
                slug.style.borderColor = newSlug ? '#198754' : '#dc3545';
                console.log('ADD SLUG:', newSlug);
            };
            console.log('Add modal slug ready!');
        }

        // EDIT MODALS - UNIQUE CLASSES
        function setupEditSlugs() {
            document.querySelectorAll('.param-edit-title').forEach(title => {
                const slugId = title.getAttribute('data-slug-target');
                const slugField = document.getElementById(slugId);
                if (!slugField) return;

                title.oninput = title.onkeyup = function () {
                    const newSlug = generateSlug(this.value);
                    slugField.value = newSlug;
                    slugField.style.backgroundColor = '#fff3cd';
                    slugField.style.borderColor = '#ffc107';
                    console.log('EDIT SLUG:', newSlug);
                };
            });
            console.log('Edit modals slug ready!');
        }

        // Run when page loads
        document.addEventListener('DOMContentLoaded', function () {
            setupAddSlug();
            setupEditSlugs();
        });

        // Run again when modals open
        document.addEventListener('shown.bs.modal', function (e) {
            if (e.target.id === 'addParameterModal') {
                setTimeout(setupAddSlug, 100);
            }
            if (e.target.id.includes('editModal')) {
                setTimeout(setupEditSlugs, 100);
            }
        });

        console.log('SLUG SYSTEM IS 100% READY AND UNIQUE!');
    </script>

    <style>
        #paramAddSlug,
        .param-slug-field {
            transition: all 0.3s ease;
        }
    </style>
@endpush