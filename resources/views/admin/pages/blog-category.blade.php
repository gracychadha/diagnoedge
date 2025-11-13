@extends("admin.layout.admin-master")
@section("title", " Blog Category | Diagnoedge")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Blog Category</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Test </a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Blog Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Category Name<span class="required">*</span></label>
                                            <input type="text" name="category" class="form-control" placeholder="Parsley"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Status<span class="required">*</span></label>
                                            <select class="default-select form-control wide mb-3">
                                                <option>Active</option>
                                                <option>InActive</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection