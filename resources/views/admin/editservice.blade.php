<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           <!----Main Row--------->
           <form name="editfrm" action="{{ URL::to('updateservice') }}" method="POST" class="forms-sample">
           <input type="hidden" name="id" value="{{ $data['id'] }}" />
            @csrf
            <div class="row">
                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Service</h4>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Type</label>
                                    <input type="text" class="form-control" name="service_type" value="{{ $data['service_type'] }}">
                                </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Name</label>
                                        <input type="text" class="form-control" name="service_name" value="{{ $data['service_name'] }}">
                                    </div>
                              </div>
                            </div>

                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                    <button type="button" class="btn btn-light" onclick="javascript:history.go(-1);">Cancel</button>
                  </div>

            </div> <!---- End main row ------->
           </form>

         </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <x-adminfooter/>
