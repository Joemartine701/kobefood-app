@extends('admin.home')

@section('body')

@if(Session::has('flash_message_success'))
<div class="alert alert-sm alert-danger alert-block" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<strong>{!! session('flash_message_success')!!}</strong>
</div>
@endif

<div class="row p-5">
						<div class="col-md-12" >
							<div class="panel panel-headline">
								<div class="panel-heading">
                                <center> <h3 class="panel-title">UPLOAD PRODUCTS</h3></center> 
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									</div>
								</div>
								<div class="panel-body">
                                <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Product Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        


                        <div class="form-group row">
                            <label for="product_code" class="col-md-4 col-form-label text-md-right">{{ __('Product Code') }}</label>

                            <div class="col-md-6">
                                <input id="product_code" type="text" class="form-control @error('product_code') is-invalid @enderror" name="product_code" value="{{ old('product_code') }}" required autocomplete="product_code" autofocus>

                                @error('product_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
 

                        <div class="form-group row">
                            <label for="product_color" class="col-md-4 col-form-label text-md-right">{{ __('Product Color') }}</label>

                            <div class="col-md-6">
                                <input id="product_color" type="text" class="form-control @error('product_color') is-invalid @enderror" name="product_color" value="{{ old('product_color') }}" required autocomplete="product_color" autofocus>

                                @error('product_color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_description" class="col-md-4 col-form-label text-md-right">{{ __('Product Description') }}</label>

                            <div class="col-md-6">
                                <textarea name="product_description" id="product_description" class="form-control @error('product_description') is-invalid @enderror" value="{{ old('product_description') }}"></textarea>
                                @error('product_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_price" class="col-md-4 col-form-label text-md-right">{{ __('Product Price') }}</label>

                            <div class="col-md-6">
                                <input id="product_price" type="text" class="form-control" name="product_price" required autocomplete="product_price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Picture Upload') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">
                                <input type="hidden" name="old_image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <center>
                        <div class="form-group row mb-0 text-end" >
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#62c2e4 ;">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                      </center> 
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>















<!-- <div class="container" style="padding-bottom: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="padding-left: 40%;background-color: #62c2e4;color: white;">{{ __('Upload Products') }}</div>

                <div class="card-body">
                   
                </div>
            </div>
        </div>
    </div>
</div> -->


@endsection