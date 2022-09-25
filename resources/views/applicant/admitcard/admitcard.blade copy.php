@extends('applicant.Backend.layout.master')

@section('content')

 <div class="col" >
    <div class="card">
        <div class="card-header bg-primary text-center">
            <h3>GST Admission Admit Card</h3>
        </div>
        @php
           $user= auth()->user();
        @endphp
        <div class="card-body" id="admit">
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
                                <th>Unit Name</th>
                                <td>{{$user->unit_name}}</td>
                            </tr>
                            <tr>
                                <th>Applicant's Name</th>
                                <td>{{$user->name}}</td>
                            </tr>

                            <tr>
                                <th>Father's Name</th>
                                <td>{{$user->fname}}</td>
                            </tr>
                            <tr>
                                <th>Exam Center</th>
                                <td>{{$user->center}}</td>
                            </tr>

                            <tr>
                                <th>Exam Date & Time</th>
                                <td>{{$user->date_time}}</td>
                            </tr>


                        </thead>

                    </table>

                </div>
            </div>




        </div>

        <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                   <button onclick="printDiv()" class="btn btn-sm btn-success">Download Admit Card</button>
                </div>
                <div class="col-md-4"></div>
            </div>


    </div>
 </div>
@endsection

@section('script')
 <script>
    function printDiv() {
            var divContents = document.getElementById("admit").innerHTML;
            var a = window.open();
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
 </script>

@endsection
