<x-adminheader/>
      <!-- partial -->
   <x-adminsidebar/>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

           <!----Main Row--------->
           <form name="addfrm" action="{{ URL::to('insertservice') }}" method="POST" class="forms-sample">
            @csrf

            <div class="row">

                 <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Add Service</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Type</label>
                                    <select class="form-select" name="service_type" aria-label="Default select example" required>
                                        <option selected>select</option>
                                        <option value="Plumbing Services">Plumbing Services</option>
                                        <option value="Electrical Services">Electrical Services</option>
                                        <option value="HVAC Services">HVAC Services</option>
                                        <option value="Landscaping Services">Landscaping Services</option>
                                        <option value="Roofing & Gutter Services">Roofing & Gutter Services</option>
                                        <option value="Handyman Services">Handyman Services</option>
                                        <option value="Appliance Repair Services">Appliance Repair Services</option>
                                        <option value="Exterior Maintenance Services">Exterior Maintenance Services</option>
                                        <option value="Pest Control Services">Pest Control Services</option>
                                        <option value="Seasonal Services">Seasonal Services</option>
                                        <option value="Accessibility & Safety Services">Accessibility & Safety Services</option>  
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Name</label>
                                    <input type="text" class="form-control" name="service_name">
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
