@extends('welcome')
@section('body')
    
        <div class="row " style="padding-top: 20%;padding-left: 25%; padding-right: 25%;">
            <div class="col-md-12">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                       
                            <h3 class="panel-title">SIGN IN</h3>
                        
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" autofocus>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                           
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('LOGIN') }}
                                        </button>

                                        <!-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif -->
                                    </div>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    
    @endsection