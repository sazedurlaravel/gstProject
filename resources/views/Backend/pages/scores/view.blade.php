@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
    @include('Backend.layout.partials.message')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Scores</h3>
          <h3 class="card-title float-right"><a class="btn btn-success " href={{route('score.add')}}><i class="fa fa-plus-circle"></i> New Scores</a></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Student ID</th>
              <th>Unit</th>
              <th>Total Score</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($allData as $data)
            <tr>
                <td>{{$data->user_id}}</td>
                <td>{{$data->unit_name}}</td>
                <td>{{$data->total_score}}</td>
                <td>
                    <a class="btn btn-sm btn-success"  href={{route('score.edit',$data->id)}}><i class="fa fa-edit"></i></a>

                    <a class="btn btn-sm btn-danger"  href={{route('score.delete',$data->id)}}><i class="fa fa-trash"></i></a>

                </td>

              </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>Student ID</th>
              <th>Subject</th>
              <th>Score</th>
              <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
 </div>
@endsection
