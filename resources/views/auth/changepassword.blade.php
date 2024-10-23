@extends('layout.master')
@section('subheader')
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"> {{ $title }}</h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <!--end::Toolbar-->
        </div>
    </div>
@endsection
@section('content')
    <form action="{{ route('change.password.store') }}" method="POST" id="changepassword-form">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-md-3 form-group">
                                        <label for="">Old Password <span class="text-danger">*</span></label>
                                        <input type="password" name="current_password" id="current_password" class="form-control w-100"
                                            placeholder="Enter Old Password">  
                                        <span class="text-danger errors" id="current_passworderror"></span>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="">New Password <span class="text-danger">*</span></label>
                                        <input type="password" name="new_password" id="new_password"  class="form-control w-100"
                                            placeholder="Enter New Password">
                                        <span class="text-danger errors" id="new_passworderror"></span>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <label for="">Confirm New Password</label>
                                        <input type="password" name="new_confirm_password" id="new_confirm_password" class="form-control w-100"
                                            placeholder="Enter Confirm New Password">
                                        <span class="text-danger errors" id="new_confirm_passworderror"></span>
                                    </div>
                                    <div class="col-md-3 form-group pt-8">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).on("submit", "#changepassword-form", async function(e) {
            e.preventDefault();
            var form = $(this).serializeArray();
            var formData = new FormData();

            var data = await ajaxDynamicMethod($(this).attr('action'), $(this).attr('method'), generateFormData(this));
            if (data.success) {
                window.location.href = data.route;
                toastrsuccess(data.msg);
            }
        })
    </script>
@endsection
