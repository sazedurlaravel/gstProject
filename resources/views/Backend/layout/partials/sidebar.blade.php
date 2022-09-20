<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src={{asset("backend/dist/img/AdminLTELogo.png")}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset("backend/dist/img/user2-160x160.jpg")}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            </ul>
          </li>

          @php
                $prefix = Request::route()->getPrefix();
                $route = Route::current()->getName();
          @endphp

          <li class="nav-item has-treeview {{($prefix=="/setup") ? "menu-open":"" }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Manage Setups
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href={{route('board.index')}} class="nav-link {{($route=='board.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Boards</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('year.index')}} class="nav-link  {{($route=='year.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Year</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('group.index')}} class="nav-link  {{($route=='group.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Groups</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('unit.index')}} class="nav-link  {{($route=='unit.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Units</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{($prefix=="/application") ? "menu-open":"" }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               Manage Applicants
                <i class="fas fa-angle-left right"></i>

              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href={{route('application.index')}} class="nav-link {{($route=='application.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Applicants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('payment.index')}} class="nav-link  {{($route=='payment.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Payments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('group.index')}} class="nav-link  {{($route=='group.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Groups</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{route('unit.index')}} class="nav-link  {{($route=='unit.index')?"active":""}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Units</p>
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
