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
        <div class="col-8">
            <h1>Kerentanan zero-day pada Apache Java Logging Library Log4J</h1>
        </div>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row padding justify-content-center">
        <div class="col-9">
            <br>
            <p>Pada tanggal 9 Desember 2021, peneliti keamanan siber menemukan kerentanan zero-day yang diberi kode CVE-2021-44228 pada Apache Java Logging Library atau dapat disebut dengan log4j. Adapun versi dari Log4j yang terdampak oleh kerentanan ini adalah Apache Log4j antara versi 2.0 sampai dengan 2.14.1. Apache Log4j versi 2.x menggunakan fitur JNDI dalam konfigurasi, log message, dan parameter message. Fitur JNDI yang digunakan tidak memiliki keamanan dan perlindungan sehingga menyebabkan adanya kerentanan Remote Code Execution (RCE) yang dapat dimanfaatkan oleh penyerang.</p>
            <p>Berdasarkan CVSS Score 3.1, kerentanan ini memiliki nilai 10.0 dan dikategorikan sebagai kerentanan Critical. </p>
            <img src="assets/log4j/cvss.png" alt="" class="mw-100 mx-auto d-block">
            <p>Dampak paling berbahaya dari kerentanan ini adalah terjadinya sensitive data exposure, penambahan atau modifikasi data, dan Denial of Service (DoS). Oleh karena adanya kerentanan tersebut, Tim Keamanan dari Pihak Apache telah merilis Apache Log4j versi 2.15.0 yang merupakan perbaikan dari celah kerentanan RCE. Selain adanya pembaharuan Apache Log4j menjadi versi 2.15.0, pencegahan kerentanan ini dapat dilakukan dengan melakukan mitigasi sebagaimana yang ditunjukkan pada tabel di bawah ini.</p>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Apache Log4j Release</th>
                    <th scope="col">Mitigasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">>= 2.10</th>
                    <td>
                        <li>Mengatur property sistem menjadi log4j2.formatMsgNoLookups</li>
                        <li>Mengatur environment variable LOG4J_FORMAT_MSG_NO_LOOKUPS menjadi true.</li></td>
                  </tr>
                  <tr>
                    <th scope="row">>= 2.7 dan > 2.14.1</th>
                    <td>Memodifikasi semua pola pada PatternLayout untuk menentukan konverter pesan sebagai %m{nolookups} bukan hanya %m</td>
                  </tr>
                  <tr>
                    <th scope="row">>= 2.0-beta9 dan <= 2.10.0</th>
                    <td>Menghapus JndiLookup kelas dari classpath: zip -q -d log4j-core-*.jar org/apache/logging/log4j/core/lookup/JndiLookup.class</td>
                  </tr>
                </tbody>
              </table>
            <p class="font-weight-bold ml-3">Sumber</p>
            <ol>
                <li>"CVE-2021-44228," [Online]. Available: https://nvd.nist.gov/vuln/detail/CVE-2021-44228#vulnCurrentDescriptionTitle. [Accessed 13 Desember 2021]. </li>
                <li>"Vulnerability in Apache Log4j Library Affecting Cisco Products: December 2021," [Online]. Available: https://tools.cisco.com/security/center/content/CiscoSecurityAdvisory/cisco-sa-apache-log4j-qRuKNEbd. [Accessed 13 Desember 2021]. </li>
                <li>"Apache Log4j Security Vulnerabilities," [Online]. Available: https://logging.apache.org/log4j/2.x/security.html. [Accessed 13 Desember 2021]. </li>
                <li>"CVE-2021-44228 Apache Log4j Vulnerability in NetApp Products," [Online]. Available: https://security.netapp.com/advisory/ntap-20211210-0007/. [Accessed 13 Desember 2021]. </li>
            </ol>
        </div>
    </div>
</div>

@endsection