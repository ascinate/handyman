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
                    <h4 class="card-title">Order List</h4>
                    <table class="table table-striped" id="example2">
                      <thead>
                        <tr>
                            <th> # </th>
                        
                            <th> Transaction Id </th>
                            <th> Customer Name </th>
                            <th> Title Name </th>
                            <th> Price($) </th>
                            <th> Payment Status </th>

                        </tr>
                      </thead>

                      <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>ES0{{ $order->id }}</td>
                            <td>{{ $order->transactionid }}</td>
                            <td>{{ $order->user_name }}</td>
                            <td>{{ $order->product_name	 }}</td>
                            <td>{{ $order->price }}</td>
                            <td>Paid</td>
                            
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
