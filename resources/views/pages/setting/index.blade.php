@extends('layouts.dashboard')
@section('title', 'Sinikerja - Setting your account')

@section('setting-active', 'menu-item-active')

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
                    Pengaturan Akun
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
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Row-->
            <div class="row">
                <div class="col-xl-4">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header h-auto py-3 border-0">
                            <div class="card-title">
                                <h3 class="card-label text-danger">
                                    Important Notice
                                </h3>
                            </div>
                            <div class="card-toolbar">
                                <span class="label font-weight-bold label label-inline label-light-danger">Now</span>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <p class="text-dark-50">
                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                1500s.
                            </p>
                            <div class="mt-5">
                                <a href="#" class="btn btn-success btn-sm font-weight-bold mr-2">Set
                                    up</a>
                                <a href="#" class="btn btn-clean btn-sm font-weight-bold">Dismiss</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->

                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header h-auto py-4">
                            <div class="card-title">
                                <h3 class="card-label">
                                    Company
                                    <span class="d-block text-muted pt-2 font-size-sm">company profile
                                        preview</span>
                                </h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-4">
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Name:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">Loop
                                        Inc.</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Location:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">London,
                                        UK.</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Revenue:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext"><span class="font-weight-bolder">345,000M</span> &nbsp;<span class="label label-inline label-danger label-bold">Q4,
                                            2019</span></span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Phone:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">+456
                                        7890456</span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Email:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">
                                        <a href="#">info@loop.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Website:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">
                                        <a href="#">www.loop.com</a>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row my-2">
                                <label class="col-4 col-form-label">Contact Person:</label>
                                <div class="col-8">
                                    <span class="form-control-plaintext font-weight-bolder">
                                        <a href="#">Nick Bold</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>

                <div class="col-xl-8">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <!--begin::Header-->
                        <div class="card-header card-header-tabs-line">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                                    <li class="nav-item mr-3">
                                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span> </span>
                                            <span class="nav-text">
                                                Profile Akun
                                            </span>
                                        </a>
                                    </li>

                                    <li class="nav-item mr-3">
                                        <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3">
                                            <span class="nav-icon mr-2">
                                                <span class="svg-icon mr-3"><!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
                                                            <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span> </span>
                                            <span class="nav-text">
                                                Password
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body px-0">
                            <div class="tab-content pt-5">
                                <!--begin::Tab Content-->
                                <div class="tab-pane active" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                    <form class="form">
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">Detail Profil</h3>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Nama Depan
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control " type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Nama Belakang
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input class="form-control " type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Jenis Kelamin</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="radio-inline">
                                                    <label class="radio">
                                                        <input type="radio" name="gender" value="L" />
                                                        <span></span>
                                                        Laki-Laki
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="gender" value="P" />
                                                        <span></span>
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Alamat
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <textarea name="officeaddress" class="form-control" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Provinsi
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select name="industry" class="form-control select2" id="kt_select2_province">
                                                    <option value="">Pilih disini</option>
                                                    <option value="1" selected>Sulawesi Selatan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Kabupaten / Kota
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select name="industry" class="form-control select2" id="kt_select2_district">
                                                    <option value="">Pilih disini</option>
                                                    <option value="1" selected>Makassar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Kelurahan / Desa
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <select name="industry" class="form-control select2" id="kt_select2_village">
                                                    <option value="">Pilih disini</option>
                                                    <option value="1" selected>Tamalanrea</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-10"></div>

                                        <!--begin::Heading-->
                                        <div class="row">
                                            <div class="col-lg-9 col-xl-6 offset-xl-3">
                                                <h3 class="font-size-h6 mb-5">Kontak</h3>
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                No. Telepon
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                    <input type="text" class="form-control " value="+35278953712" placeholder="Phone" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">
                                                Alamat Email
                                            </label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                    <input type="text" class="form-control " value="nick.bold@loop.com" placeholder="Email" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-10">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="button" class="btn btn-success btn-lg btn-block">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->

                                <!--begin::Tab Content-->
                                <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                    <form class="form">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                    <input class="form-control " type="password" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Password Baru</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                    <input class="form-control " type="password" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Konfirmasi Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="kt-spinner kt-spinner--sm kt-spinner--success kt-spinner--right kt-spinner--input">
                                                    <input class="form-control " type="password" value="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row mt-10">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-right"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <button type="button" class="btn btn-success btn-lg btn-block">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Tab Content-->
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Section-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script type="text/javascript">
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var companies = function() {
            $('#kt_select2_province').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_district').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_village').select2({
                placeholder: "Pilih disini"
            });
        }

        // Public functions
        return {
            init: function() {
                companies();
            }
        };
    }();
</script>
@endpush