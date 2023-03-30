@extends('layouts.dashboard')
@section('title', 'Sinikerja - Manage your jobs')

@section('jobs-active', 'menu-item-active')

@push('styles')

@endpush

@section('content')
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid mt-lg-n10" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 mb-5 subheader-solid " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Semua pekerjaan
                </h5>
                <!--end::Title-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->

                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                        54 Total
                    </span>
                </div>
                <!--end::Search Form-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mx-5 bg-gray-200"></div>
                <!--end::Separator-->

                <div class="d-flex align-items-center">
                    <label class="font-weight-bold mr-2 text-dark-50 mb-0" style="min-width: 80px;">Filter Status</label>
                    <select class="form-control form-control-md selectpicker">
                        <option data-content="<span class='label label-success label-inline label-rounded'>Publish</span>">Publish</option>
                        <option data-content="<span class='label label-warning label-inline label-rounded'>Unpublish</span>">Unpublish</option>
                        <option data-content="<span class='label label-primary label-inline label-rounded'>Selesai</span>">Selesai</option>
                    </select>
                </div>
            </div>
            <!--end::Details-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="/dashboard" class="btn btn-light-primary font-weight-bold ml-2">
                    <x-icons.back />
                    Kembali
                </a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Row-->
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-xl-4">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch ribbon ribbon-right">
                        <div class="ribbon-target bg-success" style="top: 0; right: -2px;">Publish</div>
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                    <img src="logo.png" alt="image" />
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column mr-auto">
                                    <!--begin: Title-->
                                    <div class="d-flex flex-column mr-auto">
                                        <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                            Sinikerja - Next generation SAAS
                                        </a>
                                        <span class="text-muted font-weight-bold">
                                            Makassar, Sulawesi Selatan
                                        </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Description-->
                            <div class="mb-5 mt-5 font-weight-bold text-ellipsis">
                                I distinguish three main text objectives.First, your objective could
                                be merely to inform people.A second be to persuade people.
                            </div>
                            <div class="font-size-h5 mb-10 mt-5 font-weight-bolder">
                                IDR 2,5 jt - 4 jt per bulan
                            </div>
                            <!--end::Description-->

                            <!--begin::Data-->
                            <div class="d-flex mb-5">
                                <div class="d-flex align-items-center mr-7">
                                    <span class="font-weight-bold mr-4">
                                        Mulai
                                    </span>
                                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">
                                        14 Dec, 22
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bold mr-4">
                                        Berakhir
                                    </span>
                                    <span class="btn btn-light-warning btn-sm font-weight-bold btn-upper btn-text">
                                        15 Feb, 23
                                    </span>
                                </div>
                            </div>
                            <!--end::Data-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bold mb-4">Kandidat yang melamar</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">0</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->

                        <!--begin::Footer-->
                        <div class="card-footer bg-warning-o-50 py-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-uppercase">
                                    <div class="">Kode Lamaran</div>
                                    <div class="font-size-h5 font-weight-bolder" id="kt_clipboard_4">SK0001</div>
                                </div>
                                <div class="">
                                    <a href="#" class="btn btn-warning" data-clipboard="true" data-clipboard-target="#kt_clipboard_4"><i class="la la-copy"></i> Salin kode </a>
                                </div>
                            </div>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:: Card-->
                </div>

                <div class="col-xl-4">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch ribbon ribbon-right">
                        <div class="ribbon-target bg-warning" style="top: 0; right: -2px;">Unpublish</div>
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                    <img src="logo.png" alt="image" />
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column mr-auto">
                                    <!--begin: Title-->
                                    <div class="d-flex flex-column mr-auto">
                                        <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                            Sinikerja - Food Company
                                        </a>
                                        <span class="text-muted font-weight-bold">
                                            Morowali, Sulawesi Utara
                                        </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Description-->
                            <div class="mb-10 mt-5 font-weight-bold ">
                                I distinguish three main text objectives.First, your objective could
                                be merely to inform people.
                            </div>
                            <div class="font-size-h5 mb-10 mt-5 font-weight-bolder">
                                IDR 3,5 jt - 5 jt per bulan
                            </div>
                            <!--end::Description-->

                            <!--begin::Data-->
                            <div class="d-flex mb-5">
                                <div class="d-flex align-items-center mr-7">
                                    <span class="font-weight-bold mr-4">
                                        Mulai
                                    </span>
                                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">
                                        12 Jan, 23
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bold mr-4">
                                        Berakhir
                                    </span>
                                    <span class="btn btn-light-warning btn-sm font-weight-bold btn-upper btn-text">
                                        17 Oct, 23
                                    </span>
                                </div>
                            </div>
                            <!--end::Data-->

                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bold mb-4">Kandidat yang melamar</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Teresa Fox">
                                        <img alt="Pic" src="assets/media/users/300_18.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle symbol-light">
                                        <span class="symbol-label font-weight-bold">5+</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer bg-warning-o-50 py-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-uppercase">
                                    <div class="">Kode Lamaran</div>
                                    <div class="font-size-h5 font-weight-bolder" id="kt_clipboard_4">SK0002</div>
                                </div>
                                <div class="">
                                    <a href="#" class="btn btn-warning" data-clipboard="true" data-clipboard-target="#kt_clipboard_4"><i class="la la-copy"></i> Salin kode </a>
                                </div>
                            </div>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:: Card-->
                </div>

                <div class="col-xl-4">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b card-stretch ribbon ribbon-right">
                        <div class="ribbon-target bg-info" style="top: 0; right: -2px;">Selesai</div>
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-4 symbol symbol-60 symbol-circle">
                                    <img src="logo.png" alt="image" />
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column mr-auto">
                                    <!--begin: Title-->
                                    <div class="d-flex flex-column mr-auto">
                                        <a href="#" class="text-dark text-hover-primary font-size-h4 font-weight-bolder mb-1">
                                            Sinikerja - Luxury Footwear
                                        </a>
                                        <span class="text-muted font-weight-bold">
                                            Kolaka Utara, Sulawesi Tenggara
                                        </span>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Description-->
                            <div class="mb-10 mt-5 font-weight-bold ">
                                I distinguish three main text objectives.First, your objective could
                                be merely to inform people.
                            </div>
                            <div class="font-size-h5 mb-10 mt-5 font-weight-bolder">
                                IDR 3,5 jt - 5 jt per bulan
                            </div>
                            <!--end::Description-->
                            <!--end::Description-->

                            <!--begin::Data-->
                            <div class="d-flex mb-5">
                                <div class="d-flex align-items-center mr-7">
                                    <span class="font-weight-bold mr-4">
                                        Mulai
                                    </span>
                                    <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text">22
                                        Jan, 23</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bold mr-4">
                                        Berakhir
                                    </span>
                                    <span class="btn btn-light-warning btn-sm font-weight-bold btn-upper btn-text">12
                                        Oct, 23</span>
                                </div>
                            </div>
                            <!--end::Data-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                <span class="font-weight-bold mb-4">Kandidat yang melamar</span>
                                <div class="symbol-group symbol-hover">
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Mark Stone">
                                        <img alt="Pic" src="assets/media/users/300_25.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Charlie Stone">
                                        <img alt="Pic" src="assets/media/users/300_19.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Luca Doncic">
                                        <img alt="Pic" src="assets/media/users/300_22.jpg" />
                                    </div>
                                    <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="Nick Mana">
                                        <img alt="Pic" src="assets/media/users/300_23.jpg" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer bg-warning-o-50 py-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-uppercase">
                                    <div class="">Kode Lamaran</div>
                                    <div class="font-size-h5 font-weight-bolder" id="kt_clipboard_4">SK0003</div>
                                </div>
                                <div class="">
                                    <a href="#" class="btn btn-warning" data-clipboard="true" data-clipboard-target="#kt_clipboard_4"><i class="la la-copy"></i> Salin kode </a>
                                </div>
                            </div>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:: Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script type="text/javascript">
    "use strict";
    // Class definition

    var KTClipboard = function() {

        // Private functions
        var copies = function() {
            // basic example
            new ClipboardJS('[data-clipboard=true]').on('success', function(e) {
                e.clearSelection();
                alert('Copied!');
            });
        }

        return {
            // public functions
            init: function() {
                copies();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTClipboard.init();
    });
</script>
@endpush