@extends("admin.layout.admin-master")
@section("title", "System Settings | Diagnoedge")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">System Settings</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">System Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Site Key<span class="required">*</span></label>
                                            <input type="text" name="site" class="form-control" placeholder="Site key"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Secret Key<span class="required">*</span></label>
                                            <input type="text" name="secret" class="form-control" placeholder="Secret"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Domain<span class="required">*</span></label>
                                            <input type="email" class="form-control" id="inputGroupPrepend2"
                                                aria-describedby="inputGroupPrepend2" placeholder="Domain" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-2">
                                        <div class="form-group">
                                            <label class="text-label">Is Active<span class="required">*</span></label>
                                            <input type="number" name="phoneNumber" class="form-control"
                                                placeholder="(+1)408-657-9007" required="">
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