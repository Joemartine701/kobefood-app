@extends('admin.home')
@section('body')

<div class="panel panel-headline">
  <div class="panel-heading">
    <center>
      <h3 class="panel-title">Products View</h3>
    </center>
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
  <div class="panel-body table-responsive">


    <table class="table table-bordered table-hover table-striped tablesorter " id="emp" style="text-align: center;">
      <thead>
        <tr>
          <th>ID<i class="fa fa-sort"></i></th>
          <th>PRODUCT IMAGE<i class="fa fa-sort"></i></th>
          <th>PROD NAME<i class="fa fa-sort"></i></th>
          <th>PROD CODE<i class="fa fa-sort"></i></th>
          <th>PROD COLOR<i class="fa fa-sort"></i></th>
          <th>PROD DESCRIPTION<i class="fa fa-sort"></i></th>
          <th>PRODUCT PRICE<i class="fa fa-sort"></i></th>
          <th>ACTION <i class="fa fa-sort"></i></th>
        </tr>
      </thead>
      <tbody>
        @foreach($viewproduct as $key => $stud)
        <tr>
          <td>{{++$key}}</td>
          <td><img src="{{ asset('uploads/products/' . $stud->image) }}" alt="" width="80px" height="50px"></td>
          <td>{{$stud->name}}</td>
          <td>{{$stud->code}}</td>
          <td>{{$stud->color}}</td>
          <td><a href="#" class="btn btn-primary deletebtn" data-toggle="modal" data-target="#productviewmodal{{$stud->id}}">View</a></td>
          <td>{{$stud->price}}</td>
          <td>
            <a href="" class="btn btn-primary deletebtn" data-toggle="modal" data-target="#producteditmodal{{$stud->id}}">EDIT</a>
            <a href="" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#productdeletemodal{{$stud->id}}">DELETE</a>
          </td>
        </tr>

        <!-- Edit  -->
        <div class="modal fade" id="producteditmodal{{$stud->id}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="editmodal">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="POST" action="{{URL::to('/productUpdate',$stud->id) }}" enctype="multipart/form-data" id="edit">
                @csrf
                <div style = "padding-left: 2%; padding-right: 2%;">
                <div class="form-group p-5">
                  <label for="name" class="col-form-label text-md-right">{{ __('Product Name') }}</label>

                  <div>
                    <input id="name" type="text" value="{{$stud->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>


                 
                <div class="form-group p-5">
                  <label for="product_code" class="col-form-label text-md-right">{{ __('Product Code') }}</label>

                  <div>
                    <input id="product_code" type="text" value="{{$stud->code}}" class="form-control @error('product_code') is-invalid @enderror" name="product_code" value="{{ old('product_code') }}" required autocomplete="product_code" autofocus>

                    @error('product_code')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>


                <div class="form-group p-5">
                  <label for="product_color" class="col-form-label text-md-right">{{ __('Product Color') }}</label>

                  <div>
                    <input id="product_color" type="text" value="{{$stud->color}}" class="form-control @error('product_color') is-invalid @enderror" name="product_color" value="{{ old('product_color') }}" required autocomplete="product_color" autofocus>

                    @error('product_color')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group p-5">
                  <label for="product_description" class="col-form-label text-md-right">{{ __('Product Description') }}</label>

                  <div>
                    <textarea name="product_description" id="product_description" class="form-control @error('product_description') is-invalid @enderror" value="{{ old('product_description') }}">{{$stud->description}}</textarea>
                    @error('product_description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="form-group p-5">
                  <label for="product_price" class="col-form-label text-md-right">{{ __('Product Price') }}</label>

                  <div>
                    <input id="product_price" type="text" value="{{$stud->price}}" class="form-control" name="product_price" required autocomplete="product_price">
                  </div>
                </div>

                <div class="form-group p-5">
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
                  <img src="{{ asset('uploads/products/' . $stud->image) }}" alt="" width="80px" height="50px">
                </div>
                <center>
                  <div class="form-group row mb-0">
                    <div class="col-md-12 offset-md-4">
                      <button type="submit" class="btn btn-primary" style="background-color:#62c2e4 ;">
                        {{ __('Update') }}
                      </button>
                    </div>
                  </div>
                </center>
                </div>
              </form>

            </div>
          </div>
        </div>
        <!-- view description -->
        <div class="modal fade" id="productviewmodal{{$stud->id}}" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="viewmodal">Message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div style="text-align: center;padding-top: 10px;padding-bottom: 20px;">

                {{$stud->description}}
              </div>

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
                <a href="{{route('deleteProd',$stud->id)}}" type="button" class="btn btn-danger">OK</a>
                <a href="/viewP" type="button" class="btn btn-success" style="float: right;">Cancel</a>
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
    {{ $viewproduct -> links() }}
  </div>

</div>




@endSection