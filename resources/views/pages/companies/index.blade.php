@extends('layouts.dashboard')
@section('title', 'Sinikerja - Manage your profile company')

@section('companies-active', 'menu-item-active')

@push('styles')

@endpush

@section('content')
<!--begin::Content-->
<div class="content  pt-0  d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Entry-->
    <!--begin::Hero-->
    <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-top" style="background-image: url('assets/media/bg/bg-9.jpg')">
        <div class=" container ">
            <div class="d-flex justify-content-between align-items-center pt-25 pb-15">
                <h1 class="font-weight-bolder text-dark mb-0">
                    Bahagia menjadi bagian dari kami
                </h1>
                <div class="d-flex">
                    <a href="/companies/edit" class="btn btn-sm btn-text font-size-h6 font-weight-bold mt-n20 px-6">Edit Profile</a>
                </div>
            </div>

            <div class="pb-25">
                <div class="d-flex align-items-center">
                    <a href="#" class="d-block font-weight-bold mr-4">
                        <div class="btn btn-sm btn-icon btn-circle btn-light-facebook btn-light btn-shadow mr-2">
                            <i class="socicon-dribbble"></i>
                        </div>
                        <span class="text-body">Https://www.sinikerja.com</span>
                    </a>

                    <a href="#" class="d-block font-weight-bold mr-4">
                        <div class="btn btn-sm btn-icon btn-circle btn-light-facebook btn-light btn-shadow mr-2">
                            <i class="socicon-facebook"></i>
                        </div>
                        <span class="text-body">@sinikerjaofficial</span>
                    </a>

                    <a href="#" class="d-block font-weight-bold mr-4">
                        <div class="btn btn-sm btn-icon btn-circle btn-light-facebook btn-light btn-shadow mr-2">
                            <i class="socicon-instagram"></i>
                        </div>
                        <span class="text-body">@sinikerjaofficial</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end::Hero-->

    <!--begin::Section-->
    <div class="container mt-n15">
        <div class="row">
            <div class="col-sm-8">
                <!--begin::Card-->
                <div class="card mb-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Perusahaan / UMKM</label>
                            <div class="input-group input-group-solid">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la fab la-wpforms icon-lg"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="" value="PT Sinikerja Maha Rewa" disabled />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Karyawan</label>
                            <div class="input-group input-group-solid">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la fab la-wpforms icon-lg"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="" value="50 - 100" disabled />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jenis Usaha</label>
                            <div class="input-group input-group-solid">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la fab la-wpforms icon-lg"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="" value="Tour & Travel" disabled />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Industri</label>
                            <div class="input-group input-group-solid">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la fab la-wpforms icon-lg"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="" value="Travel Guide" disabled />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>No. Handphone</label>
                            <div class="input-group input-group-solid">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="la fab fa fa-phone-alt icon-md"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="" value="085342490237" disabled />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="input-group input-group-solid">
                                <textarea class="form-control" disabled="disabled" rows="2">Kompleks Ruko Citraland Celebes blok G no. 7, Tombolo, Kec. Somba Opu, Kota Makassar, Sulawesi Selatan 90233</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <div class="input-group input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la fa fa-map-marker-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" value="Sulawesi Selatan" disabled />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Kabupaten/Kota</label>
                                    <div class="input-group input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la fa fa-map-marker-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" value="Makassar" disabled />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <div class="input-group input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la fa fa-map-marker-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" value="Tamalanrea" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Item-->

                <!--begin::Card-->
                <div class="card mb-8">
                    <!--begin::Body-->
                    <div class="card-body">
                        <h4 class="font-weight-bold text-dark">Informasi Perusahaan</h4>
                        <p>
                            PT Innovate Mas Indonesia (IMI) renamed PT Eka Mas Republik starting from February 2015, was established in 2010, is an interactive multimedia broadband company offering services Quadplay 1 in Indonesia. We provide a wide range of entertainment services, information and communications under two brands namely HOMElinks old and Innovation, and this time we constantly strive to develop and improve the system by launching a new product that we call Myrepublic. We convey using the two best technology fiber optic cables, Hybrid Fiber Coaxial (HFC) and most recently, Fiber To The Home (FTHH). Extensive fiber infrastructure, allowing PT Eka Mas Republik to deploy last mile directly to the major cities in Indonesia. With reliability and super-speed Internet access through fiber and latest broadcasting technology OTT, PT Eka Mas Republik will revolutionize the broadband industry in Indonesia, enabling interactive multimedia services to end consumers.
                        </p>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Item-->
            </div>
            <div class="col-sm-4">
                <div class="alert alert-success mb-5 p-5" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <div class="border-bottom border-white opacity-20 mb-5"></div>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
            </div>
        </div>
    </div>
    <!--end::Section-->

    <!--begin::Section-->
    <div class=" container ">
        <div class="row">
            <div class="col-lg-4">
                <!--begin::Card-->
                <a href="#" class="card card-custom wave wave-animate-slow bg-grey-100 mb-8 mb-lg-0">
                    <!--begin::Card Body-->
                    <div class="card-body">
                        <div class="d-flex align-items-center p-6">
                            <!--begin::Icon-->
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
                                            <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <h3 class="text-dark h3 mb-3">
                                    Applicant
                                </h3>
                                <div class="text-dark-50">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end::Card Body-->
                </a>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <a href="#" class="card card-custom wave wave-animate bg-grey-100 mb-8 mb-lg-0">
                    <!--begin::Card Body-->
                    <div class="card-body">
                        <div class="d-flex align-items-center p-6">
                            <!--begin::Icon-->
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <h3 class="text-dark h3 mb-3">
                                    Post a Job
                                </h3>
                                <div class="text-dark-50">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end::Card Body-->
                </a>
                <!--end::Card-->
            </div>
            <div class="col-lg-4">
                <!--begin::Card-->
                <a href="#" class="card card-custom wave wave-animate-fast bg-grey-100">
                    <!--begin::Card Body-->
                    <div class="card-body">
                        <div class="d-flex align-items-center p-6">
                            <!--begin::Icon-->
                            <div class="mr-6">
                                <span class="svg-icon svg-icon-4x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg><!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <div class="d-flex flex-column">
                                <h3 class="text-dark h3 mb-3">
                                    Candidates
                                </h3>
                                <div class="text-dark-50">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end::Card Body-->
                </a>
                <!--end::Card-->
            </div>
        </div>
    </div>
    <!--end::Section-->
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection

@push('scripts')
<script>
    "use strict";
    // Class definition

    var KTBootstrapMarkdown = function() {
        // Private functions
        var demos = function() {

        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTBootstrapMarkdown.init();
    });
</script>
@endpush