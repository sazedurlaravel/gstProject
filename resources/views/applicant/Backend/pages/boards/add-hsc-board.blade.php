@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData=="")
        <h3 class="card-title">Add Board</h3>
        @else
        <h3 class="card-title">Edit Board</h3>
       @endif


    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('board.update',$editData->id):route('board.store')}} method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Add Hsc Board Name</label>
          <input type="text" class="form-control" id="board_name" name="board_name" placeholder="Enter Hsc Board Name" value="{{$editData? $editData->board_name:""}}">

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
