@extends("admin.layout.admin-master")
@section("title", "General Settings | Diagnoedge")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-titles">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">General Settings</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @include("admin.components.setting-sidebar")
            <div class="col-lg-9 ps-0">
                <div class="container mt-0">

                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Cloudflare Captcha Settings</h4>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Site Key<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="site" class="form-control"
                                                        placeholder="Site key" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Secret Key<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="secret" class="form-control"
                                                        placeholder="Secret" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Domain<span class="required">*</span></label>
                                                    <input type="email" class="form-control" id="inputGroupPrepend2"
                                                        aria-describedby="inputGroupPrepend2" placeholder="Domain"
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
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Captcha Settings</h4>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Site Key<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="site" class="form-control"
                                                        placeholder="Parsley" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Secret Key<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="secret" class="form-control"
                                                        placeholder="Montana" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Domain<span class="required">*</span></label>
                                                    <input type="email" class="form-control" id="inputGroupPrepend2"
                                                        aria-describedby="inputGroupPrepend2"
                                                        placeholder="example@example.com.com" required="">
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
        </div>
    </div>
@endsection