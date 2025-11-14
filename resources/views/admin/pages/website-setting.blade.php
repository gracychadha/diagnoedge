@extends("admin.layout.admin-master")
@section("title", "Website Settings | Diagnoedge")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-titles">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Website  Settings</a></li>
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
                                    <h4 class="card-title">Website Settings</h4>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Company Name<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="firstName" class="form-control"
                                                        placeholder="Diagnoedge" required="">
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Email Address<span
                                                            class="required">*</span></label>
                                                    <input type="email" class="form-control" id="inputGroupPrepend2"
                                                        aria-describedby="inputGroupPrepend2"
                                                        placeholder="example@example.com.com" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Company Location<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="location" class="form-control"
                                                        placeholder="Haryana" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Phone Number<span
                                                            class="required">*</span></label>
                                                    <input type="number" name="phoneNumber" class="form-control"
                                                        placeholder="(+1)408-657-9007" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Phone Number 2<span
                                                            class="required">*</span></label>
                                                    <input type="number" name="phoneNumber2" class="form-control"
                                                        placeholder="(+1)408-657-9007" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label for="formFile" class="form-label">Logo</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label for="formFile" class="form-label">Favicon</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-3">
                                                <div class="form-group">
                                                    <label class="text-label">About Company<span
                                                            class="required">*</span></label>
                                                    <textarea id="aboutCompany"></textarea>
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
                                    <h4 class="card-title">Social links</h4>
                                </div>
                                <div class="card-body">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Facebook<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="facebook" class="form-control"
                                                        placeholder="info@facebook.com" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Instagram<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="instagram" class="form-control"
                                                        placeholder="info@instagram.com" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Linkedin<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="linkedin" class="form-control"
                                                        placeholder="info@linkedin.com" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="text-label">Twitter<span
                                                            class="required">*</span></label>
                                                    <input type="text" name="twitter" class="form-control"
                                                        placeholder="info@twitter.com" required="">
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