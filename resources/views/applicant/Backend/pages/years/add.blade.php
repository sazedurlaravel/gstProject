@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData!="")
        <h3 class="card-title">Edit Year</h3>
        @else
        <h3 class="card-title">Add Year</h3>
        @endif

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('year.update',$editData->id):route('year.store')}} method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Add Year Name</label>
          <input type="text" class="form-control" id="year_name" name="year_name" placeholder="Enter year Name" value="{{$editData? $editData->year_name:""}}">

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
