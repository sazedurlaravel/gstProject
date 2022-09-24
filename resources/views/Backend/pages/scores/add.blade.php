@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
     <!-- general form elements -->
  <div class="card card-primary">
    <div class="card-header">
        @if ($editData!="")
        <h3 class="card-title">Edit Score</h3>
        @else
        <h3 class="card-title">Add Score</h3>
        @endif

    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action={{$editData? route('score.update',$editData->id):route('score.store')}} method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Student ID</label>
          <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter User ID" value="{{$editData? $editData->user_id:""}}">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Select Unit</label>
           <select name="unit_name" id="" class="form-control">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
           </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject One</label>
           <input type="text" class="form-control" name="subject_one">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject One Score</label>
           <input type="text" class="form-control" name="subject_one_score">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Subject Two</label>
           <input type="text" class="form-control" name="subject_two">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject Two Score</label>
           <input type="text" class="form-control" name="subject_two_score">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject Three</label>
           <input type="text" class="form-control" name="subject_three">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject Three Score</label>
           <input type="text" class="form-control" name="subject_three_score">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject Four</label>
           <input type="text" class="form-control" name="subject_four">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Subject Four Score</label>
           <input type="text" class="form-control" name="subject_four_score">
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
