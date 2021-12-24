@extends('layouts.app')


@section('style')
<style>
    body {
        letter-spacing: 1px;
    }

    p {
        font-size: large;
    }
</style>
@endsection

@section('content')
<div class="container-fluid padding pt-3">
    <div class="row text-center justify-content-center">
        <div class="col-7">
            <h1>Survei Analisis Kerentanan di Situs Web Pemerintahan Indonesia</h1>
        </div>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row padding justify-content-center">
        <div class="col-9" style="text-align: justify">
          <br>
            <p>Layanan E-government sekarang meningkat di pemerintahan karena penghematan biaya, waktu layanan, adaptif, serta meningkatkan kinerja. Dengan adanya peraturan dan pedoman terkait e-government yaitu Keputusan Presiden No. 3 Tahun 2003 untuk Sistem Pemerintahan Berbasis Elektronik (SPBE) membuat pelayanan publik mudah diakses oleh publik.</p>
            <p>Dibutuhkan suatu layanan pengujian keamanan untuk situs pemerintahan karena semakin maraknya serangan yang terjadi dan munculnya serangan baru. Kegiatan uji penetrasi dilakukan untuk mencari kerawanan yang ada di situs pemerintahan yang kemudian hasil tersebut dilaporkan untuk dilakukan perbaikan pada situsnya.</p>
            <p>Penelitian menggunakan standar OWAZAP, CVE, CWE dan SANS untuk melakukan security assessment pada situs pemerintahan Indonesia. Tahap yang dilakukan dalam penelitian yaitu Non-Disclosure Agreement (NDA), Information Gathering, Scanning dan Pentesting. Tahap penelitian dalam menentukan penilaian keamanan dilakukan secara legal selama tahun 2018 hingga 2021 melalui non-disclosure agreement dengan pemilik situs pemerintahan.</p>
            <img src="assets/survei/image1.png" alt="" class="mw-100">
            <p>Dalam melakukan serangan terdapat dua skenario yang dapat digunakan. Skenario pertama, serangan langsung ditujukan pada situs pemerintahan atau sistem informasi dengan teknik serangan SQL Injection, DoS dan beberapa serangan lain yang tidak membutuhkan interaksi dengan klien. Skenario kedua, serangan membutuhkan 2 orang dengan 1 orang sebagai klien dan 1 orang lagi sebagai penyerang. Serangan yang dilakukan yaitu XSS, clickjacking, dan beberapa serangan lain yang membutuhkan interaksi antara klien dengan situs. Hasil serangan akan dilaporkan pada pemilik situs pemerintahan dan didokumentasikan.</p>
            <p>Berdasarkan hasil pengujian yang dilakukan pada 70 situs pemerintah dari tahun 2018 hingga 2021, terdapat 4 tingkat resiko kerawanan yang ditentukan yaitu Critical, High, Medium, Low. Banyaknya kerawanan disetiap situs serta tingkat kerawanannya dibentuk dalam diagram dengan hasil setiap tahun terdapat peningkatan kerawanan, namun pada tahun 2021 terjadi penurunan.</p>
            <img src="assets/survei/charts.png" alt="" class="mw-100 mx-auto d-block"><br>
            <p>Dari hasil tersebut juga ditentukan berbagai teknik serangan terjadi yang diurutkan dari serangan yang paling banyak disetiap tahunnya. </p>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Rank</th>
                    <th scope="col">2018</th>
                    <th scope="col">2019</th>
                    <th scope="col">2020</th>
                    <th scope="col">2021</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>SQL Injection</td>
                    <td>Possible to Brute Force/Dictionary Attack</td>
                    <td>Possible to Brute Force/Dictionary Attack</td>
                    <td>Cross-site Scripting (XSS)</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Dictionary Listing</td>
                    <td>Cleartext Submission of Password</td>
                    <td>Security Header not Set</td>
                    <td>Security Header not Set</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Cleartext Submission of Password</td>
                    <td>Unencrypted Communication</td>
                    <td>Unencrypted Communication</td>
                    <td>Possible to Brute Force/Dictionary Attack</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Unencrypted Communication</td>
                    <td>Security Header not Set</td>
                    <td>Cleartext Submission of Password</td>
                    <td>IDOR</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Cross-site Scripting (XSS)</td>
                    <td>Sensitive Data Exposure</td>
                    <td>Autocomplete Enabled</td>
                    <td>SQL Injection</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Possible to Brute Force/Dictionary Attack</td>
                    <td>DDoS</td>
                    <td>Sensitive Data Exposure</td>
                    <td>Cleartext Submission of Password</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>DDoS</td>
                    <td>SQL Injection</td>
                    <td>DDoS</td>
                    <td>Unencrypted Communication</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Sensitive Data Exposure</td>
                    <td>Cross-site Scripting (XSS)</td>
                    <td>Allow Weak Password</td>
                    <td>Allow Weak Password</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Security Header not Set</td>
                    <td>Allow Weak Password</td>
                    <td>SQL Injection</td>
                    <td>Sensitive Data Exposure</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Use Weak Algorithm or Weak Hash Function</td>
                    <td>Directory Listing</td>
                    <td>Cross-site Scripting (XSS)</td>
                    <td>Directory Listing</td>
                  </tr>
                </tbody>
              </table>
            <p>Berdasarkan hasil penelitian yang dilakukan bahwa terdapat 7 kerawanan yang selalu ada setiap tahun di situs pemerintahan Indonesia. Situs pemerintahan Indonesia memiliki kerawanan yang semakin meningkat dari tahun 2018 hingga tahun 2020. Namun, tingkat kerawan berkurang pada tahun 2021 karena pemerintah Indonesia semakin memahami pentingnya keamanan di situs pemerintahannya.</p>
        </div>
    </div>
</div>
@endsection