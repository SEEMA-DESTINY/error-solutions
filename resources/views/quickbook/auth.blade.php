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
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <img src="{{ asset('assets/image/quickbooks-logo.png') }}" alt="quickbooks_logo"
                                style="height: 50px">
                            <a href="{{ route('quickbook.configure') }}" class="btn btn-primary">Configure Quickbooks</a>
                        </div>
                        <div class="col-lg-6 mb-5">
                            <img src="{{ asset('assets/image/shopify-logo.svg') }}" alt="quickbooks_logo"
                                style="height: 50px">
                            <a href="{{ route('quickbook.configure') }}" class="btn btn-primary ml-4">Configure Shopify</a>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <img src="{{ asset('assets/image/amazon-logo.png') }}" alt="quickbooks_logo"
                                style="height: 50px">
                            <a href="{{ route('quickbook.configure') }}" class="btn btn-primary ml-4">Configure Amazon</a>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <img src="{{ asset('assets/image/ebay-logo.png') }}" alt="quickbooks_logo" style="height: 50px">
                            <a href="{{ route('quickbook.configure') }}" class="btn btn-primary ml-4">Configure ebay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
