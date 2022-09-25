<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    @php
        $user=auth()->user();
    @endphp
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{ url('public/Images/'.$user->img) }} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }} </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          @php
                $prefix = Request::route()->getPrefix();
                $route = Route::current()->getName();
          @endphp


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Applicant Menu

              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href={{route('applicant.details')}} class="nav-link {{($route=='applicant.details')?"active":""}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Applicant Details</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href={{route('applicant.admitcard')}} target="_blank" class="nav-link {{($route=='applicant.admitcard')?"active":""}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Download Admit Card</p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href={{route('applicant.result')}} class="nav-link {{($route=='applicant.result')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Check Result</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('applicant.signout')}} class="nav-link {{($route=='applicant.signout')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>LogOut</p>
                </a>
              </li>


            </ul>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
