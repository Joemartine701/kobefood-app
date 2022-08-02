@extends('admin.home')
@section('body')
<div class="panel panel-headline">
    <div class="panel-heading">
        <center>
            <h3 class="panel-title">Change Password with Current Password Validation</h3>
            <div class="right">
                <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
            </div>
        </center>
    </div>
    @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
    <div class="panel-body">

        <form method="POST" action="{{ route('store-password') }}">

            @csrf



            @foreach ($errors->all() as $error)

            <p class="text-danger">{{ $error }}</p>

            @endforeach



            <div class="form-group row">

                <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>



                <div class="col-md-6">

                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">

                </div>

            </div>



            <div class="form-group row">

                <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>



                <div class="col-md-6">

                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                </div>

            </div>



            <div class="form-group row">

                <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>



                <div class="col-md-6">

                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">

                </div>

            </div>


            <center>
                <div class="form-group row mb-0">

                    <div class="col-md-12 offset-md-4">

                        <button type="submit" class="btn btn-primary">

                            Update Password

                        </button>

                    </div>

                </div>
            </center>

        </form>

    </div>

</div>

@endSection