@extends('layouts.dashboard')
@section('title', 'Sinikerja - Manage your jobs and get the best candidate ')

@section('dashboard-active', 'menu-item-active')

@push('styles')
<link href="{{asset('assets/css/style.custome.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div style="width: 100%;">
    <div class="container">
        <div class="card card-hero py-30">
            <div class="card-body d-flex p-0">
                <div class="flex-grow-1 py-20 flex-grow-1 bgi-no-repeat" style="background-position: calc(100% + 0.5rem) bottom; background-size: 40% auto; background-image: url(assets/media/sinikerja/hero.png)">
                    <div class="card-text-width">
                        <h1 class="text-dark pb-5 display-3 font-weight-bolder">
                            Temukan <span>Kandidat Terbaik</span> untuk Usahamu
                        </h1>

                        <p class="text-dark-70 pb-3 font-weight-bold font-size-h5">
                            Website Sinikerja bukan sebatas untuk Perusahaan yang mencari kandidat, tapi bisa buat Organisasi/Lembaga, Rumah Tangga, Khusus UKM (Usaha Kecil Mikro), Pengurus Masjid.
                        </p>

                        <div class="mb-15">
                            <img src="{{asset('assets/media/sinikerja/line.png')}}" />
                        </div>

                        <a href="#" class="btn btn-dark btn-pill font-size-h5 font-weight-bold py-3 px-6 mr-2">Cari Pekerjaan</a>
                        <a href="#" class="btn btn-warning btn-pill font-size-h5 font-weight-bold py-3 px-6">Buka Lowongan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background-position: center center; background-size: cover; background-image: url(assets/media/sinikerja/cover.svg)">
        <div class="container py-30">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card card-featured">
                        <div class="card-body text-center">
                            <img class="mb-5" src="{{asset('assets/media/sinikerja/lowongan_pekerjaan.svg')}}" />
                            <div class="font-size-h3 font-weight-bolder text-white">Posting Lowongan Pekerjaan</div>
                            <div class="font-size-h5 text-white">
                                Posting Lowongan Pekerjaan Anda dan dapatkan akses database serta manajemen kandidat dalam satu platform.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card card-featured">
                        <div class="card-body text-center">
                            <img class="mb-5" src="{{asset('assets/media/sinikerja/recommended_talent.svg')}}" />
                            <div class="font-size-h3 font-weight-bolder text-white">Recommended Talent</div>
                            <div class="font-size-h5 text-white">
                                Temukan talenta yang tepat dengan waktu dan biaya yang efisien.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card card-featured">
                        <div class="card-body text-center">
                            <img class="mb-5" src="{{asset('assets/media/sinikerja/guarantee_talent.svg')}}" />
                            <div class="font-size-h3 font-weight-bolder text-white">Guarantee Talent</div>
                            <div class="font-size-h5 text-white">
                                Maksimalkan Pencarian Kandidat dengan Desain Poster Lowongan Pekerjaan anda
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card card-featured">
                        <div class="card-body text-center">
                            <img class="mb-5" src="{{asset('assets/media/sinikerja/poster_lowongan.svg')}}" />
                            <div class="font-size-h3 font-weight-bolder text-white">Poster Lowongan Pekerjaan</div>
                            <div class="font-size-h5 text-white">
                                Maksimalkan Pencarian Kandidat dengan Desain Poster Lowongan Pekerjaan anda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-30">
        <h1 class="text-dark display-4 text-center font-weight-bold mb-20">Kami Membantu Usaha Anda Berkembang</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-featured">
                    <div class="card-body text-center">
                        <h1 class="text-dark display-3 font-weight-bold" id="candidates">3000</h1>
                        <p class="font-size-h5 mb-0">Database talenta profesional</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-featured">
                    <div class="card-body text-center">
                        <h1 class="text-dark display-3 font-weight-bold" id="companies">500</h1>
                        <p class="font-size-h5 mb-0">Perusahaan telah bekerjasama dengan kami</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-featured">
                    <div class="card-body text-center">
                        <h1 class="text-dark display-3 font-weight-bold" id="applicant">5000</h1>
                        <p class="font-size-h5 mb-0">Talenta telah direkrut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-banner">
        <div class="card-body d-flex p-0">
            <div class="flex-grow-1 py-30 card-rounded bgi-no-repeat d-flex align-items-center" style="background-color: #F8F8FD;">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-12 col-xl-5">
                            <img src="{{asset('assets/media/sinikerja/banner.svg')}}" />
                        </div>
                        <div class="col-12 col-xl-7">
                            <h1 class="text-dark display-4 font-weight-bold" style="max-width: 600px;">
                                Mulai Temukan Kandidat
                                yang Profesional
                            </h1>

                            <p class="text-dark my-5 font-size-h5 font-weight-bold">
                                Segera daftar dan rekrut kandidat terbaik
                            </p>

                            <a href="#" class="btn btn-warning btn-pill font-size-h5 font-weight-bold py-3 px-8 mt-5">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-30">
    <h1 class="text-dark display-4 text-center font-weight-bold mb-20">Tren & Info Karier</h1>
        <div class="row">
            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card card-article">
                    <div class="thumbnail">
                        <img src="{{asset('assets/media/stock-600x400/img-1.jpg')}}" />
                    </div>

                    <div class="card-body px-0 py-5">
                        <h1 class="font-weight-bold text-dark mt-0">
                            Cek Dulu, Ini Perbedaan Data Analyst vs Data Scientist!
                        </h1>

                        <h5 class="text-dark-50 font-size-h6 mt-5 mb-0">
                            Posted on 26 August, 2022
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card card-article">
                    <div class="thumbnail">
                        <img src="{{asset('assets/media/stock-600x400/img-2.jpg')}}" />
                    </div>

                    <div class="card-body px-0 py-5">
                        <h1 class="font-weight-bold text-dark mt-0">
                            Tren Karier Era 4.0, Yuk Menjadi Digital Nomad!
                        </h1>

                        <h5 class="text-dark-50 font-size-h6 mt-5 mb-0">
                            Posted on 30 June, 2022
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
                <div class="card card-article">
                    <div class="thumbnail">
                        <img src="{{asset('assets/media/stock-600x400/img-3.jpg')}}" />
                    </div>

                    <div class="card-body px-0 py-5">
                        <h1 class="font-weight-bold text-dark mt-0">
                            Dampak Merger Perusahaan Bagi Karyawan
                        </h1>

                        <h5 class="text-dark-50 font-size-h6 mt-5 mb-0">
                            Posted on 30 June, 2022
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{asset('assets/js/pages/count-me.min.js')}}"></script>
<script>
    window.onload = () => {
        $("#candidates").countMe(3, 3);
        $("#companies").countMe(5, 3);
        $("#applicant").countMe(7, 3);
    }
</script>
@endpush