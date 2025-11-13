@extends("admin.layout.admin-master")
@section("title", "Faq's | Diagnoedge")
@section("content")
    <div class="content-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Faq's</h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 mb-2">
                                <div class="form-group">
                                    <label class="text-label">Question<span class="required">*</span></label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Parsley"
                                        required="">
                                </div>
                            </div>
                          

                          

                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="text-label">Answer<span class="required">*</span></label>
                                    <input type="text" name="place" class="form-control" required="">
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