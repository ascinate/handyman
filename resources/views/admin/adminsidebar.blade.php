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
              <span class="font-weight-bold mb-2">EstudySolutions</span>
              <span class="text-secondary text-small">Administrator</span>
            </div>
            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ URL::to('dashboard') }}">
            <span class="menu-title">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Categories</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addcategory') }}">Add Category</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('categories') }}">Category List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Papertype</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addpapertype') }}">Add Papertype</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('papers') }}">Papertype List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Articles</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic2">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('bulkarticle') }}">Bulk Upload</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addproduct') }}">Add Article</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('products') }}">Article List</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Manage Users</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addcustomer') }}">Add User</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ URL::to('customers') }}">User List</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Memberships</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic4">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('addmembership') }}">Add membership</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('memberships') }}">Membership List</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-title">Manage Universities</span>
            <i class="menu-arrow"></i>
            <i class="mdi mdi-account-multiple-plus menu-icon"></i>
          </a>

          <div class="collapse" id="ui-basic5">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('adduniversity') }}">Add university</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{ URL::to('universities') }}">University List</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>
