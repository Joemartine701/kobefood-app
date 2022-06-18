@extends('admin.home')
@section('body')



<div class="panel panel-headline">
  <div class="panel-heading">
  <center><h3 class="panel-title" >Gallery View</h3></center>  
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
    <table class="table table-bordered table-hover table-striped tablesorter" id="emp" style="text-align: center;">
      <thead>
        <tr>
          <th>ID<i class="fa fa-sort"></i></th>
          <th>GALLERY Name<i class="fa fa-sort"></i></th>
          <th>GALLERY IMAGE<i class="fa fa-sort"></i></th>
          <th>ACTION <i class="fa fa-sort"></i></th>
        </tr>
      </thead>
      <tbody>
        @foreach($viewgallery as $key => $stud)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$stud->name}}</td>
          <td><img src="{{ asset('uploads/products/' . $stud->image) }}" alt="" width="80px" height="50px"></td>
          <td>
            <a href="#" class="btn btn-primary deletebtn" data-toggle="modal" data-target="#producteditmodal{{$stud->id}}">EDIT</a>
            <a href="#" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#productdeletemodal{{$stud->id}}">DELETE</a>
          </td>
        </tr>

        <!-- Edit gallery -->

        <div class="modal fade" id="producteditmodal{{$stud->id}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editmodal">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{URL::to('/galleryUpdate',$stud->id) }}" enctype="multipart/form-data" id="edit">
                @csrf

                <div class="form-group " style="padding-left: 10px;padding-top: 5px;padding-right: 10px;">
                  <label for="name" class="col-form-label text-md-right">{{ __('Gallery Name') }}</label>

                  <div>
                    <input id="name" type="text" value="{{$stud->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group" style="padding-left: 10px;padding-right: 10px;">
                  <label for="image" class="col-form-label text-md-right">{{ __('Picture Upload') }}</label>

                  <div>
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required autocomplete="image">
                    <input type="hidden" value="{{$stud->image}} " name="old_image">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div>
                 <center><img src="{{ asset('uploads/products/' . $stud->image) }}" alt="" width="80px" height="50px"></center> 
                </div>
        <center>
                <div class="form-group row mb-0">
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
        <!-- DELETE -->
        <div class="modal fade" id="productdeletemodal{{$stud->id}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editmodal">Delete Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div>
                <h1 class="modal-title">Are you serious, You need to move this product????</h1>
              </div>
              <div style="padding-bottom: 10px;padding-right: 10px;padding-left: 10px;">
                <a href="{{route('deleteGallery',$stud->id)}}" type="button" class="btn btn-danger">OK</a>
                <a href="/viewgallery" type="button" class="btn btn-success" style="float: right;">Cancel</a>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF DELETE -->
        @endforeach

      </tbody>
    </table>
  </div>
  <div style="padding-left:45%">
    {{ $viewgallery -> links() }}
  </div>
</div>
@endSection