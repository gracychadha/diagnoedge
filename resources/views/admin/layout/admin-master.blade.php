<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>@yield("title")</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="" />

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


    {{-- summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <!-- Style Css -->
    <link class="main-css" href="{{ asset('css/style.css') }}" rel="stylesheet" />
    {{-- data tables --}}
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- CSS (optional but recommended for styling) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>


    <div class="main-wrapper">
        {{-- header start --}}
        @include("admin.components.header")
        {{-- sidebar start --}}
        @include("admin.components.sidebar")
        {{-- content --}}
        @yield("content")
        {{-- copyright --}}
        @include("admin.components.copyright")
    </div>


    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    {{-- summernote js --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>
    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script>
        // for description to adjust in cell
        document.addEventListener("DOMContentLoaded", function () {
            const descCell = document.getElementById("content");
            if (descCell) {
                descCell.style.wordWrap = "break-word";
                descCell.style.overflowWrap = "break-word";
                descCell.style.whiteSpace = "normal";
            }
        });

        // Function to generate slug from title
        function generateSlug(title) {
            return title
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '') // Remove special characters
                .trim()
                .replace(/\s+/g, '-') // Replace spaces with hyphens
                .replace(/-+/g, '-'); // Replace multiple hyphens with a single hyphen
        }
        // Auto-generate slug for Add modal
        $('#add-title').on('input', function () {
            var title = $(this).val();
            var slug = generateSlug(title);
            $('#add-slug').val(slug);
        });

        // for summernote
        $(function () {
            $('#place').summernote({
                placeholder: 'Write place details here...',
                tabsize: 2,
                height: 200,           // editor height in px

            });
            $('#address').summernote({
                placeholder: 'Write place details here...',
                tabsize: 2,
                height: 200,           // editor height in px

            });
            $('#aboutCompany').summernote({
                placeholder: 'Write place details here...',
                tabsize: 2,
                height: 200,           // editor height in px

            });
        });
    </script>
    <script>
        function assignedDoctor() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery(".assigned-doctor").owlCarousel({
                loop: false,
                margin: 30,
                nav: true,
                autoplaySpeed: 3000,
                navSpeed: 3000,
                paginationSpeed: 3000,
                slideSpeed: 3000,
                smartSpeed: 3000,
                autoplay: false,
                rtl: true,
                dots: false,
                navText: [
                    '<i class="fa fa-caret-left"></i>',
                    '<i class="fa fa-caret-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 2,
                    },
                    767: {
                        items: 3,
                    },
                    991: {
                        items: 2,
                    },
                    1200: {
                        items: 3,
                    },
                    1600: {
                        items: 4,
                    },
                    1920: {
                        items: 5,
                    },
                },
            });
        }

        jQuery(window).on("load", function () {
            setTimeout(function () {
                assignedDoctor();
            }, 1000);
        });
    </script>
    <script>
        console.log("hello entered");
        $(document).ready(function () {

            // Add package
            $("#addPackageBtn").click(function () {
                let value = $("#addPackage").val().trim();

                if (value === "") {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Please enter a package name!',
                        confirmButtonText: 'OK'
                    });
                    return;
                }

                let id = Date.now();
                // unique id

                let html = `
                <div class=" package-item d-flex align-items-center mb-2" data-id="${id}">
                    <input type="text" name="parameters[]" class="form-control package-input" value="${value}" />
                    <button type="button" class="btn btn-danger btn-sm ms-2 remove-package">X</button>
                </div>
            `;

                $("#packagesWrapper").append(html);
                $("#addPackage").val(""); // clear field
            });

            // Delete package
            $(document).on("click", ".remove-package", function () {
                $(this).closest(".package-item").remove();
            });

            // Edit package (auto-save)
            $(document).on("input", ".package-input", function () {
                // auto updates (value is stored in input itself)
            });

        });

    </script>
    <script>
        $(document).on('click', '.viewDoctor', function () {

            var id = $(this).data('id');

            $.ajax({
                url: "{{ url('/doctors/view') }}/" + id,
                type: "GET",
                success: function (doctor) {

                    // Fill modal data
                    $('#v_name').text(doctor.fullname);
                    $('#v_status').text(doctor.status == 1 ? 'Available' : 'Unavailable');
                    $('#v_designation').text(doctor.designation);
                    $('#v_specialization').text(doctor.specialization);

                    // Image
                    $('#v_image').attr('src', '/uploads/' + doctor.image);

                    // If you have appointment count
                    $('#v_appointments').text(doctor.appointments ?? 0);

                    // Open modal
                    $('#viewAppointment').modal('show');
                }
            });

        });
        // for edit_designation
        $(document).on('click', '.editDoctor', function () {

            var id = $(this).data('id');

            $.ajax({
                url: "{{ url('/doctors/view') }}/" + id,
                type: "GET",
                success: function (doctor) {

                    $('#edit_id').val(doctor.id);
                    $('#edit_fullname').val(doctor.fullname);
                    $('#edit_status').val(doctor.status);
                    $('#edit_designation').val(doctor.designation);
                    $('#edit_specialization').val(doctor.specialization);

                    $('#edit_preview').attr('src', '/uploads/' + doctor.image);

                    $('#editAppointment').modal('show');
                }
            });
        });
        $('#editDoctorForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ url('/doctors/update') }}",
                data: formData,
                contentType: false,
                processData: false,

                success: function (response) {
                    Swal.fire("Updated!", "Doctor updated successfully!", "success");
                    $('#editAppointment').modal('hide');
                    location.reload();
                }
            });

        });
        $(document).on("click", ".deleteDoctor", function () {

            let id = $(this).data("id");
            let row = $(this).closest("tr");

            Swal.fire({
                title: "Are you sure?",
                text: "This doctor will be permanently deleted!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ url('/doctors/delete') }}/" + id,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (response) {

                            Swal.fire("Deleted!", "Doctor removed successfully.", "success");

                            // remove row
                            row.fadeOut(600, function () {
                                $(this).remove();
                            });
                        }
                    });

                }
            });

        });


    </script>

</body>

</html>