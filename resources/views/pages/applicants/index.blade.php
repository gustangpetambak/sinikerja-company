@extends('layouts.dashboard')
@section('title', 'Sinikerja - Manage your applicant')

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
                    Semua Pelamar
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
            <!--begin::Advance Table Widget 2-->
            <div class="card card-custom gutter-b mb-5">
                <!--begin::Body-->
                <div class="card-body pt-3 pb-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <tbody>
                                <tr>
                                    <td class="pl-0 py-4" style="width: 60px">
                                        <div class="symbol-list d-flex flex-wrap">
                                            <div class="symbol symbol-40 symbol-lg-50 symbol-circle">
                                                <img alt="Pic" src="assets/media/users/300_2.jpg" />
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                        Anna Krox
                                        </a>
                                        <div>
                                            <span class="text-muted font-weight-bold">Phyton Developer</span>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                            IDR 20,000,000
                                        </span>
                                        <span class="text-muted font-weight-bold">
                                            Expected
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted font-weight-500">
                                            Ruby on Rails, AngularJS
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                    </td>
                                    <td class="text-right pr-0">
                                        <a href="/applicants/detail" class="btn btn-pill btn-light-primary btn-sm font-weight-bold px-5">
                                            <span class="svg-icon svg-icon-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                            </span>

                                            Lihat Detail
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>

            <div class="card card-custom gutter-b mb-5">
                <!--begin::Body-->
                <div class="card-body pt-3 pb-0">
                    <!--begin::Table-->
                    <div class="table-responsive">
                        <table class="table table-borderless table-vertical-center">
                            <tbody>
                                <tr>
                                    <td class="pl-0 py-4" style="width: 60px">
                                        <div class="symbol-list d-flex flex-wrap">
                                            <div class="symbol symbol-40 symbol-lg-50 symbol-circle">
                                                <img alt="Pic" src="assets/media/users/300_1.jpg" />
                                            </div>
                                        </div>
                                    </td>
                                    <td class="pl-0">
                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
                                            Luca Doncic
                                        </a>
                                        <div>
                                            <span class="text-muted font-weight-bold">Head of Development</span>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                                            IDR 2,000,000
                                        </span>
                                        <span class="text-muted font-weight-bold">
                                            Expected
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="text-muted font-weight-500">
                                            Ms Office, Photoshop
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                    </td>
                                    <td class="text-right pr-0">
                                        <a href="/applicants/detail" class="btn btn-pill btn-light-primary btn-sm font-weight-bold px-5">
                                            <span class="svg-icon svg-icon-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg><!--end::Svg Icon-->
                                            </span>

                                            Lihat Detail
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Advance Table Widget 2-->
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