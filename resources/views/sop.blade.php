@extends('layouts.app')

@section('content')
<h1>SOP</h1>
@foreach($sop as $sp)
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">{{$sp->nama}}</h2>
      <a href="{{ url('sop/sop_1.pdf') }}">Klik Disni</a>
      <p class="lead">Pemaparan hasil temuan dari proses Percobaan Penetrasi dan Serahterima laporan.</p>
    </div>
    <div class="bg-white shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
  </div>
</div>
@endforeach
@endsection
