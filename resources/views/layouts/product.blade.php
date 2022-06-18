<!doctype html>
<html lang="en">

<head>
	<title>KOBE FOOD PRODUCTS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="style.css">
	<style>

	</style>
</head>

<body>
	<div class="modal fade" id="producteditmodal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editmodal">Product Informations</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">cancel</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<section class=" container product my-2">

		<div class="row mt-2">
			<div class="col-lg-12 col-md-12 col-12 ">
				<img class="img-fluid w-100 pb-1" src="images/f1.png" id="MainImg" alt="">
			</div>
			<div class="col-lg-12 col-md-12 col-12">
				<h6>KOBE Food Products</h6>
				<h3>Mchele na Bidhaa zingine</h3>
				<!-- <h6 class="mt-2 mb-2 clor"style="padding-bottom: 2px;">Color:  Pink</h6> -->
				<h6 id="pric">Price: {{$products->price}}</h6>
				<h4 class="mt-2 mb-2" style="padding-bottom: 2px;">Product Details</h4>
				<span id="description">{{$products->description}}</span>
			</div>
		</div>
	</section>


	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>