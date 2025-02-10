<div class="container-fluid page-body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2">HandyMans</span>
              <span class="text-secondary text-small">Administrator</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('admin/dashboard') }}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Customers</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic3">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('customers') }}">Customers List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Contractors</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('admincontractors') }}">Contractors List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Services</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addservice') }}">Add service</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('service') }}">Service List</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Services-Request</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('servicerequests') }}">Service Request List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Appointment</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('appointments') }}">Appointment List</a></li>
            </ul>
          </div>
        </li>

      

      </ul>
    </nav>
