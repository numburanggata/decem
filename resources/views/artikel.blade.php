@extends('layouts.app')

@section('style')
<style>
    body {
        letter-spacing: 1px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid padding py-4">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-4">Artikel</h1>
        </div>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row padding">

        <div class="col-md-6 py-2">
            <div class="card">
                <img class="card-img-top" src="assets/survei/charts.png">
                <div class="card-body">
                    <h4 class="card-title">Survei Analisis Kerentanan di Situs Web Pemerintahan Indonesia</h4>
                    <p class="card-text">Layanan E-government sekarang meningkat di pemerintahan karena penghematan biaya, waktu layanan, adaptif, serta meningkatkan kinerja. Dengan adanya peraturan dan pedoman terkait e-government...</p>
                    <a href="/surveikerentanan" class="btn btn-outline-primary">Baca</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 py-2">
            <div class="card">
                <img class="card-img-top" src="assets/cybergym.jpg">
                <div class="card-body">
                    <h4 class="card-title">Metodologi Information Technology Security Assessment (ITSA)...</h4>
                    <p class="card-text">Kemajuan TIK mendorong secara aktif E-Government digunakan di seluruh dunia sebagai alat yang sangat penting dengan tujuan untuk memfasilitasi akses ke layanan publik bagi masyarakat. Secara umum...</p>
                    <a href="/metodologi-itsa" class="btn btn-outline-primary">Baca</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 py-2">
            <div class="card">
                <img class="card-img-top" src="assets/log4j.jpg">
                <div class="card-body">
                    <h4 class="card-title">Kerentanan zero-day pada Apache Java Logging Library Log4J</h4>
                    <p class="card-text">Pada tanggal 9 Desember 2021, peneliti keamanan siber menemukan kerentanan zero-day yang diberi kode CVE-2021-44228 pada Apache Java Logging Library atau dapat disebut dengan log4j. Adapun versi dari Log4...</p>
                    <a href="/kerentanan-log4j" class="btn btn-outline-primary">Baca</a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

