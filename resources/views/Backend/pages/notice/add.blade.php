@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData!="")
        <h3 class="card-title">Edit Note</h3>
        @else
        <h3 class="card-title">Add Note</h3>
        @endif

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('notice.update',$editData->id):route('notice.store')}} method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Notice Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Enter notice Title" value="{{$editData? $editData->notice_name:""}}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload PDF</label>
            <input type="file" class="form-control" id="pdf" name="pdf" placeholder="Upload Notice File">

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
