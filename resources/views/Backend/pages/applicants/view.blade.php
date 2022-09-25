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
                <td>{{$data->id}}</td>
                <td><img src="{{ url('public/Images/'.$data->img) }}" alt="" srcset="" width="100" height="100"></td>
                <td>{{$data->name}}</td>
                <td>{{$data->unit_id}}</td>
                <td>{{$data->phone}}</td>
                <td>
                    @if ($data->status==0)
                    <span class="badge badge-danger">Unpaid</span>
                @else
                <span class="badge badge-success">Paid</span>
                @endif
                </td>
                <td>
                    <a class="btn btn-sm btn-success"  href={{route('application.show',$data->id)}}><i class="fa fa-eye"></i></a>

                    <a class="btn btn-sm btn-danger"  href={{route('application.delete',$data->id)}}><i class="fa fa-trash"></i></a>

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
