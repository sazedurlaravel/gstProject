@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData!="")
        <h3 class="card-title">Edit User</h3>
        @else
        <h3 class="card-title">Add User</h3>
        @endif

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('user.update',$editData->id):route('user.store')}} method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">User Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter user Name" value="{{$editData? $editData->name:""}}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">User Email</label>
            <input type="email" class="form-control" id="name" name="email" placeholder="Enter user Email" value="{{$editData? $editData->email:""}}">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">User Password</label>
            <input type="password" class="form-control" id="name" name="password" placeholder="Enter user Password" >

          </div>
        @if ($errors->any())
            <div class="alert text-red">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
    </form>
  </div>
 </div>
@endsection
