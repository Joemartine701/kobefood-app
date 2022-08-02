@extends('admin.home')
@section('body')
<div class="modal fade" id="producteditmodal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editmodal">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
<!-- DELETE -->
<div class="modal fade" id="productdeletemodal" tabindex="-1" role="dialog" aria-hidden="true">
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
      <div class="p-5">
        <a href="#" type="button" class="btn btn-danger">OK</a>
        <a href="/contactUsView" type="button" class="btn btn-success" style="float: right;">Cancel</a>
      </div>
    </div>
  </div>
</div>
<!-- END OF DELETE -->
<div class="panel panel-headline flex">
  <div class="panel-heading">
    <center><h3 class="panel-title">Contact List</h3></center>
  </div>
  <div class="panel-body table-responsive">

    <table class="table table-bordered table-hover table-striped tablesorter" id="emp" style="text-align: center;">
      <thead>
        <tr>
          <th>ID<i class="fa fa-sort"></i></th>
          <th>First Name<i class="fa fa-sort"></i></th>
          <th>Last Name<i class="fa fa-sort"></i></th>
          <th>Email<i class="fa fa-sort"></i></th>
          <th>Phone Number<i class="fa fa-sort"></i></th>
          <th>Message<i class="fa fa-sort"></i></th>
          <th>ACTION <i class="fa fa-sort"></i></th>
        </tr>
      </thead>
      <tbody>
        @foreach($contact as $key => $stud)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$stud->FName}}</td>
          <td>{{$stud->LName}}</td>
          <td>{{$stud->Email}}</td>
          <td>{{$stud->Phone}}</td>
          <td><a href="{{route('messageView',$stud->id)}}" class="btn btn-primary deletebtn" data-toggle="modal" data-target="#producteditmodal">View</a></td>
          <td>
            <a href="{{route('messageDel',$stud->id)}}" class="btn btn-danger deletebtn" data-toggle="modal" data-target="#productdeletemodal">DELETE</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>

  </div>
</div>

@endSection