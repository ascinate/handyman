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
                    <h4 class="card-title">Service List</h4>
                    <table class="table table-striped dataTable" id="example2">
                      <thead>
                        <tr>
                            <th> # </th>
                            <th> Type </th>
                            <th> Name </th>
                         
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <th> {{ $service->id }} </th>
                            <td>{{ $service->service_type }}</td>
                            <td>{{ $service->service_name }}</td>
                            
                            
                            <td>
                                <a href="{{ URL::to('editservice/'.$service->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ URL::to('deleteservice/'.$service->id) }}" class="btn btn-danger btn-sm">
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
