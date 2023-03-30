@extends('layouts.dashboard')
@section('title', 'Sinikerja - Request and get your guarantee talent')

@section('guarantee-talent-active', 'menu-item-active')

@push('styles')

@endpush

@section('content')
<!--begin::Content-->
<div class="content  pt-0  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 mb-5 subheader-solid " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Request Guarantee Talent
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
                    <!--begin::Nav Panel Widget 2-->
                    <div class="card card-custom gutter-b card-stretch card-shadowless">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Nav Tabs-->
                            <ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless mb-6 p-0" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
                                    <a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#forms_widget_tab_1">
                                        <span class="nav-icon py-2 w-auto">
                                            <span class="svg-icon svg-icon-3x"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                    </g>
                                                </svg><!--end::Svg Icon--></span> </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bold text-center">
                                            Form Request
                                        </span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item d-flex col flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
                                    <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#forms_widget_tab_2">
                                        <span class="nav-icon py-2 w-auto">
                                            <span class="svg-icon svg-icon-3x"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg><!--end::Svg Icon--></span> </span>
                                        <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">
                                            Riwayat
                                        </span>
                                    </a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav Tabs-->

                            <!--begin::Nav Content-->
                            <div class="tab-content m-0 p-0">
                                <div class="tab-pane active" id="forms_widget_tab_1" role="tabpanel">
                                    <!--begin::Form Wizard-->
                                    <form class="form" id="kt_jobs_add_form">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="alert alert-custom alert-notice alert-light-success fade show mb-10" role="alert">
                                                    <div class="alert-icon"><i class="flaticon-info"></i></div>
                                                    <div class="alert-text">
                                                        Guarantee Talent adalah Talent pilihan yang bisa diganti jika selama masa bekerja tidak memenuhi ekspektasi atau melanggar aturan perusahaan
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Pilih Masa Garansi
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select name="warrantyjobs" class="form-control select2" id="kt_select2_warranty">
                                                                    <option value="">Pilih disini</option>
                                                                    <option value="1">3 Bulan</option>
                                                                    <option value="2">6 Bulan</option>
                                                                    <option value="3">1 Tahun</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Posisi Pekerjaan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control " name="jobsname" type="text" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Kategori Pekerjaan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select name="categoriesjobs" class="form-control select2" id="kt_select2_categories">
                                                                    <option value="">Pilih kategori</option>
                                                                    <option value="1">Driver</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Jenis Pekerjaan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select name="subcategoriesjobs" class="form-control select2" id="kt_select2_subcategories">
                                                                    <option value="">Pilih jenis pekerjaan</option>
                                                                    <option value="1">Driver Mobil</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Tipe Pekerjaan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select name="jobstype" class="form-control select2" id="kt_select2_type">
                                                                    <option value="">Pilih disini</option>
                                                                    <option value="1">Pekerja Tetap</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Jumlah Karyawan Yang Dibutuhkan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <input class="form-control " name="candidates_men" type="text" placeholder="Laki-laki berapa?" />
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <input class="form-control " name="candidates_women" type="text" placeholder="Perempuan berapa?" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Usia Maksimal
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control " name="candidates_age" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Lokasi Pekerjaan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select name="location" class="form-control select2" id="kt_select2_location">
                                                                    <option value="">Pilih disini</option>
                                                                    <option value="1" selected>Makassar, Sulawesi Selatan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Deskripsi Tentang Pekerjaan
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <textarea name="jobsoverview" class="form-control" data-provide="markdown" rows="6"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Pengalaman Kerja
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select name="location" class="form-control select2" id="kt_select2_experience">
                                                                    <option value="">Pilih disini</option>
                                                                    <option value="1" selected>Kurang Dari Setahun</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Keahlian Yang Dibutuhkan</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input id="kt_skills" class="form-control form-control-lg tagify" placeholder='type...' value='Ms Office, Photoshop' data-blacklist='TK, SD' />
                                                            </div>
                                                        </div>

                                                        <div class="separator separator-dashed my-10"></div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Pilih Gaji</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="radio-inline">
                                                                    <label class="radio radio-outline radio-outline-2x radio-primary">
                                                                        <input type="radio" name="salary" value="month" />
                                                                        <span></span>
                                                                        Per Bulan
                                                                    </label>
                                                                    <label class="radio radio-outline radio-outline-2x radio-primary">
                                                                        <input type="radio" name="salary" value="day" placeholder="Optional" />
                                                                        <span></span>
                                                                        Per Hari
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="salarybox mb-0 form-group row month">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group">
                                                                            <label>Mulai Dari</label>
                                                                            <input type="text" class="form-control" name="minsalarymonth" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group">
                                                                            <label>Sampai</label>
                                                                            <input type="text" class="form-control" name="maxsalarymonth" placeholder="Optional" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="salarybox mb-0 form-group row day" style="display: none;">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group">
                                                                            <label>Mulai Dari</label>
                                                                            <input type="text" class="form-control" name="minsalaryday" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group">
                                                                            <label>Sampai</label>
                                                                            <input type="text" class="form-control" name="maxsalaryday" placeholder="" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <div class="form-group row mb-0">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Catatan (Optional)
                                                    </label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <textarea name="noted" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <!--begin::Actions-->
                                                <div class="d-flex justify-content-between">
                                                    <div class="mr-2">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4">
                                                            Kembali
                                                        </button>
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4">
                                                            Simpan dan Kirim
                                                        </button>
                                                        <!-- <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4">
                                                                Preview
                                                            </button> -->
                                                    </div>
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                        </div>
                                    </form>
                                    <!--end::Form Wizard-->
                                </div>

                                <div class="tab-pane" id="forms_widget_tab_2" role="tabpanel">
                                    <!--begin::Card-->
                                    <div class="card card-custom">
                                        <div class="card-body">
                                            <!--begin: Search Form-->
                                            <!--begin::Search Form-->
                                            <div class="mb-7">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-9 col-xl-8">
                                                        <div class="row align-items-center">
                                                            {{-- <div class="col-md-4 my-2 my-md-0">--}}
                                                            {{-- <div class="input-icon">--}}
                                                            {{-- <input type="text" class="form-control"--}}
                                                            {{-- placeholder="Search..."--}}
                                                            {{-- id="kt_datatable_search_query" />--}}
                                                            {{-- <span><i class="flaticon2-search-1 text-muted"></i></span>--}}
                                                            {{-- </div>--}}
                                                            {{-- </div>--}}

                                                            <div class="col-md-6 my-2 my-md-0">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                                    <select class="form-control" id="kt_datatable_search_status">
                                                                        <option value="">All</option>
                                                                        <option value="1">Pending</option>
                                                                        <option value="2">Delivered</option>
                                                                        <option value="3">Canceled</option>
                                                                        <option value="4">Success</option>
                                                                        <option value="5">Info</option>
                                                                        <option value="6">Danger</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 my-2 my-md-0">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                                                    <select class="form-control" id="kt_datatable_search_type">
                                                                        <option value="">All</option>
                                                                        <option value="1">Online</option>
                                                                        <option value="2">Retail</option>
                                                                        <option value="3">Direct</option>
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
                                            <!--end: Search Form-->

                                            <!--begin: Datatable-->
                                            <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                                            </div>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                    <!--end::Card-->
                                </div>
                            </div>
                            <!--end::Nav Content-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--begin::Nav Panel Widget 2-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Section-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script src="{{asset('assets/js/sinikerja/data-local.js')}}?v=7.0.6"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetSalary = $("." + inputValue);
            $(".salarybox").not(targetSalary).hide();
            $(targetSalary).show();
        });
    });

    // Class definition
    var KTSelect2Jobs = function() {
        // Private functions
        var newjobs = function() {
            
            $('#kt_select2_warranty').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_categories').select2({
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