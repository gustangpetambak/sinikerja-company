@extends('layouts.dashboard')
@section('title', 'Sinikerja - Manage your candidates')

@section('candidates-active', 'menu-item-active')

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
                    Semua kandidat
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
                    <label class="font-weight-bold mr-2 text-dark-50 mb-0" style="min-width: 80px;">Filter lokasi</label>
                    <select class="form-control form-control-md selectpicker">
                        <option>Makassar, Sulawesi Selatan</option>
                        <option>Kolaka Utara, Sulawesi Tenggara</option>
                        <option>Palu, Sulawesi Utara</option>
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
                <!--begin::Col-->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                            <img src="assets/media/users/300_1.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_9.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_11.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_3.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_2.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_10.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_16.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_15.jpg" alt="image" />
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <!--begin::Card-->
                    <div class="card gutter-b card-stretch">
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
                                        <img src="assets/media/users/300_20.jpg" alt="image" />
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
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@push('scripts')

@endpush
