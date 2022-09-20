@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
    @include('Backend.layout.partials.message')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Years</h3>
          <h3 class="card-title float-right"><a class="btn btn-success " href={{route('year.add')}}><i class="fa fa-plus-circle"></i> New year</a></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Year Name</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($allData as $data)
            <tr>
                <td>{{$data->index+1}}</td>
                <td>{{$data->year_name}}</td>
                <td>
                    <a class="btn btn-sm btn-success"  href={{route('year.edit',$data->id)}}><i class="fa fa-edit"></i></a>

                    <a class="btn btn-sm btn-danger"  href={{route('year.delete',$data->id)}}><i class="fa fa-trash"></i></a>

                </td>

              </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Year Name</th>
                <th>Action</th>

            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
 </div>
@endsection
