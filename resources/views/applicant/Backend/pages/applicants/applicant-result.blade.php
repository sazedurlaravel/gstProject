@extends('applicant.Backend.layout.master')

@section('content')

 <div class="col">
    <div class="card">
        <div class="card-header bg-primary">
            <h3>View Result</h3>
        </div>
        <div class="card-body">



            <div class="row">
                <div class="col">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <td>{{$showData[0]->user_id}}</td>
                            </tr>
                            <tr>
                                <th>Unit</th>
                                <td>{{$showData[0]->unit_name}}</td>
                            </tr>
                            <tr>
                                <th><span class="badge badge-primary" style="font-size: 15px">SUBJECT NAME</span></th>
                                <th><span class="badge badge-success" style="font-size: 15px">OBTAINED SCORE</span></th>

                            </tr>

                            <tr>
                                <th>{{$showData[0]->subject_one}}</th>
                                <td>{{$showData[0]->subject_one_score}}</td>

                            </tr>
                            <tr>
                                <th>{{$showData[0]->subject_two}}</th>
                                <td>{{$showData[0]->subject_two_score}}</td>

                            </tr>
                            <tr>
                                <th>{{$showData[0]->subject_three}}</th>
                                <td>{{$showData[0]->subject_three_score}}</td>

                            </tr>
                            <tr>
                                <th>{{$showData[0]->subject_four}}</th>
                                <td>{{$showData[0]->subject_four_score}}</td>

                            </tr>
                            <tr>
                                <th><span class="badge badge-info" >Total Score</span></th>
                                <th><span class="badge badge-primary" >{{$showData[0]->total_score}}</span></th>

                            </tr>
                            <tr>
                                <th><span class="badge badge-info" >STATUS</span></th>
                                <th>
                                @if ($showData[0]->total_score>30)
                                <span class="badge badge-primary" >
                                 ELEGIBLE
                                </span>
                                @else
                                <span class="badge badge-danger" >
                                    NOT ELEGIBLE
                                   </span>
                                @endif
                               </th>

                            </tr>

                        </thead>

                    </table>


                </div>
            </div>


        </div>


    </div>
 </div>
@endsection
