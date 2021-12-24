@extends('layouts.app')


@section('style')
<style>
    body {
        letter-spacing: 1px;
    }

    p, ol {
        font-size: large;
    }
</style>
@endsection

@section('content')
<div class="container-fluid padding pt-3">
    <div class="row text-center justify-content-center">
        <div class="col-8">
            <h1>Metodologi Information Technology Security Assessment (ITSA) untuk E-Government Berbasis Web</h1>
        </div>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row padding justify-content-center">
        <div class="col-9" style="text-align: justify">
          <br>
            <p>Kemajuan TIK mendorong secara aktif E-Government digunakan di seluruh dunia sebagai alat yang sangat penting dengan tujuan untuk memfasilitasi akses ke layanan publik bagi masyarakat. Secara umum, E-Government dikonseptualisasikan sebagai penggunaan Teknologi Informasi dan Komunikasi (TIK) oleh pemerintah yang diharapkan dapat membantu pemerintah dalam memberikan layanan kepada masyarakat, bisnis, dan cabang pemerintahan lainnya. Penggunaan E-Government tidak luput dari berbagai macam serangan siber seperti yang tercatat pada tahun 2020 bahwa, Pusat Operasi Keamanan Siber Nasional melaporkan terdapat 3.324 kasus Web Defacement, 189 kasus Cross-Site Scripting (XSS), dan 256 kasus SQL Injection di situs web pemerintah Indonesia.</p>
            <p>Oleh karena itu, sangat penting untuk menilai dan mengevaluasi situs web pemerintah yang ada sebagai metode untuk mengurangi potensi kerugian dari serangan siber yang tujuannya tidak lain adalah untuk menemukan kerentanan yang dapat dimanfaatkan oleh penyerang. Di Indonesia terdapat Peraturan Presiden Republik Indonesia Nomor 95 Tahun 2018 (Sistem Pemerintahan Berbasis Elektronik atau dikenal dengan SPBE) yang mengatur penyelenggaraan pemerintahan yang menggunakan TIK untuk memberikan pelayanan kepada masyarakat secara efektif, terintegrasi, berkelanjutan, efisien, akuntabel, interoperabel, dan aman. Untuk mengetahui tingkat keamanan dan risiko yang mungkin terjadi pada SPBE maka perlu dilakukan Information Technology Security Assessment (ITSA) agar implementasi dari E-Government aman. ITSA sendiri merupakan salah satu layanan yang dimiliki Badan Siber dan Sandi Negara yang berkaitan dengan pengujian kerentanan, memberikan saran, dan rekomendasi terkait keamanan untuk meminimalkan celah kerentanan yang ada di semua sistem informasi pemerintah</p>
            <p>Peneliti keamanan siber telah mengeksplorasi Web Security Testing Guide (WSTG) yang merupakan panduan komprehensif untuk menguji keamanan aplikasi web sebagai metodologi ITSA untuk membantu praktisi keamanan siber meningkatkan keamanan E-Government yang berbasis web. Melalui pendekatan studi eksploratif untuk menemukan informasi tentang suatu sistem, WSTG berhasil dieksplorasi sebagai metodologi untuk melakukan ITSA pada aplikasi web. Untuk melakukan ITSA pada aplikasi web terdapat dua jenis pengujian berdasarkan pada WSTG, yaitu pengujian pasif dan aktif.</p>
            <p>Pengujian pasif, umumnya penguji harus memahami semua titik akses dan fungsionalitas dari sistem (misalnya, HTTP header, parameter, cookie, API, penggunaan/pola teknologi, dll.). Sedangkan untuk pengujian aktif, rangkaian pengujian telah dibagi menjadi 12 kategori, yaitu:</p>
            <div class="list-group">
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Information Gathering</h5>
                    <small>1</small>
                  </div>
                  <p class="mb-1">Pada tahap ini, informasi dikumpulkan untuk mengidentifikasi kerentanan yang ada dalam aplikasi web sebagai bahan pengujian keamanan.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Configuration and Deployment Management Testing</h5>
                    <small>2</small>
                  </div>
                  <p class="mb-1">Pada tahap ini dilakukan pengujian Configuration and Deployment Management untuk memastikan tidak ada kesalahan konfigurasi pada aplikasi web.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Identity Management Testing</h5>
                    <small>3</small>
                  </div>
                  <p class="mb-1">Pengujian yang dilakukan pada tahap ini adalah yang berkaitan dengan akun pengguna seperti kebijakan nama pengguna, proses pendaftaran pengguna, dan sebagainya.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Authentication Testing</h5>
                    <small>4</small>
                  </div>
                  <p class="mb-1">Tahap ini berkaitan dengan autentikasi antara pengguna dengan aplikasi. Hal tersebut misalnya seperti, bagaimana keamanan dari suatu password, penggunaan sistem autentikasi, siklus hidup password, pemulihan password atau PIN, dan bagaimana penggunaan One Time Password (OTP).</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Authorization Testing</h5>
                    <small>5</small>
                  </div>
                  <p class="mb-1">Pengujian pada tahap ini dilakukan verifikasi apakah mungkin untuk melewati skema otorisasi yang ada, menemukan kerentanan path traversal, atau menemukan cara untuk meningkatkan hak istimewa yang diberikan kepada penguji.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Session Management Testing</h5>
                    <small>6</small>
                  </div>
                  <p class="mb-1">Manajemen sesi adalah mekanisme yang mengontrol dan mempertahankan status pengguna yang berinteraksi dengan aplikasi berbasis web. Manajemen sesi secara luas mencakup segala sesuatu mulai dari bagaimana autentikasi pengguna dilakukan hingga apa yang terjadi ketika pengguna logout.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Input Validation Testing</h5>
                    <small>7</small>
                  </div>
                  <p class="mb-1">Kelemahan aplikasi web yang paling umum adalah mengenai kurangnya validasi input dari klien yang dapat menyebabkan beberapa kerentanan terkenal seperti Cross-Site Scripting (XSS) dan SQL Injection. Pada tahap ini dilakukan pengujian terhadap input yang dilakukan pada aplikasi web apakah tervalidasi dengan benar atau tidak.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Testing for Error Handling</h5>
                    <small>8</small>
                  </div>
                  <p class="mb-1">Pengujian terkait dengan Error Handling penting dilakukan untuk meminimalkan terungkapnya setiap informasi kerentanan yang bermanfaat bagi penyerang untuk melakukan eksploitasi pada aplikasi dan server. Pengujian Error Handling mencakup Testing for Improper Error Handling and Testing for Stack Traces.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Testing for Weak Cryptography</h5>
                    <small>9</small>
                  </div>
                  <p class="mb-1">Pemeriksaan terhadap implementasi dari kriptografi perlu dilakukan untuk memastikan keamanan data selama transmisi melalui jaringan dan data at rest di aplikasi atau server. Pengujian ini mencakup Testing for Weak Transport Layer Security, Testing for Padding Oracle, Testing for Sensitive Information Sent via Unencrypted Channels, dan Testing for Weak Encryption.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Business Logic Testing</h5>
                    <small>10</small>
                  </div>
                  <p class="mb-1">Business Logic Testing adalah jenis pengujian yang digunakan oleh penguji fungsional yang berfokus pada pengujian logika atau keadaan terbatas untuk memastikan alur logika bisnis berurutan, diproses secara berurutan, dan tidak dapat dilangkahi.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">Client-side Testing</h5>
                    <small>11</small>
                  </div>
                  <p class="mb-1">Pengujian sisi klien berkaitan dengan mengeksekusi kode pada klien, biasanya secara native di dalam web browser atau browser plugin.</p>
                </div>
                <div class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 font-weight-bold font-italic">API Testing</h5>
                    <small>12</small>
                  </div>
                  <p class="mb-1">Pengujian Application Programming Interface (API) adalah untuk memeriksa fungsionalitas, keandalan, kinerja, dan keamanan dari programming interfaces. Pengujian API menggunakan perangkat lunak untuk mengirim panggilan ke API, mendapatkan output, dan mencatat respons sistem.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection