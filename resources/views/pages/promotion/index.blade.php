@extends('layouts.dashboard')
@section('title', 'Sinikerja - Promotion your jobs')

@section('promotion-jobs-active', 'menu-item-active')

@push('styles')

@endpush

@section('content')
<!--begin::Content-->
<div class="content  pt-lg-3  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 mb-5 subheader-solid " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Promosikan Lowongan Pekerjaan
                </h5>
                <!--end::Title-->
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
    <!--begin::Section-->
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-10">
                    <!--begin::Card-->
                    <div class="card">
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Kode lamaran" value="SK0001" />
                                                    <span><i class="flaticon2-search-1 text-muted"></i></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Kategori</label>
                                                    <select class="form-control select2" id="kt_datatable_search_type">
                                                        <option value="">All</option>
                                                        <option value="1">Driver</option>
                                                        <option value="2">Customer Services</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">
                                            Search
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search Form-->
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch my-5">
                        <!--begin::Header-->
                        <div class="card-header bg-primary py-6">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-uppercase">
                                    <div class="text-white">Kode Lamaran</div>
                                    <div class="font-size-h5 font-weight-bolder text-white">SK0001</div>
                                </div>
                                <div class="">
                                    <a href="#" class="btn btn-light-primary font-weight-bolder">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
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
                    </div>
                    <!--end:: Card-->

                    <div class="card gutter-b card-stretch my-5">
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-group m-0">
                                        <label class="font-size-h5 font-weight-bolder mb-3">Jenis Promosi</label>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="option">
                                                    <span class="option-control">
                                                        <span class="checkbox checkbox-success">
                                                            <input type="checkbox" name="m_checkbox_1" />
                                                            <span></span>
                                                        </span>
                                                    </span>
                                                    <span class="option-label">
                                                        <span class="option-head">
                                                            <span class="option-title">
                                                                Banner Sosial Media
                                                            </span>
                                                            <span class="option-focus">
                                                                IDR 250.000
                                                            </span>
                                                        </span>
                                                        <span class="option-body">
                                                            Estimated 14-20 Day Shipping
                                                            (Duties and taxes may be due
                                                            upon delivery)
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="option">
                                                    <span class="option-control">
                                                        <span class="checkbox checkbox-success">
                                                            <input type="checkbox" name="m_checkbox_1" />
                                                            <span></span>
                                                        </span>
                                                    </span>
                                                    <span class="option-label">
                                                        <span class="option-head">
                                                            <span class="option-title">
                                                                Cetak Banner
                                                            </span>
                                                            <span class="option-focus">
                                                                IDR 250.000
                                                            </span>
                                                        </span>
                                                        <span class="option-body">
                                                            Estimated 2-5 Day Shipping
                                                            (Duties and taxes may be due
                                                            upon delivery)
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <label class="mt-5 mb-3">Catatan</label>
                                        <textarea name="officeaddress" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-between mt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4">
                                        Kembali
                                    </button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                        Kirim Request Banner
                                    </button>
                                    <!-- <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4">
                                            Preview
                                        </button> -->
                                </div>
                            </div>
                            <p class="text-muted mt-5">
                                * Setelah pengisian formulir request banner, anda akan dihubungi lebih lanjut oleh team Sinikerja.
                            </p>
                            <!--end::Actions-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Section-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script type="text/javascript">
    // Class definition
    var KTSelect2Jobs = function() {
        // Private functions
        var newjobs = function() {
            $('#kt_datatable_search_type').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_subcategories').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_type').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_location').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_experience').select2({
                placeholder: "Pilih disini"
            });
        }

        // Public functions
        return {
            init: function() {
                newjobs();
            }
        };
    }();

    // Class definition
    var KTTagifyJobs = function() {
        var qualification = function() {
            var input = document.getElementById('kt_tagify_qualification');
            var tagify = new Tagify(input, {
                enforceWhitelist: true,
                whitelist: [
                    "SMK/SMA",
                    "Sarjana(SI)",
                    "Diploma(D3)"
                ],
                callbacks: {
                    add: console.log, // callback when adding a tag
                    remove: console.log // callback when removing a tag
                }
            });
        };
        var skills = function() {
            var input = document.getElementById('kt_skills');
            var tagify = new Tagify(input, {
                enforceWhitelist: true,
                whitelist: [
                    "Ms Office",
                    "Photoshop"
                ],
                callbacks: {
                    add: console.log, // callback when adding a tag
                    remove: console.log // callback when removing a tag
                }
            });
        };
        return {
            // public functions
            init: function() {
                qualification();
                skills();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2Jobs.init();
        KTTagifyJobs.init();
    });
</script>
@endpush