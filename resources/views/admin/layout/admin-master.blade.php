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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">



    <!-- Style Css -->
    <link class="main-css" href="{{ asset('css/style.css') }}" rel="stylesheet" />
    {{-- data tables --}}
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- CSS (optional but recommended for styling) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- for the push style of the pages --}}
    @stack('style')
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>

    <!-- Datatable -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    {{-- for the push script of the pages --}}
    @stack('scripts')
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

        //+++++++++++++++++++++++++++++++++++++++++++++++
        // FOR SUMMERNOTE
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
            // $('#subparameterDexcription').summernote({
            //     placeholder: 'Write details here...',
            //     tabsize: 2,
            //     height: 200,           // editor height in px

            // });
        });
        // FUNCTIONS TO CREATE SLUG
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
        $('#edit_title').on('input', function () {
            var title = $(this).val();
            var slug = generateSlug(title);
            $('#edit_slug').val(slug);
        });
        // +++++++++++++++++++++++++++++++++++++++++++++++++
        // ADD PACKAGE 
        // $(document).ready(function () {

        //     // Add package
        //     $("#addPackageBtn").click(function () {
        //         let value = $("#addPackage").val().trim();

        //         if (value === "") {
        //             Swal.fire({
        //                 icon: 'warning',
        //                 title: 'Oops...',
        //                 text: 'Please enter a package name!',
        //                 confirmButtonText: 'OK'
        //             });
        //             return;
        //         }

        //         let id = Date.now();
        //         // unique id

        //         let html = `
        //         <div class=" package-item d-flex align-items-center mb-2" data-id="${id}">
        //             <input type="text" name="parameters[]" class="form-control package-input" value="${value}" />
        //             <button type="button" class="btn btn-danger btn-sm ms-2 remove-package">X</button>
        //         </div>
        //     `;

        //         $("#packagesWrapper").append(html);
        //         $("#addPackage").val(""); // clear field
        //     });

        //     // Delete package
        //     $(document).on("click", ".remove-package", function () {
        //         $(this).closest(".package-item").remove();
        //     });

        //     // Edit package (auto-save)
        //     $(document).on("input", ".package-input", function () {
        //         // auto updates (value is stored in input itself)
        //     });

        // });
        // ++++++++++++++++++++++++++++++++++++++++++++++++++
        // FOR DOCTOR CRUD 
        // ++++++++++++++++++++++++++++++++++++++++++++++++++
        // FOR SUB PARAMETERS CRUD
        // $(document).on('click', '.viewSubparameter', function () {
        //     var id = $(this).data('id');
        //     $.ajax({
        //         url: "{{ url('/subparameter/view') }}/" + id,
        //         type: "GET",
        //         success: function (subparameter) {

        //             // Fill modal data
        //             $('#v_title').text(subparameter.title);
        //             $('#v_slug').text(subparameter.slug);
        //             $('#v_status').text(subparameter.status == 'active' ? 'Active' : 'Inactive');
        //             $('#v_description').text(subparameter.description);
        //             $('#v_parameter').text(subparameter.parameter_title);


        //             // Open modal
        //             $('#viewSubparameter').modal('show');
        //         }
        //     });

        // });
        // $(document).on('click', '.editSubparameter', function () {

        //     var id = $(this).data('id');

        //     $.ajax({
        //         url: "{{ url('/subparameter/view') }}/" + id,
        //         type: "GET",
        //         success: function (subparameter) {

        //             $('#edit_id').val(subparameter.id);
        //             $('#edit_title').val(subparameter.title);
        //             $('#edit_slug').val(subparameter.slug);
        //             $('#edit_status').val(subparameter.status);
        //             $('#edit_description').val(subparameter.description);
        //             // $('#edit_parameter_id').val(subparameter.parameter_id);
        //             $('#edit_parameter_id').val(subparameter.parameter_id).trigger('change');


        //             $('#editSubparmeter').modal('show');
        //         }
        //     });
        // });
        // $('#editSubparameterForm').on('submit', function (e) {
        //     e.preventDefault();

        //     let formData = new FormData(this);

        //     $.ajax({
        //         type: "POST",
        //         url: "{{ url('/subparameter/update') }}",
        //         data: formData,
        //         contentType: false,
        //         processData: false,

        //         success: function (response) {
        //             Swal.fire("Updated!", "Sub Parameter updated successfully!", "success");
        //             $('#editSubparmeter').modal('hide');
        //             location.reload();
        //         }
        //     });


        // });
        // $(document).on("click", ".deleteSubparameter", function () {

        //     let id = $(this).data("id");
        //     let row = $(this).closest("tr");

        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "This Sub-parameter will be permanently deleted!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#d33",
        //         cancelButtonColor: "#3085d6",
        //         confirmButtonText: "Yes, delete it!"
        //     }).then((result) => {

        //         if (result.isConfirmed) {

        //             $.ajax({
        //                 url: "{{ url('/subaparameter/delete') }}/" + id,
        //                 type: "DELETE",
        //                 data: {
        //                     _token: "{{ csrf_token() }}"
        //                 },
        //                 success: function (response) {

        //                     Swal.fire("Deleted!", "Sub-parameter removed successfully.", "success");

        //                     // remove row
        //                     row.fadeOut(600, function () {
        //                         $(this).remove();
        //                     });
        //                 }
        //             });

        //         }
        //     });

        // });
        // //+++++++++++++++++++++++++++++++++++++++++++++++++++++
        // FOR APPOINTMENT CRUD
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++
        // FOR Contact CRUD
       
        // FOR PACKAGES CRUD 
        $(document).on('click', '.viewPackage', function () {
            var id = $(this).data(id);
            $.ajax({
                url: "{{ url('/admin-packages/view') }}/" + id,
                type: "GET",
                success: function (packages) {
                    $('#v_title').text(packages.title);
                    $('#v_slug').text(subparameter.slug);
                    $('#v_status').text(subparameter.status == 'active' ? 'Active' : 'Inactive');
                    $('#v_description').text(subparameter.description);
                    $('#v_parameter').text(subparameter.parameter_title);
                    // open modal
                    $('#viewPackage').modal('show');
                }

            });
        });




    </script>
    <script>
        $(document).on('click', '.viewSeoSetting', function () {

            var id = $(this).data('id');

            $.ajax({
                url: "{{ url('/seo-setting/view') }}/" + id,
                type: "GET",
                success: function (seo) {

                    // Fill modal data
                    $('#v_title').text(seo.title);
                    $('#v_page').text(seo.page);
                    $('#v_description').text(seo.description);
                    $('#v_keywords').text(seo.keywords);


                    // Open modal
                    $('#viewAppointment').modal('show');
                }
            });

        });
        $(document).on('click', '.editSeoSetting', function () {

            var id = $(this).data('id');

            $.ajax({
                url: "{{ url('/seo-setting/view') }}/" + id,
                type: "GET",
                success: function (seo) {

                    $('#edit_id').val(seo.id);
                    $('#edit_title').val(seo.title);
                    $('#edit_page').val(seo.page);
                    $('#edit_description').val(seo.description);
                    $('#edit_keywords').val(seo.keywords);


                    $('#editAppointment').modal('show');
                }
            });
        });
        $('#editDoctorForm').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{ url('/seo-setting/update') }}",
                data: formData,
                contentType: false,
                processData: false,

                success: function (response) {
                    Swal.fire("Updated!", "Seo Setting updated successfully!", "success");
                    $('#editAppointment').modal('hide');
                    location.reload();
                }
            });

        });
        $(document).on("click", ".deleteSeoSetting", function () {

            let id = $(this).data("id");
            let row = $(this).closest("tr");

            Swal.fire({
                title: "Are you sure?",
                text: "This SEO will be permanently deleted!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#3085d6",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "{{ url('/seo-setting/delete') }}/" + id,
                        type: "DELETE",
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (response) {

                            Swal.fire("Deleted!", "Seo Setting removed successfully.", "success");

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