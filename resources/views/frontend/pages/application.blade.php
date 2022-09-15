@extends('frontend.layout.master')
@section('content')
<br>
<br>
<br>
<br>
 <!-- ======= Appointment Section ======= -->
 <section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Apply Now</h2>

      </div>

      <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="text" name="fname" class="form-control datepicker" id="fname" placeholder="Enter Your Father's Name" required>
          </div>
          <div class="col-md-4 form-group mt-3">
            <input type="text" name="mname" class="form-control datepicker" id="mname" placeholder="Enter Your Mother's Name" required>
          </div>

          <div class="col-md-4 form-group mt-3">
            <select name="ssc_board" id="ssc_board" class="form-select">
              <option value="">Select SSC Board</option>
              @foreach ($Boards as $board)
              <option value="{{$board->board_name}}">{{$board->board_name}}</option>
              @endforeach

            </select>
          </div>


        </div>
        <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="ssc_roll" class="form-control datepicker" id="ssc_roll" placeholder="SSC Roll" required>
            </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="ssc_reg" class="form-control datepicker" id="ssc_reg" placeholder="SSC Registration Number" required>
              </div>

            <div class="col-md-4 form-group mt-3">
                <select name="ssc_year" id="ssc_year" class="form-select">
                    <option value="">Select SSC passing Year</option>
                    @foreach ($years as $year)
                    <option value="{{$year->year_name}}">{{$year->year_name}}</option>
                    @endforeach

                  </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group mt-3">
                <select name="ssc_year" id="ssc_year" class="form-select">
                  <option value="">Select SSC Group</option>
                  @foreach ($groups as $group)
                  <option value="{{$group->group_name}}">{{$group->group_name}}</option>
                  @endforeach
                </select>
              </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="ssc_gpa" class="form-control datepicker" id="ssc_gpa" placeholder="Enter Your GPA" required>
            </div>

            <div class="col-md-4 form-group mt-3">
              <select name="ssc_year" id="ssc_year" class="form-select">
                <option value="">Select HSC Board</option>
                @foreach ($Boards as $board)
                <option value="{{$board->board_name}}">{{$board->board_name}}</option>
                @endforeach
              </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 form-group mt-3">
                <input type="text" name="hsc_roll" class="form-control datepicker" id="hsc_roll" placeholder="Enter Your HSC Roll" required>
            </div>

            <div class="col-md-4 form-group mt-3">
                <input type="text" name="hsc_reg" class="form-control datepicker" id="hsc_reg" placeholder="Enter Your HSC Registration Number" required>
            </div>

            <div class="col-md-4 form-group mt-3">
                <select name="hsc_year" id="hsc_year" class="form-select">
                  <option value="">Select HSC Passing Year</option>
                    @foreach ($years as $year)
                        <option value="{{$year->year_name}}">{{$year->year_name}}</option>
                    @endforeach

                </select>
              </div>

        </div>

        <div class="row">
            <div class="col-md-3 form-group mt-3">
                <select name="ssc_year" id="ssc_year" class="form-select">
                  <option value="">Select HSC Group</option>
                  @foreach ($groups as $group)
                  <option value="{{$group->group_name}}">{{$group->group_name}}</option>
                  @endforeach
                </select>
              </div>

            <div class="col-md-3 form-group mt-3">
                <input type="text" name="hsc_gpa" class="form-control datepicker" id="hsc_gpa" placeholder="Enter Your HSC GPA" required>
            </div>
            <div class="col-md-3 form-group mt-3">
                <select name="ssc_year" id="ssc_year" class="form-select">
                  <option value="">Select Unit</option>

                </select>
              </div>
            <div class="col-md-3 form-group mt-3">
                <input type="file" name="img" class="form-control datepicker" id="img" placeholder="Upload Your Photo" required>
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
