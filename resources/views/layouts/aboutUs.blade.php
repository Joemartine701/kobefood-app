@extends('welcome')

@section('body')
<!-- Start About us -->
<div id="about" class="about-box">
	<div class="about-a1">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="row align-items-center about-main-info">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<h2> Welcome to KOBE Food Products </h2>
							<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							<p class="read-m-text">Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit. Nulla ut magna eu purus cursus sagittis. Praesent fermentum tincidunt varius. Proin sit amet tempus magna. Fusce pellentesque vulputate urna. </p>
							<a href="#" class="new-btn-d br-2 read-more">Read More</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="about-m">
								<ul id="banner">
									<li>
										<img src="images/riceplate3.png" alt="">
									</li>
									<li>
										<img src="images/riceplate2.png" alt="">
									</li>
									<li>
										<img src="images/riceplate1.png" alt="">
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End About us -->
<script>
	const parentContainer = document.querySelector('.read-more-container');
	parentContainer.addEventListener('click', event => {
		const current = event.target;
		const isReadMoreBtn = current.className.includes('read-more');
		if (!isReadMoreBtn) return;
		const currentText = event.target.parentNode.querySelector('.read-m-text');
		currentText.classList.toggle('read-more-text--show');
		current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";

	})
</script>
@endsection