@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData!="")
        <h3 class="card-title">Edit Unit</h3>
        @else
        <h3 class="card-title">Add Unit</h3>
        @endif

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('unit.update',$editData->id):route('unit.store')}} method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Add unit Name</label>
          <input type="text" class="form-control" id="unit_name" name="unit_name" placeholder="Enter Unit Name" value="{{$editData? $editData->unit_name:""}}">

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
