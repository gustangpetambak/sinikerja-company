@extends('layouts.dashboard')
@section('title', 'Sinikerja - Edit your profile company')

@section('edit-companies-active', 'menu-item-active')

@push('styles')
<link href="{{asset('assets/css/pages/wizard/wizard-1.css')}}?v=7.0.6" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<!--begin::Content-->
<div class="content  pt-0  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-6 py-lg-10  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        Edit Profile Perusahaan
                    </h5>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="/companies" class="btn btn-dark font-weight-bold btn-pill">
                    <i class="flaticon2-left-arrow-1"></i> Kembali
                </a>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Section-->
    <div class="container my-10">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="wizard wizard-1" id="kt_company_add" data-wizard-state="step-first" data-wizard-clickable="true">
                            <div class="kt-grid__item">
                                <!--begin::Wizard Nav-->
                                <div class="wizard-nav border-bottom">
                                    <div class="wizard-steps p-8 p-lg-10">
                                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                            <div class="wizard-label">
                                                <span class="svg-icon svg-icon-3x wizard-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                            <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                <h3 class="wizard-title">Companies Information</h3>
                                            </div>
                                            <span class="svg-icon svg-icon-lg wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1" />
                                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) " />
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
                                        </div>

                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-label">
                                                <span class="svg-icon svg-icon-3x wizard-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                            <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span>
                                                <h3 class="wizard-title">Branding</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wizard Nav-->
                            </div>
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-10">
                                    <!--begin::Form Wizard-->
                                    <form class="form" id="kt_company_add_form">
                                        <!--begin::Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h3 class="mb-10 font-weight-bold text-dark">
                                                Companies Information
                                            </h3>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Kategori Perusahaan
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="categories" class="form-control select2" id="kt_select2_categories">
                                                                <option value="">Pilih kategori</option>
                                                                <option value="1" selected>Perusahaan / UMKM</option>
                                                                <option value="2">Organisasi / Badan / Lembaga</option>
                                                                <option value="3">Yayasan / Tempat Ibadah</option>
                                                                <option value="4">Rumah Tangga</option>
                                                                <option value="5">Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-12">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Nama Perusahaan / UMKM
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control " name="companytname" type="text" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Logo
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="image-input" id="kt_logo_companies">
                                                                <div class="image-input-wrapper" style="background-image: url('https://www.companyfolders.com/blog/media/2015/01/adidas-300x207.jpg')"></div>

                                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change logo">
                                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                                    <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                                                    <input type="hidden" name="profile_avatar_remove" />
                                                                </label>

                                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel logo">
                                                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                </span>
                                                            </div>
                                                            <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Jumlah Karyawan
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="companysize" class="form-control select2" id="kt_select2_companysize">
                                                                <option value="">Select a company size</option>
                                                                <option value="1">Self Employed</option>
                                                                <option value="2">1-10 Employees</option>
                                                                <option value="3">11-50 Employees</option>
                                                                <option value="4" selected>51-200 Employees</option>
                                                                <option value="5">201-500 Employees</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Jenis Usaha
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control " name="jenisusaha" type="text" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Industri
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="industry" class="form-control select2" id="kt_select2_industry">
                                                                <option value="">Which industry does your company belong to?</option>
                                                                <option value="1">Accounting</option>
                                                                <option value="2" selected>Airlines/Aviation</option>
                                                                <option value="3">Banking</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Tentang Perusahaan
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea name="companyoverview" class="form-control" data-provide="markdown" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Nomor Telepon
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group input-group-lg input-group-solid">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                                <input type="text" class="form-control" name="companyphone" placeholder="" value="085342490237" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Alamat Email
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <div class="input-group input-group-lg input-group-solid">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span>
                                                                </div>
                                                                <input type="text" class="form-control" name="email" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="separator separator-dashed my-10"></div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Alamat Kantor
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <textarea name="officeaddress" class="form-control" rows="2"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Provinsi
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="industry" class="form-control select2" id="kt_select2_province">
                                                                <option value="">Pilih disini</option>
                                                                <option value="1" selected>Sulawesi Selatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Kabupaten / Kota
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="industry" class="form-control select2" id="kt_select2_district">
                                                                <option value="">Pilih disini</option>
                                                                <option value="1" selected>Makassar</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            Kelurahan / Desa
                                                        </label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="industry" class="form-control select2" id="kt_select2_village">
                                                                <option value="">Pilih disini</option>
                                                                <option value="1" selected>Tamalanrea</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="separator separator-dashed my-10"></div>

                                                    <div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">
                                                                Waktu Proses Lamaran
                                                            </label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="number" class="form-control" name="proses" placeholder="" value="18" />
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text">Hari</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Tunjangan dan Lain-Lain</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input id="kt_tagify_2" class="form-control tagify" placeholder='type...' value='BPJS Kesehatan, BPJS Ketenagakerjaan' data-blacklist='.NET,PHP' />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="separator separator-dashed my-10"></div>

                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <label class="option" style="height: 100%;">
                                                                    <span class="option-control">
                                                                        <span class="radio">
                                                                            <input type="radio" name="m_option_1" value="1" checked="checked" />
                                                                            <span></span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="option-label">
                                                                        <span class="option-head">
                                                                            <span class="option-title">
                                                                                Legal Document
                                                                            </span>
                                                                        </span>
                                                                        <span class="option-body">
                                                                            <div class="form-group row">
                                                                                <label class="col-xl-12 col-form-label">
                                                                                    NIB (Nomor Induk Berusaha)
                                                                                </label>
                                                                                <div class="col-lg-12">
                                                                                    <input type="text" class="form-control form-control-lg form-control-solid" name="nib" value="000333777" />
                                                                                </div>
                                                                            </div>

                                                                            <div class="form-group row">
                                                                                <label class="col-xl-12 col-form-label">
                                                                                    Dokumen Perusahaan (SIUP atau NPWP)
                                                                                </label>
                                                                                <div class="col-lg-12">
                                                                                    <div class="dropzone dropzone-default" id="kt_dropzone_1">
                                                                                        <div class="dropzone-msg dz-message needsclick">
                                                                                            <h3 class="dropzone-msg-title">
                                                                                                Upload file Dokumen
                                                                                            </h3>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <label class="option" style="height: 100%;">
                                                                    <span class="option-control">
                                                                        <span class="radio">
                                                                            <input type="radio" name="m_option_1" value="1" />
                                                                            <span></span>
                                                                        </span>
                                                                    </span>
                                                                    <span class="option-label">
                                                                        <span class="option-head">
                                                                            <span class="option-title">
                                                                                Legalitas
                                                                            </span>
                                                                        </span>
                                                                        <span class="option-body mt-5">
                                                                            <div class="row">
                                                                                <div class="col-6">
                                                                                    <div class="image-input" id="kt_legal_selfie">
                                                                                        <div class="image-input-wrapper" style="background-image: url('https://fokusjabar.id/wp-content/uploads/2022/01/3482929973-1.png')"></div>

                                                                                        <label class="btn btn-xs btn-icon btn-circle btn-light-success btn-hover-success btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change photo">
                                                                                            <i class="fa fa-pen icon-sm"></i>
                                                                                            <input type="file" name="selfie" accept=".png, .jpg, .jpeg" />
                                                                                            <input type="hidden" name="profile_avatar_remove" />
                                                                                        </label>

                                                                                        <span class="btn btn-xs btn-icon btn-circle btn-danger btn-hover-light-danger btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel photo">
                                                                                            <i class="ki ki-bold-close icon-xs"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <span class="form-text text-muted">Foto selfie dengan KTP</span>
                                                                                </div>

                                                                                <div class="col-6">
                                                                                    <div class="image-input" id="kt_legal_selfie_usaha">
                                                                                        <div class="image-input-wrapper" style="background-image: url('https://cdn0-production-images-kly.akamaized.net/2AhLTTypX2Svflf6uEg5sSOL6dI=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2536705/original/094069500_1544901752-Laura_3.jpg')"></div>

                                                                                        <label class="btn btn-xs btn-icon btn-circle btn-light-success btn-hover-success btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change photo">
                                                                                            <i class="fa fa-pen icon-sm"></i>
                                                                                            <input type="file" name="selfie" accept=".png, .jpg, .jpeg" />
                                                                                            <input type="hidden" name="profile_avatar_remove" />
                                                                                        </label>

                                                                                        <span class="btn btn-xs btn-icon btn-circle btn-danger btn-hover-light-danger btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel photo">
                                                                                            <i class="ki ki-bold-close icon-xs"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <span class="form-text text-muted">Foto selfie didepan tempat usaha</span>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Step 1-->

                                        <!--begin::Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h3 class="mb-10 font-weight-bold text-dark">
                                                Branding
                                            </h3>

                                            <div class="form-group row">
                                                <label class="col-xl-12 col-lg-12 col-form-label">
                                                    Cover Images
                                                </label>
                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="image-input d-block" id="kt_cover_company">
                                                        <div class="image-input-wrapper" style="background-image: url(https://images.unsplash.com/photo-1661956602153-23384936a1d3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80);width:100%;height:180px"></div>

                                                        <label class="btn btn-xs btn-icon btn-circle btn-warning btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change cover">
                                                            <i class="fa fa-pen icon-sm text-white"></i>
                                                            <input type="file" name="logo" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="profile_avatar_remove" />
                                                        </label>

                                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel cover">
                                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                        </span>
                                                    </div>
                                                    <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                                </div>
                                            </div>

                                            <div class="separator separator-dashed my-10"></div>

                                            <div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Website
                                                    </label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">Https://</span>
                                                            </div>
                                                            <input type="text" class="form-control" name="companywebsite" placeholder="" value="www.examplesite.com" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Facebook
                                                    </label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="socicon-facebook"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="facebook" placeholder="" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Instagram
                                                    </label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="socicon-instagram"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="instagram" placeholder="" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Linkedin
                                                    </label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="socicon-linkedin"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="instagram" placeholder="" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        Youtube
                                                    </label>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <div class="input-group input-group-lg input-group-solid">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="socicon-youtube"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" name="youtube" placeholder="" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="separator separator-dashed my-10"></div>

                                            <div class="form-group">
                                                <label>Company photos</label>
                                                <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_2" style="border: 2px dashed #F3F6F9;">
                                                    <div class="dropzone-msg dz-message needsclick">
                                                        <h3 class="dropzone-msg-title">Drop files here or click to
                                                            upload.</h3>
                                                        <span class="dropzone-msg-desc">Upload up to 10 files</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Step 2-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                    Previous
                                                </button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                    Next Step
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form Wizard-->
                                </div>
                            </div>
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
<script src="{{asset('assets/js/pages/custom/projects/add-project.js')}}?v=7.0.6"></script>
<script src="{{asset('assets/js/pages/crud/file-upload/dropzonejs.js')}}?v=7.0.6"></script>
<script type="text/javascript">
    // Class definition
    var KTSelect2 = function() {
        // Private functions
        var companies = function() {
            $('#kt_select2_categories').select2({
                placeholder: "Pilih kategori"
            });
            $('#kt_select2_companysize').select2({
                placeholder: "Pilih disini"
            });
            $('#kt_select2_industry').select2({
                placeholder: "Pilih disini"
            });
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

    // Class definition
    var KTTagify = function() {
        var tunjangan = function() {
            var input = document.getElementById('kt_tagify_2');
            var tagify = new Tagify(input, {
                enforceWhitelist: true,
                whitelist: [
                    "BPJS Kesehatan",
                    "BPJS Ketenagakerjaan",
                    "THR",
                    "Leptop",
                    "Bonus",
                    "Asuransi"
                ],
                callbacks: {
                    add: console.log, // callback when adding a tag
                    remove: console.log // callback when removing a tag
                }
            });
        }
        return {
            // public functions
            init: function() {
                tunjangan();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSelect2.init();
        KTTagify.init();
    });
</script>
@endpush