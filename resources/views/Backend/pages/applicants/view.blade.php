@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
    @include('Backend.layout.partials.message')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Applicants</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Image</th>
              <th>Applicant Name</th>
              <th>Unit Name</th>
              <th>Phone Number</th>
              <th>Payment Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($allData as $data)
            <tr>
                <td>{{$data->index+1}}</td>
                <td><img src="{{ url('public/Images/'.$data->img) }}" alt="" srcset="" width="100" height="100"></td>
                <td>{{$data->name}}</td>
                <td>{{$data->unit}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <a class="btn btn-sm btn-success"  href={{route('unit.edit',$data->id)}}><i class="fa fa-eye"></i></a>

                    <a class="btn btn-sm btn-danger"  href={{route('unit.delete',$data->id)}}><i class="fa fa-trash"></i></a>

                </td>

              </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Applicant Name</th>
                <th>Unit Name</th>
                <th>Phone Number</th>
                <th>Payment Status</th>
                <th>Action</th>

            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
 </div>
@endsection
