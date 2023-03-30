@extends('layouts.dashboard')
@section('title', 'Sinikerja - Create new your jobs')

@section('create-jobs-active', 'menu-item-active')

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
                    Buat Lowongan Pekerjaan
                </h5>
                <!--end::Title-->
            </div>
            <!--end::Details-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="/jobs" class="btn btn-light-primary font-weight-bold ml-2">
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
                    <!--begin::Form Wizard-->
                    <form class="form" id="kt_jobs_add_form">
                        <div class="card">
                            <div class="card-body pt-15">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                Nama Posisi Pekerjaan
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
                                                <input class="form-control " name="candidates" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Kualifikasi</label>
                                            <div class="col-lg-9 col-xl-9">
                                                <input id="kt_tagify_qualification" class="form-control form-control-lg tagify" placeholder='type...' value='SMK/SMA, Sarjana(SI)' data-blacklist='TK, SD' />
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
                                                        <input type="radio" name="salary" value="day" />
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
                                                            <input type="text" class="form-control" name="maxsalarymonth" placeholder="" />
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
                                <div class="form-group mb-0 row">
                                    <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                    <div class="col-lg-9 col-xl-9">
                                        <span class="switch switch-outline switch-icon switch-success">
                                            <label>
                                                <input type="checkbox" id="showRequest" name="select" />
                                                <span></span>
                                            </label>
                                            <span class="ml-5">Promosikan lowongan pekerjaan saya</span>
                                        </span>
                                    </div>
                                </div>

                                <div class="requestbanner" style="display: none;">
                                    <div class="form-group mb-0 row">
                                        <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                        <div class="col-lg-9 col-xl-9">
                                            <div class="form-group m-0">
                                                <label class="mt-5 mb-3">Jenis Promosi</label>
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
                                            Simpan dan Publish
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
            </div>
        </div>
    </div>
    <!--end::Section-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetSalary = $("." + inputValue);
            $(".salarybox").not(targetSalary).hide();
            $(targetSalary).show();
        });

        $(function() {
            $("#showRequest").on("click", function() {
                $(".requestbanner").toggle(this.checked);
            });
        });
    });

    // Class definition
    var KTSelect2Jobs = function() {
        // Private functions
        var newjobs = function() {
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
