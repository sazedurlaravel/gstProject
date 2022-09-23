@extends('Backend.layout.master')

@section('content')

 <div class="col">
    <div class="card">
        <div class="card-header bg-primary">
            <h3>Applicant Details</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <img src="{{ url('public/Images/'.$showData->img) }}" alt="" srcset="" width="200" height="200">
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
                                <td>{{$showData->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$showData->email}}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>{{$showData->unit}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$showData->phone}}</td>
                            </tr>

                            <tr>
                                <th>SSC Board</th>
                                <td>{{$showData->ssc_board}}</td>
                            </tr>
                            <tr>
                                <th>SSC Passing Year</th>
                                <td>{{$showData->ssc_year}}</td>
                            </tr>
                            <tr>
                                <th>SSC Group</th>
                                <td>{{$showData->ssc_group}}</td>
                            </tr>
                            <tr>
                                <th>SSC Roll</th>
                                <td>{{$showData->ssc_roll}}</td>
                            </tr>
                            <tr>
                                <th>SSC Registration Number</th>
                                <td>{{$showData->ssc_reg}}</td>
                            </tr>
                            <tr>
                                <th>SSC GPA</th>
                                <td><span class="badge badge-success">{{$showData->ssc_gpa}}</span></td>
                            </tr>
                            <tr>
                                <th>Hsc Board</th>
                                <td>{{$showData->hsc_board}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Passing Year</th>
                                <td>{{$showData->hsc_year}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Group</th>
                                <td>{{$showData->hsc_group}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Roll</th>
                                <td>{{$showData->hsc_roll}}</td>
                            </tr>
                            <tr>
                                <th>Hsc Registration Number</th>
                                <td>{{$showData->hsc_reg}}</td>
                            </tr>
                            <tr>
                                <th>HSC GPA</th>
                                <td><span class="badge badge-success">{{$showData->hsc_gpa}}</span></td>
                            </tr>

                            <tr>
                                <th>PAYMENT STATUS</th>
                                <td><span class="badge badge-{{$showData->status==0? "warning":"success"}}">
                                    @if ($showData->status==0)
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
