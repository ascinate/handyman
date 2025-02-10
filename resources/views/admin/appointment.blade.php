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
                    <h4 class="card-title">Appointment List</h4>
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                            <th> # </th>
                            <th> Service Name </th>
                            <th> Contructor Name </th>
                            <th> Special Date </th>
                            <th> Service Date </th>
                            <th> City </th>
                            <th> Zipcode </th>
                            <th> Payment Method</th>
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($app as $app)
                        <tr>
                            <th> {{ $app->id }} </th>
                            <td>{{ $app->service_name }}</td>
                            <td>{{ $app->contructor_name }}</td>
                            <td>{{ $app->special_date }}</td>
                            <td>{{ $app->service_date }}</td>
                            <td>{{ $app->city }}</td>
                            <td>{{ $app->zipcode }}</td>
                            <td>{{ $app->payment_method }}</td>
                            <td>
                            <a href="{{ URL::to('viewappointment/'.$app->id) }}" class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                      <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                      <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                </svg>
                                </a>
                                <a href="{{ 'deleteappointment/'.$app->id }}" class="btn btn-danger btn-sm">
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
