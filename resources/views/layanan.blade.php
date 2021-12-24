@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="css/layanan.css">
<style>
  .bglayanan {
    background-image: url("assets/bglayanan.png");
  }
</style>
@endsection

@section('content')
<div class="position-relative p-3 p-md-5 m-md-3 text-center bglayanan">
    <h1 class="display-4 fw-bold text-light">Identifikasi</h1>
    <p class="lead fw-normal text-light">Melakukan ITSA merupakan jawaban dari identifikasi kerentanan Sistem Informasi dengan langkah-langkah mudah berikut ini</p>
    <a class="btn btn-outline-warning" href="/kontak">Kontak Kami</a>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">1. Permohonan Layanan ITSA</h2>
      <p class="lead">Ajukan surat permohonan layanan ITSA kepada kami (Direktorat Operasi Keamanan Siber)</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/1.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;">
    </div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">2. Menerima Surat Jawaban</h2>
      <p class="lead">Tunggu surat jawaban dari kami</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/2.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">3. Koordinasi</h2>
      <p class="lead">Koordinasi dilakukan melalui PIC yang ditunjuk, informasi ini akan tertera pada surat jawaban yang kami kirimkan.</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/3.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;"></div>
  </div>
  <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">4. Kickoff Meeting</h2>
      <p class="lead">Kickoff meeting merupakan pertemuan dalam rangka mengawali kegiatan ITSA</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/4.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">5. Penandatanganan Non-Disclosure Agreement (NDA)</h2>
      <p class="lead">NDA berisi ketentuan, hak dan kewajiban pihak BSSN dan Pemilik Aset.</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/5.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;">
    </div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">6. Pelaksanaan ITSA</h2>
      <p class="lead">Tahapan pengujian.</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/6.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;">
    </div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">7. Penyampaian Hasil ITSA</h2>
      <p class="lead">Paparan dan penyerahan laporan hasil ITSA oleh tim BSSN.</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/7.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;"></div>
  </div>
  <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">8. Perbaikan Celah oleh Pemilik Aset</h2>
      <p class="lead">Perbaikan celah oleh Pemilik Aset</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/8.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;"></div>
  </div>
</div>

<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">9.	Verifikasi Perbaikan</h2>
      <p class="lead">Verifikasi perbaikan yang telah dilakukan untuk memastikan celah tertutup dengan baik.</p>
    </div>
    <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/9.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;">
    </div>
  </div>
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">10.	Survei Kepuasan Layanan</h2>
      <p class="lead">Terakhir, sebagai bahan evaluasi bagi kami, mohon untuk mengisi Survei Kepuasan Layanan ITSA.</p>
    </div>
    <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      <img src="assets/layanan/10.png" alt="" class="img-thumbnail" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0; object-fit: cover;"></div>
  </div>
</div>

@endsection