@extends('welcome')
<style>
	.small-img-group {
		display: flex;
		justify-content: space-between;
	}

	.small-img-col {
		flex-basis: 24%;
		cursor: pointer;
	}

	.product {
		cursor: pointer;
		margin-bottom: 2rem;
	}

	.product img {
		transition: 0.3s all;
	}

	.product:hover img {
		opacity: 0.7;
	}

	.product .buy-btn {
		background: #fb774b;
		transform: translateY(20px);
		opacity: 0;
		transition: 0.3s all;
	}

	.product:hover .buy-btn {
		transform: translateY(0);
		opacity: 1;

	}

	hr {
		width: 30px;
		height: 2px;
		background-color: #fb774b;
	}

	.star i {
		font-size: 0.8rem;
		color: goldenrod;
	}
</style>
@section('body')


<section class=" container product my-5 pt-5">

	<div class="row mt-5">
		<div class="col-lg-5 col-md-12 col-12 ">
			<img class="img-fluid w-100 pb-1" src="images/f1.png" id="MainImg" alt="">
			<div class="small-img-group">
				<div class="small-img-col">
					<img src="images/databas.png" width="100%" height="100%" class="small-img" alt="">
				</div>
				<div class="small-img-col">
					<img src="images/slider-0.jpg" width="100%" height="100%" class="small-img" alt="">
				</div>
				<div class="small-img-col">
					<img src="images/databas.png" width="100%" height="100%" class="small-img" alt="">
				</div>
				<div class="small-img-col">
					<img src="images/slider-0.jpg" width="100%" height="100%" class="small-img" alt="">
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12 col-12">
			<h6>KOBE Food Products</h6>
			<h3>Mchele na Bidhaa zingine</h3>
			<h2 id="pric">$500</h2>
			<h4 class="mt-2 mb-2">Product Details</h4>
			<span id="description">Mchele bora utokao Tanzania , wenye kupendeza na wafaa kwa Afya</span>
		</div>
	</div>
</section>

<section id="featured" class="my-5 pb-5">

	<div class="container text-center col-log-3 col-md-4 col-12">
		<h3>Our Products</h3>
		<hr class="mx-auto">
		<p>Bidhaa zilizopo sokoni kwa sasa</p>
	</div>

	<div class="row mx-auto container-fluid">
	@foreach($product as $result)
		<div class="product text-center col-lg-3 col-md-4 col-12">
			<img class="img-fluid mb-3 prod" src="{{ asset('uploads/products/' . $result->image) }}" alt="">
			<div class="star">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</div>
			<h5 class="p-name">{{$result->name}} </h5>
			<a href="" class="btn btn-primary buy-btn" data-toggle="modal" data-target="#producteditmodal{{$result->id}}">DETAILS</a>
		</div>

<div class="modal fade" id="producteditmodal{{$result->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

	  <section class=" container product">

	<div class="row mt-5">
		<div class="col-lg-5 col-md-12 col-12 ">
			<img class="img-fluid w-100 pb-1" src="{{ asset('uploads/products/' . $result->image) }}" id="MainImg" alt="">
		</div>
		<div class="col-lg-6 col-md-12 col-12">
			<h6>KOBE Food Products</h6>
			<div class="row">
			<span>Name : </span>
			<h6 id="pric" style="padding-left: 10px;"> {{$result->name}}</h6>
			</div>
			<div class="row">
			<span>Color  : </span>
			<h6 id="pric" style="padding-left: 10px;"> {{$result->color}}</h6>
			</div>
            <div class="row">
			<span>Price  : </span>
			<h6 id="pric" style="padding-left: 10px;">Tshs. {{$result->price}}</h6>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-12">
	        <h4 class="mt-2 mb-2">Product Details</h4>
			<span id="description">{{$result->description}} </span>
			</div>
</section>
    </div>
  </div>
</div>
		@endforeach
		
	</div>
	<div style="padding-left: 45%;">
	{{ $product->links() }}
	</div>	
</section>


<script>
	var MainImg = document.getElementById('MainImg');
	var smalling = document.getElementsByClassName('small-img');
	smalling[0].onclick = function() {
		MainImg.src = smalling[0].src;

	}
	smalling[1].onclick = function() {
		MainImg.src = smalling[1].src;

	}
	smalling[2].onclick = function() {
		MainImg.src = smalling[2].src;

	}
	smalling[3].onclick = function() {
		MainImg.src = smalling[3].src;

	}
	smalling[4].onclick = function() {
		MainImg.src = smalling[4].src;

	}
	var x="";
	var prod = document.getElementsByClassName('prod')
	var descr = document.getElementsByClassName('read-more-text');
	var price = document.getElementsByClassName('p-price');
    
function after(){
	console.log(x);
	     document.getElementById('MainImg')
        .src=prod[1].src;
        document.getElementById('description')
        .innerHTML=descr[1];
		// document.getElementById('pric')
        // .innerHTML = span.;
}
</script>
@endsection