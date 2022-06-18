@extends('admin.home')

@section('body')

<div class="row p-5" >
    <div class="col-md-12">
        <div class="panel panel-headline">
            <div class="panel-heading">
            <center> <h3 class="panel-title" >UPLOAD GALLERY</h3><center> 
                <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                </div>
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
                <form method="POST" action="/uploadgallery" enctype="multipart/form-data">
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
                    <div class="form-group row mb-0 p-5" >
                        <div class="col-md-6 offset-md-4">
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


@endsection