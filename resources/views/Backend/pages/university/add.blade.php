@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData!="")
        <h3 class="card-title">Edit University</h3>
        @else
        <h3 class="card-title">Add University</h3>
        @endif

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('university.update',$editData->id):route('university.store')}} method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">university Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter university Title" value="{{$editData? $editData->university_name:""}}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Upload university Link">

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
