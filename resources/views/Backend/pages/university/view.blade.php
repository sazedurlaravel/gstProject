@extends('Backend.layout.master')

@section('content')

 <div class="col-md-12">
    @include('Backend.layout.partials.message')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Universities</h3>
          <h3 class="card-title float-right"><a class="btn btn-success " href={{route('university.add')}}><i class="fa fa-plus-circle"></i> New university</a></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>University Name</th>
              <th>Link</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($allData as $data)
            <tr>
                <td>{{$data->index+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->link}}</td>
                <td>
                    <a class="btn btn-sm btn-success"  href={{route('university.edit',$data->id)}}><i class="fa fa-edit"></i></a>

                    <a class="btn btn-sm btn-danger"  href={{route('university.delete',$data->id)}}><i class="fa fa-trash"></i></a>

                </td>

              </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
            <th>ID</th>
            <th>University Name</th>
            <th>Link</th>
            <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
 </div>
@endsection
