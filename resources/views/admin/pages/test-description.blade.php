@extends("admin.layout.admin-master")
@section("title", "Test Description | Diagnoedge")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Test Description</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Test Name<span class="required">*</span></label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Slug<span class="required"> (Auto-generate)</span></label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley"
                                        required="">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label"> Category<span class="required">*</span></label>
                                   <select class="default-select form-control wide mb-3">
                                        <option>Category 1</option>
                                        <option>Category 2</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Description<span class="required">*</span></label>
                                    <input type="text" name="place" class="form-control" required="">
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
@endsection