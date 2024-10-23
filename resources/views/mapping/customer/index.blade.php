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
                        <div class="col-md-12">
                            <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-3x">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#amazone">Amazone</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#shopify">Shopify</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#ebay">eBay</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="amazone" role="tabpanel"
                                    aria-labelledby="shopify">Tab content 1</div>
                                <div class="tab-pane fade" id="shopify" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_2">Tab content 2</div>
                                <div class="tab-pane fade" id="ebay" role="tabpanel"
                                    aria-labelledby="kt_tab_pane_2">Tab content 3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
