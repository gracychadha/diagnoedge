@extends("admin.layout.admin-master")
@section("title", "Category | Diagnoedge")
@section("content")
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Test Category</a></li>
            </ol>
        </div>

        <!-- Success Notification -->
        @if(session('success'))
        <div class="alert alert-success solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            <strong>Success!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
        @endif

        <!-- Error Notification -->
        @if($errors->any())
        <div class="alert alert-danger solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
            <strong>Error!</strong> Please check the form below for errors.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
        </div>
        @endif

        <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
            <div class="input-group search-area d-inline-flex me-2">
                <input type="text" class="form-control" placeholder="Search here" id="categorySearch">
                <div class="input-group-append">
                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                </div>
            </div>
            <div class="ms-auto">
                <button class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#addCategoryModal">+ Add Category</button>
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
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($categories as $key => $cat)
                                    <tr>
                                        <td>{{ $categories->firstItem() + $key }}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>
                                            @if($cat->status === 'Active')
                                                <span class="badge badge-success light">Active</span>
                                            @else
                                                <span class="badge badge-danger light">InActive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Edit button -->
                                                <button class="btn btn-sm btn-info me-2 editBtn"
                                                    data-id="{{ $cat->id }}"
                                                    data-name="{{ $cat->name }}"
                                                    data-status="{{ $cat->status }}"
                                                    data-bs-toggle="modal" data-bs-target="#editCategoryModal">
                                                    <i class="fa fa-pencil"></i>
                                                </button>

                                                <!-- Delete form -->
                                                <form action="{{ route('categories.destroy', $cat) }}" method="POST" class="d-inline deleteForm">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger confirmDelete">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-4">No categories found.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            
                            <!-- Pagination -->
                            @if($categories->hasPages())
                            <div class="p-3 border-top">
                                {{ $categories->links() }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('categories.store') }}" method="POST" id="addCategoryForm">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Add Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" class="form-control" required>
                                        <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="InActive" {{ old('status') == 'InActive' ? 'selected' : '' }}>InActive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('categories.update') }}" method="POST" id="editCategoryForm">
                        @csrf
                        <input type="hidden" name="id" id="edit_id">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="edit_name" class="form-control" required>
                                    @error('name')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select name="status" id="edit_status" class="form-control" required>
                                        <option value="Active">Active</option>
                                        <option value="InActive">InActive</option>
                                    </select>
                                    @error('status')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        
        // Edit button click handler
        document.querySelectorAll('.editBtn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const name = this.getAttribute('data-name');
                const status = this.getAttribute('data-status');

                console.log("Editing category:", {id, name, status});

                // Set values in edit form
                document.getElementById('edit_id').value = id;
                document.getElementById('edit_name').value = name;
                document.getElementById('edit_status').value = status;

                // Show success message in console for debugging
                console.log("Edit form populated successfully");
            });
        });

        // Delete confirmation
        document.querySelectorAll('.deleteForm').forEach(function(form) {
            form.addEventListener('submit', function(e) {
                if (!confirm('Are you sure you want to delete this category? This action cannot be undone.')) {
                    e.preventDefault();
                }
            });
        });

        // Search functionality
        const search = document.getElementById('categorySearch');
        if (search) {
            search.addEventListener('input', function() {
                const query = this.value.toLowerCase();
                document.querySelectorAll('#example5 tbody tr').forEach(function(row) {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(query) ? '' : 'none';
                });
            });
        }

        // Auto-hide alerts after 5 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);

        // Reset add form when modal is closed
        $('#addCategoryModal').on('hidden.bs.modal', function () {
            document.getElementById('addCategoryForm').reset();
        });

        // Reset edit form when modal is closed
        $('#editCategoryModal').on('hidden.bs.modal', function () {
            document.getElementById('editCategoryForm').reset();
        });
    });
</script>
@endpush