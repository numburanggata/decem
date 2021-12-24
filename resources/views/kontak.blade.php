@extends('layouts.app')

@section('style')
<style>
    body {
        letter-spacing: 1px;
    }
</style>
@endsection

@section('content')
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-4">Kontak Kami</h1>
        </div>
    </div>
</div>

<div class="container-fluid pt-3">
	<div class="row">
		<div class="col-md-6 justify-content-center">
			<p class="text-dark text-center" style="font-size: x-large;">Surat permohonan ITSA dapat disampaikan ke email:</p>
			<div class="d-flex justify-content-center">
				<a href="mailto:itsa@bssn.go.id" style="font-size: xx-large;">itsa@bssn.go.id</a>
			</div>
		</div>
		<div class="col-md-6 align-self-center">
			<h3>BADAN SIBER DAN SANDI NEGARA</h3>
			<h4>Jl. Harsono RM No.70, RT.2/RW.4, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550</h4>
		</div>
	</div>
</div>
@endsection