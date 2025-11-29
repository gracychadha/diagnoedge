@extends("admin.layout.admin-master")

@section("title", "Why Choose Us Section | Diagnoedge")

@section("content")
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Why Choose Us Section</li>
            </ol>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li><i class="fas fa-exclamation-triangle me-1"></i> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h4 class="mb-0"><i class="fas fa-star text-warning me-2"></i>Why Choose Us Section</h4>

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="is_active" id="statusSwitch"
                                value="1" {{ old('is_active', $section->is_active) ? 'checked' : '' }}>
                            <label class="form-check-label fw-bold" for="statusSwitch">
                                {{ $section->is_active ? 'Active' : 'Inactive' }}
                            </label>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('whychooseus.section.update', $section) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <ul class="nav nav-tabs mb-4" id="contentTabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#text-content">
                                        Text Content
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#big-card">
                                        Main Card
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#feature-cards">
                                        Feature Cards
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content border border-top-0 rounded-bottom p-4 ">
                                <!-- Text Content Tab -->
                                <div class="tab-pane fade show active" id="text-content">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label class="form-label fw-bold">Sub Title <span class="text-danger">*</span></label>
                                            <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title', $section->sub_title) }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-bold">Main Title <span class="text-danger">*</span></label>
                                            <input type="text" name="main_title" class="form-control" value="{{ old('main_title', $section->main_title) }}" required>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label fw-bold">Main Description <span class="text-danger">*</span></label>
                                            <textarea name="description_1" id="description1" class="form-control summernote">{{ old('description_1', $section->description_1) }}</textarea>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label fw-bold">Additional Description</label>
                                            <textarea name="description_2" id="description2" class="form-control summernote">{{ old('description_2', $section->description_2) }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Big Card Tab -->
                                <div class="tab-pane fade" id="big-card">
                                    <div class="row align-items-center g-4">
                                        <div class="col-md-3 text-center">
                                            <div class="preview-box  border rounded-3 p-4">
                                                @if($section->big_card_image)
                                                    <img src="{{ asset('storage/' . $section->big_card_image) }}" class="rounded-circle" style="width:100px;height:100px;object-fit:cover;">
                                                @else
                                                    <img src="{{ asset('images/default-award.png') }}" class="rounded-circle" style="width:100px;height:100px;">
                                                @endif
                                            </div>
                                            <small class="text-muted d-block mt-2">Current Icon</small>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row g-3">
                                                <div class="col-md-4">
                                                    <label class="form-label fw-bold">Number <span class="text-danger">*</span></label>
                                                    <input type="text" name="big_card_value" class="form-control" value="{{ old('big_card_value', $section->big_card_value) }}" required>
                                                </div>
                                                <div class="col-md-8">
                                                    <label class="form-label fw-bold">Text <span class="text-danger">*</span></label>
                                                    <input type="text" name="big_card_description" class="form-control" value="{{ old('big_card_description', $section->big_card_description) }}" required>
                                                </div>
                                                <div class="col-12">
                                                    <label class="form-label fw-bold">Upload New Icon</label>
                                                    <input type="file" name="big_card_image" class="form-control" accept="image/*">
                                                    <small>Recommended: 100×100px PNG/SVG</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Feature Cards Tab -->
                                <div class="tab-pane fade" id="feature-cards">
                                    <div class="row g-4">
                                        @for($i = 1; $i <= 4; $i++)
                                            <div class="col-lg-3 col-md-6">
                                                <div class="card h-100 shadow-sm">
                                                    <div class="card-body text-center">
                                                        <div class="mb-3">
                                                            @if($section->{"small_card_{$i}_image"})
                                                                <img src="{{ asset('storage/' . $section->{"small_card_{$i}_image"}) }}" class="rounded-circle mb-3" style="width:80px;height:80px;object-fit:cover;">
                                                            @else
                                                                <img src="{{ asset('images/default-icon.png') }}" class="rounded-circle mb-3" style="width:80px;height:80px;">
                                                            @endif
                                                        </div>
                                                        <input type="text" name="small_card_{{ $i }}_title" class="form-control mb-3"
                                                            value="{{ old("small_card_{$i}_title", $section->{"small_card_{$i}_title"}) }}" placeholder="Title" required>
                                                        <input type="file" name="small_card_{{ $i }}_image" class="form-control" accept="image/*">
                                                        <small>80×80px recommended</small>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-success btn-lg px-6">
                                    Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



{{-- At the bottom of your admin blade file, inside @endsection --}}

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#54ad4c',
            timer: 4000,
            timerProgressBar: true,
            toast: false,
            position: 'center',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        });
    });
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });

        // Fix checkbox value for is_active
        $('#statusSwitch').on('change', function() {
            $(this).val(this.checked ? 1 : 0);
        }).trigger('change');
    });
</script>
@endpush
@endsection