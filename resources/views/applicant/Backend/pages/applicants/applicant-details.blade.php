@extends('applicant.Backend.layout.master')

@section('content')

 <div class="col">
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Applicant Details</h3>
        </div>
        @php
           $user= auth()->user();
        @endphp
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <img src="{{ url('public/Images/'.$user->img) }}" alt="" srcset="" width="200" height="200">
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>{{$user->unit}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$user->phone}}</td>
                            </tr>

                            <tr>
                                <th>SSC Board</th>
                                <td>{{$user->ssc_board}}</td>
                            </tr>
                            <tr>
                                <th>SSC Passing Year</th>
                                <td>{{$user->ssc_year}}</td>
                            </tr>
                            <tr>
                                <th>SSC Group</th>
                                <td>{{$user->ssc_group}}</td>
                            </tr>
                            <tr>
                                <th>SSC Roll</th>
                                <td>{{$user->ssc_roll}}</td>
                            </tr>
                            <tr>
                                <th>SSC Registration Number</th>
                                <td>{{$user->ssc_reg}}</td>
                            </tr>
                            <tr>
                                <th>SSC GPA</th>
                                <td><span class="badge badge-success">{{$user->ssc_gpa}}</span></td>
                            </tr>
                            <tr>
                                <th>Hsc Board</th>
                                <td>{{$user->hsc_board}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Passing Year</th>
                                <td>{{$user->hsc_year}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Group</th>
                                <td>{{$user->hsc_group}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Roll</th>
                                <td>{{$user->hsc_roll}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Registration Number</th>
                                <td>{{$user->hsc_reg}}</td>
                            </tr>
                            <tr>
                                <th>HSC GPA</th>
                                <td><span class="badge badge-success">{{$user->hsc_gpa}}</span></td>
                            </tr>

                            <tr>
                                <th>PAYMENT STATUS</th>
                                <td><span class="badge badge-{{$user->status==0? "warning":"success"}}">
                                    @if ($user->status==0)
                                       UNPAID
                                    @else
                                        PAID
                                    @endif


                                </span></td>
                            </tr>

                        </thead>

                    </table>

                </div>
            </div>


        </div>


    </div>
 </div>
@endsection
