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
          <h1 class="display-4">SOP</h1>
      </div>
  </div>
</div>

<div class="container-fluid padding">
  <div class="row padding justify-content-center">

      <div class="col-md-6 py-2">
          <div class="card">
              <img class="card-img-top" src="assets/sop.png">
              <div class="card-body">
                  <h4 class="card-title">SOP Penyusunan Permohonan Laporan</h4>
                  <a href="sop/sop_1.pdf" class="btn btn-outline-primary">Baca</a>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
