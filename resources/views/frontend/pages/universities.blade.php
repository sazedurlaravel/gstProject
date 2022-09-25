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
                <h2 class="text-center text-info">All Universities</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-primary">University</th>
                            <th class="text-primary">Action</th>
                        </tr>
                        @php
                        $allData = App\Models\University::all();
                    @endphp
                        @foreach($allData as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td><a class="btn btn-success btn-sm" href="{{$data->link}}">Visit</a></td>
                        </tr>
                        @endforeach


                    </thead>

                </table>
        </div>
    </div>


@endsection
