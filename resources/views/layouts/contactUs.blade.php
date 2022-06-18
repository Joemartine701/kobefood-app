@extends('welcome')

@section('body')
<!-- Start Contact -->
<section id="intro" class="intro">
	<div class="intro-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
						<h2 class="h-ultra">KOBE FOOD PRODUCTS</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
						<h4 class="h-light">Provide <span class="color">best quality rice</span> for you</h4>
					</div>
					<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

							<ul class="lead-list">
								<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable Kilogram of rice you need</strong><br />Mchele unaotosha kwa kilo unazozihitaji</span></li>
								<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose the product that you need</strong><br />Chagua bidhaa unayohitaji</span></li>
								<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong> Use with your Family and Enjoy our delivery</strong><br />Tumia na familia ,furahia huduma zetu</span></li>
							</ul>

						</div>
					</div>


				</div>
				<div class="col-lg-6">
					<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

							<div class="panel panel-skin">
								<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Order Now.<small>(delivery to your door!)</small></h3>
								</div>
								<div class="panel-body">

									@if(Session::has('flash_message_success'))
									<div class="alert alert-sm alert-danger alert-block" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<strong>{!! session('flash_message_success')!!}</strong>
									</div>
									@endif
									<form role="form" class="lead" method="post" action="/uploadCont">
										@csrf
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="first_name" id="first_name" class="form-control input-md" required="required">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="last_name" id="last_name" class="form-control input-md" required="required">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Email</label>
													<input type="email" name="email" id="email" class="form-control input-md" required="required">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Phone number</label>
													<input type="text" name="phone" id="phone" class="form-control input-md" required="required">
												</div>
											</div>
										</div>
										<div class="col-md-14">
											<div class="form-group in_message">
												<textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required="required"></textarea>
											</div>
										</div>

										<div class="form-group">
											<button type="submit" class="btn btn-skin btn-block btn-lg">
												{{ __('Submit') }}
											</button>

										</div>

										<p class="lead-footer">* We'll contact you by phone & email later</p>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of contact section -->

<!-- End Contact -->
@endsection