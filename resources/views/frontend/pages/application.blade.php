@extends('frontend.layout.master')
@section('content')
<br>
<br>
<br>
<br>
 <!-- ======= Appointment Section ======= -->
 <section id="kappointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Apply Now</h2>

      </div>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
          </div>
     @endif
          @include('Backend.layout.partials.message')
      <form action={{route('application.store')}} method="post"  class="php-email-form" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control"  placeholder="Your Name" >
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email"  placeholder="Your Email" >
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone"  placeholder="Your Phone" >
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="text" name="fname" class="form-control datepicker"  placeholder="Enter Your Father's Name" >
          </div>
          <div class="col-md-4 form-group mt-3">
            <input type="text" name="mname" class="form-control datepicker"  placeholder="Enter Your Mother's Name" >
          </div>

          <div class="col-md-4 form-group mt-3">
            <select name="ssc_board" class="form-select">
              <option value="">Select SSC Board</option>
              @foreach ($Boards as $board)
              <option value="{{$board->board_name}}">{{$board->board_name}}</option>
              @endforeach

            </select>
          </div>


        </div>
        <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="ssc_roll" class="form-control datepicker"  placeholder="SSC Roll" >
            </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="ssc_reg" class="form-control datepicker"  placeholder="SSC Registration Number" >
              </div>

            <div class="col-md-4 form-group mt-3">
                <select name="ssc_year"  class="form-select">
                    <option value="">Select SSC passing Year</option>
                    @foreach ($years as $year)
                    <option value="{{$year->year_name}}">{{$year->year_name}}</option>
                    @endforeach

                  </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group mt-3">
                <select name="ssc_group"  class="form-select">
                  <option value="">Select SSC Group</option>
                  @foreach ($groups as $group)
                  <option value="{{$group->group_name}}">{{$group->group_name}}</option>
                  @endforeach
                </select>
              </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="ssc_gpa" class="form-control datepicker" placeholder="Enter Your GPA" >
            </div>

            <div class="col-md-4 form-group mt-3">
              <select name="hsc_board"  class="form-select">
                <option value="">Select HSC Board</option>
                @foreach ($Boards as $board)
                <option value="{{$board->board_name}}">{{$board->board_name}}</option>
                @endforeach
              </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 form-group mt-3">
                <input type="text" name="hsc_roll" class="form-control datepicker"  placeholder="Enter Your HSC Roll" >
            </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="hsc_reg" class="form-control datepicker"  placeholder="Enter Your HSC Registration Number" >
            </div>

            <div class="col-md-4 form-group mt-3">
                <select name="hsc_year"  class="form-select">
                  <option value="">Select HSC Passing Year</option>
                    @foreach ($years as $year)
                        <option value="{{$year->year_name}}">{{$year->year_name}}</option>
                    @endforeach

                </select>
              </div>

        </div>

        <div class="row">
            <div class="col-md-4 form-group mt-3">
                <select name="hsc_group"  class="form-select">
                  <option value="">Select HSC Group</option>
                  @foreach ($groups as $group)
                  <option value="{{$group->group_name}}">{{$group->group_name}}</option>
                  @endforeach
                </select>
              </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="hsc_gpa" class="form-control datepicker"  placeholder="Enter Your HSC GPA" >
            </div>
            <div class="col-md-4 form-group mt-3">
                <select name="unit_name"  class="form-select">
                  <option value="">Select Unit</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
              </div>


        </div>

        <div class="row">
            <div class="col-md-6 form-group mt-3">
                <select name="center"  class="form-select">
                  <option value="">Select Center</option>
                  @foreach ($universities as $university)
                  <option value="{{$university->name}}">{{$university->name}}</option>
                  @endforeach


                </select>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="file" name="img" class="form-control"  placeholder="Upload Your Photo" >
            </div>

        </div>


        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Submit</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->

@endsection
