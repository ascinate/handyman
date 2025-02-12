<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <div class="page-header">
                <h3 class="page-title">
                  <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                  </span> Dashboard
                </h3>
              </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Membership List</h4>
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Price </th>
                            <th> Tags </th>
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($memberships as $membership)
                        <tr>
                            <th> {{ $membership->id }} </th>
                            <td>{{ $membership->title}}</td>
                            <td>{{ $membership->price}}</td>
                            <td>{{ substr($membership->description,0,100) }}...</td>
                            <td>
                                <a href="{{ URL::to('editmembership/'.$membership->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletemembership/'.$membership->id }}" class="btn btn-danger btn-sm">
                                    <i class="mdi mdi-delete" style="font-size: 20px;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

        </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
<x-adminfooter/>
