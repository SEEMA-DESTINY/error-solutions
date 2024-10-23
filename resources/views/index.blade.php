@extends('layout.master')
@section('css')
@endsection
@section('subheader')
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"> {{ isset($title) ? $title : '' }} </h5>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-body">
                    <p class="mb-0">Coming Soon</p>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
