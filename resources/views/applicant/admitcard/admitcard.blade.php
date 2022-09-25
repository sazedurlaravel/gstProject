<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>admit Card</title>
    <style>
        .txt-center {
            text-align: center;
        }
        .border- {
            border: 1px solid #000 !important;
        }
        .padding {
            padding: 15px;
        }
        .mar-bot {
            margin-bottom: 15px;
        }
        .admit-card {
            border: 2px solid #000;
            padding: 15px;
            margin: 20px 0;
        }
        .BoxA h5, .BoxA p {
            margin: 0;
        }
        h5 {
            text-transform: uppercase;
        }
        table img {
            width: 100%;
            margin: 0 auto;
        }
        .table-bordered td, .table-bordered th, .table thead th {
            border: 1px solid #000000 !important;
        }
    </style>

  </head>
  <body>
 @php
    $user= auth()->user();
 @endphp
<section>
	<div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><button onclick="printDiv()" target="_blank" class="btn btn-success mt-2">Download Admit Card</button></div>
            <div class="col-md-4"></div>


        </div>
		<div class="admit-card" id="admit">
			<div class="BoxA border- padding mar-bot">
				<div class="row">
					<div class="col-sm-4">
						<h5>GST Admission Integrated System</h5>
						<p>Dhaka, Bangladesh</p>
					</div>
					<div class="col-sm-4 txt-center">
						<img src="{{asset('logo.jpg')}}" width="100px;" />
					</div>
					<div class="col-sm-4">
						<h5>Admit Card</h5>
						<p>Exam-2022</p>
					</div>
				</div>
			</div>
			<div class="BoxC border- padding mar-bot">
				<div class="row">
					<div class="col-sm-6">
						<h5>Exam Roll : {{$user->exam_roll}}</h5>
					</div>
				</div>
			</div>
			<div class="BoxD border- padding mar-bot">
				<div class="row">
					<div class="col-sm-10">
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <td><b>Exam Roll : {{$user->exam_roll}}</b></td>
							  <td><b>Student ID:</b>{{$user->id}}</td>
							</tr>
							<tr>
							  <td><b>Student Name: </b>{{$user->name}}</td>
							  <td><b>Unit: </b>{{$user->unit_name}}</td>
							</tr>
							<tr>
							  <td><b>Father's Name: </b>{{$user->fname}}</td>
							  <td><b>Exam Date & Time: </b>{{$user->date_time}}</td>
							</tr>
							<tr>
							  <td colspan="2" style="    height: 125px;"><b>Exam Center: </b>{{$user->center}}</td>
							</tr>
						  </tbody>
						</table>
					</div>
					<div class="col-sm-2 txt-center">
						<table class="table table-bordered">
						  <tbody>
							<tr>
							  <th scope="row txt-center"><img src="{{ url('public/Images/'.$user->img) }}" width="123px" height="165px" /></th>
							</tr>
							<tr>
							  <th scope="row txt-center"><img src="{{asset('signature.png')}}" /></th>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>



		</div>

	</div>

</section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
  </body>
</html>
