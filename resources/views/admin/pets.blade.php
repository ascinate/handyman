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
                    <h4 class="card-title">Pet List</h4>
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                            <th> Name </th>
                            <th> Breed </th>
                            <th> Vet </th>
                            <th> Sex </th>
                            <th> Customer </th>
                            <th>Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($pets as $pet)
                        <tr>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->breed }}</td>
                            <td>{{ $pet->vet }}</td>
                            <td>{{ $pet->sex }}</td>
                            <td>
                                @php
                                    $cname = \DB::table('customers')->where('id', $pet->customer_id)->get();
                                    echo @$cname[0]->first_name.' '.@$cname[0]->last_name;
                                @endphp
                            </td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">New Appointment</a>
                                <a href="{{ URL::to('editpet/'.$pet->id) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-border-color" style="font-size: 20px;"></i>
                                </a>
                                <a href="{{ 'deletepet/'.$pet->id }}" class="btn btn-danger btn-sm">
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
