@extends('frontend.layout.master')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center text-info">All Notices</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-primary">Title</th>
                            <th class="text-primary">Action</th>
                        </tr>
                        @foreach ($allData as $data)
                        <tr>
                            <th>{{$data->title}}</th>
                            <th><a class="btn btn-success btn-sm" href="#">Download</a></th>
                        </tr>
                        @endforeach


                    </thead>

                </table>
        </div>
    </div>


@endsection
