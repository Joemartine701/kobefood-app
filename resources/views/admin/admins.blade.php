@extends('admin.home')
@section('body')

<div class="panel panel-headline">
  <div class="panel-heading">
  <center><h3 class="panel-title" >Products View</h3> </center>
    <div class="right">
      <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
    </div>
  </div>
  @if(Session::has('flash_message_success'))
  <div class="alert alert-sm alert-danger alert-block" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <strong>{!! session('flash_message_success')!!}</strong>
  </div>
  @endif
  <div class="panel-body">


    <table class="table table-bordered table-hover table-striped tablesorter" id="emp" style="text-align: center;">
      <thead>
        <tr>
          <th>ID<i class="fa fa-sort"></i></th>
          <th>NAME<i class="fa fa-sort"></i></th>
          <th>Email<i class="fa fa-sort"></i></th>
          <th>ACTION <i class="fa fa-sort"></i></th>
        </tr>
      </thead>
      <tbody>
        @foreach($viewadmins as $key => $admin)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$admin->name}}</td>
          <td>{{$admin->email}}</td>
          <td>
          <a href="#" class="btn btn-primary deletebtn" data-toggle="modal" data-target="#producteditmodal{{$admin->id}}">EDIT</a>
            <a href="#" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#productdeletemodal{{$admin->id}}">DELETE</a>
          </td>
        </tr>

        
<div class="modal fade" id="producteditmodal{{$admin->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
      
      <form method="POST" action="{{URL::to('/adminUpdate',$admin->id) }}" enctype="multipart/form-data" id="edit">
                        @csrf
                        <div class="form-group " style="padding-left: 10px;padding-right: 10px;">
                            <label for="name" class="col-form-label text-md-right">{{ __('Edit Admin User') }}</label>

                            <div>
                                <input id="name" type="text" value="{{$admin->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group " style="padding-left: 10px;padding-top: 5px;padding-right: 10px;">
                            <label for="email" class="col-form-label text-md-right">{{ __('User Email') }}</label>
      
                            <div>
                                <input id="email" type="text" value="{{$admin->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <center>
                        <div class="form-group row mb-0"  >
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#62c2e4 ;">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        </center>
                    </form>
      </div>
    </div>
  </div>
</div>
<!-- DELETE -->
<div class="modal fade" id="productdeletemodal{{$admin->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Delete Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div>
      <h1 class="modal-title">Are you serious, You need to move this User????</h1>
      </div>
      <div style="padding-bottom: 10px;padding-right: 10px;padding-left: 10px;">
        <a href="{{route('deleteAdmin',$admin->id)}}" type="button" class="btn btn-danger">OK</a>
        <a href="/viewA" type="button" class="btn btn-success" style="float: right;">Cancel</a>
      </div>
    </div>
  </div>
</div>
<!-- END OF DELETE -->
        @endforeach

      </tbody>
    </table>
  </div>
</div>

@endSection