@extends('layouts.dashboard')
@section('title', 'Sinikerja - Detail applicant')

@section('applicant-active', 'menu-item-active')

@push('styles')

@endpush

@section('content')
<!--begin::Content-->
<div class="content pt-lg-3 d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 mb-5  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Pelamar
                </h5>
                <!--end::Title-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                </div>
                <!--end::Separator-->

                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                        10 total pelamar
                    </span>
                </div>
                <!--end::Search Form-->
            </div>
            <!--end::Details-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="/applicants" class="btn btn-light-primary font-weight-bold ml-2">
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
                            <img src="{{asset('logo.png')}}" alt="image" />
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
                </div>
                <!--end::Body-->
            </div>
            <!--end:: Card-->

            <div class="card  card-custom gutter-b my-7">
                <ul class="nav nav-pills nav-fill nav-primary font-weight-bold font-size-h6 py-4 px-4" id="myApplicant" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="applicant-tab-1" data-toggle="tab" href="#applicant-1">Daftar Pelamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab-2" data-toggle="tab" href="#applicant-2">Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab-3" data-toggle="tab" href="#applicant-3">Penilaian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab-4" data-toggle="tab" href="#applicant-4">Wawancara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab-5" data-toggle="tab" href="#applicant-5">Penawaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab-6" data-toggle="tab" href="#applicant-6">Diterima</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="applicant-tab-7" data-toggle="tab" href="#applicant-7">Ditolak</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content mt-5" id="myApplicantList">
                <div class="tab-pane fade show active" id="applicant-1" role="tabpanel" aria-labelledby="applicant-tab-1">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_9.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
                                            <span class="text-muted font-weight-bold">Head of Development</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 0</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_11.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Anna Krox</a>
                                            <span class="text-muted font-weight-bold">Python Developer</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 3.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_3.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                Jason Muller
                                            </a>
                                            <span class="text-muted font-weight-bold">Atr Direcrtor</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 20.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_2.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                Teresa Fox
                                            </a>
                                            <span class="text-muted font-weight-bold">Project Manager</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 5.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_10.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                Giannis Nelson
                                            </a>
                                            <span class="text-muted font-weight-bold">Python Developer</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 7.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_16.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                Lisa Moss
                                            </a>
                                            <span class="text-muted font-weight-bold">Researcher</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.500.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_15.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                Nick Mana
                                            </a>
                                            <span class="text-muted font-weight-bold">Atr Direcrtor</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 8.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjutkan Review <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_20.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                Mana Garcia
                                            </a>
                                            <span class="text-muted font-weight-bold">Admin Onlineshop</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 4.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="tab-pane fade" id="applicant-2" role="tabpanel" aria-labelledby="applicant-tab-2">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjut ke Penilaian <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjut ke Penilaian <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_9.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
                                            <span class="text-muted font-weight-bold">Head of Development</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 0</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjut ke Penilaian <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_11.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Anna Krox</a>
                                            <span class="text-muted font-weight-bold">Python Developer</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 3.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="tab-pane fade" id="applicant-3" role="tabpanel" aria-labelledby="applicant-tab-3">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjut ke Wawancara <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Lanjut ke Wawancara <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-7">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{asset('assets/media/users/300_9.jpg')}}" alt="image" />
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Charlie Stone</a>
                                            <span class="text-muted font-weight-bold">Head of Development</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 0</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bolder mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="tab-pane fade" id="applicant-4" role="tabpanel" aria-labelledby="applicant-tab-4">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold">Penawaran <i class="la la-arrow-right"></i></a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="tab-pane fade" id="applicant-5" role="tabpanel" aria-labelledby="applicant-tab-5">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch">
                                <div class="card-header bg-dark d-flex justify-content-between py-5">
                                    <a href="#" class="btn btn-pill btn-warning font-weight-bold"><i class="la la-times"></i> Ditolak</a>
                                    <a href="#" class="btn btn-pill btn-success font-weight-bold"><i class="la la-check"></i> Diterima</a>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="tab-pane fade" id="applicant-6" role="tabpanel" aria-labelledby="applicant-tab-6">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch ribbon ribbon-top ribbon-ver">
                                <div class="ribbon-target bg-success" style="top: -2px; right: 20px;">
                                    <i class="la la-crown  text-white"></i>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>

                <div class="tab-pane fade" id="applicant-7" role="tabpanel" aria-labelledby="applicant-tab-7">
                    <!--begin::Row-->
                    <div class="row">
                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card gutter-b card-stretch ribbon ribbon-top ribbon-ver">
                                <div class="ribbon-target bg-warning" style="top: -2px; right: 20px;">
                                    <i class="la la-close  text-white"></i>
                                </div>
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-light-primary btn-hover-primary btn-sm btn-icon btn-circle d-none">
                                            <i class="fa fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="{{asset('assets/media/users/300_1.jpg')}}" alt="image" />
                                                </div>
                                            </div>
                                            <!--end::Pic-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">
                                                    Luca Doncic
                                                </a>
                                                <span class="text-muted font-weight-bold">
                                                    Head of Development
                                                </span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Info-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center font-size-h4 mb-3">
                                            <span class="text-body font-weight-bold mr-4"><i class="fa fas fa-money-bill-wave-alt"></i></span>
                                            <span class="text-body font-weight-bold">IDR 2.000.000</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="text-dark-75 font-weight-bold mr-4"><i class="fa fas fa-map-marker"></i></span>
                                            <span class="text-muted font-weight-bold">Makassar, Sulawesi Selatan</span>
                                        </div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            </div>

        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script type="text/javascript">

</script>
@endpush