
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Diseminasi ITSA</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="css/app.css"> -->
        <link rel="stylesheet" href="css/style.css">
        
		<style>
			body {
				letter-spacing: 1px;
			}
		
			.bg-pentest {
				background-image: url("assets/penetration-test.jpg");
			}
		</style>
    </head>

    <body>
        @include('inc.navigas2')
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 justify-content-center pt-5">
					<h1 class="cover-heading text-light text-dark text-center">Information Technology Security Assessment</h1>
					<p class="lead text-dark text-center pt-1">Information Technology Security Assesment (ITSA) merupakan layanan publik terkait pengujian kerentanan, pemberian saran dan rekomendasi keamanan guna meminimalisir celah kerawanan yang terdapat pada sistem informasi suatu organisasi.</p>
					<div class="d-flex justify-content-center pt-2">
						<a href="/layanan" class="btn btn-lg btn-primary">Layanan ITSA</a>
					</div>
				</div>
				<div class="col-md-6 align-self-center">
					<img src="assets/itsa2.png" alt="" width="90%" class="d-block mx-auto">
				</div>
			</div>
		</div>

		<div class="container-fluid pt-5 text-center">
			<h3>Kegiatan ITSA</h3>
		</div>

		<div class="container-fluid pt-1">
			<div class="row">
				<div class="col-4">
					<img src="assets/i1.jpg" alt="" width="100%">
				</div>
				<div class="col-4">
					<img src="assets/i2.jpg" alt="" width="100%">
				</div>
				<div class="col-4">
					<img src="assets/i3.jpg" alt="" width="100%">
				</div>
			</div>
		</div>

		<div class="container-fluid pt-2">
			<div class="row">
				<div class="col-6">
					<img src="assets/i4.jpg" alt="" width="100%">
				</div>
				<div class="col-6">
					<img src="assets/i5.jpg" alt="" width="100%">
				</div>
			</div>
		</div>
        @include('inc.footer')
        <script src="js/app.js"></script>        
    </body>
</html>