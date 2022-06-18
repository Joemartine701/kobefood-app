<!doctype html>
<html lang="en">

<head>
	<title>{{ config('app.name', 'KOBE FOOD PRODUCTS') }}</title>
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
	<link rel="icon" type="image/png" sizes="96x96" href="">

</head>

<body onbeforeunload="return areYouSure()">
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<!-- <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a> -->
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="home" class="active"><span>Dashboard</span></a></li>
						<li><a href="/contactUsView" class=""><span>Messages</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><span>Products</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="/adminhome" class="">Upload Products</a></li>
									<li><a href="/viewP" class="">View Products</a></li>
								</ul>
							</div>
						</li>

						<li>
							<a href="#subPage" data-toggle="collapse" class="collapsed"> <span>Gallery</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPage" class="collapse ">
								<ul class="nav">
									<li><a href="/adminupgallery" class="">Upload Gallery</a></li>
									<li><a href="/viewgallery" class="">View Gallery</a></li>
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#reg" data-toggle="collapse" class="collapsed"> <span>Manage</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="reg" class="collapse ">
								<ul class="nav">
									<li><a href="register1" class="">Register</a></li>
									<li><a href="/viewA" class="">View Admins</a></li>
								</ul>
							</div>
						</li>
						<li><a href="change-password"><span>Change Password</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->

					<!-- END OVERVIEW -->
					@yield('body')


				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 <a href="#" target="_blank">@</a>FAM</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
	<script src="https://cdn.datatables.net/autofill/2.3.5/js/autoFill.bootstrap.min.js"></script>
	<script src="{{asset('vendor/datatables/button.serve-side.js')}}"></script>
	<script src="{{ asset('js/app.js') }}"></script>
	
	<script>
		var areYouReallySure = false;

		function areYouSure() {
			if (allowPrompt) {
				if (allowPrompt) {
					if (!areYouReallySure && true) {
						areYouReallySure = true;
						var confMessage = "Welcome to our site!!! for more services contact us";
						return confMessage;
					}
				} else {
					allowPrompt = true;
				}
			}
			var allowPrompt = true;
			window.onbeforeunload = areYouSure;
		}




		// $(document).ready(function(){
		//   $('.editbtn').on('click',function(){
		//     $('#producteditmodal').modal('show');

		// 	$tr = $(this).closest('tr');

		// 	var data = $tr.children("td").map(function(){
		// 		return $(this).text();
		// 	}).get();
		// 	console.log(data);

		// 	$('#id').val(data[0]);
		// 	$('#name').val(data[1]);
		// 	$('#product_code').val(data[2]);
		// 	$('#product_color').val(data[3]);
		// 	$('#product_description').val(data[4]);
		// 	$('#product_price').val(data[5]);
		// 	$('#image').val(data[6]);
		//   });
		//   $('#edit').on('submit',function(e){
		// 	  e.preventDefault();
		// 	  var id = $('#id').val();

		// 	  $.ajax({
		// 		  type:"PUT",
		// 		  url:"/productUpdate/"+id,
		// 		  data:$('#edit').serialize(),
		// 		  success: function(response){
		// 			  console.log(rasponse);
		// 			  $('#producteditmodal').modal('hide');
		// 			  alert('data updated');
		// 		  },
		// 		  error: function(error){
		// 			  console.log(error);
		// 		  }
		// 	  })
		//   })
		// });
	</script>
</body>

</html>